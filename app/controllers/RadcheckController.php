<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadcheckController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radcheck
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radcheck", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $radcheck = Radcheck::find($parameters);
        if (count($radcheck) == 0) {
            $this->flash->notice("The search did not find any radcheck");

            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radcheck,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a radcheck
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $radcheck = Radcheck::findFirstByid($id);
            if (!$radcheck) {
                $this->flash->error("radcheck was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radcheck",
                    "action" => "index"
                ));
            }

            $this->view->id = $radcheck->id;

            $this->tag->setDefault("id", $radcheck->getId());
            $this->tag->setDefault("username", $radcheck->getUsername());
            $this->tag->setDefault("attribute", $radcheck->getAttribute());
            $this->tag->setDefault("op", $radcheck->getOp());
            $this->tag->setDefault("value", $radcheck->getValue());
            
        }
    }

    /**
     * Creates a new radcheck
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "index"
            ));
        }

        $radcheck = new Radcheck();

        $radcheck->setUsername($this->request->getPost("username"));
        $radcheck->setAttribute($this->request->getPost("attribute"));
        $radcheck->setOp($this->request->getPost("op"));
        $radcheck->setValue($this->request->getPost("value"));
        

        if (!$radcheck->save()) {
            foreach ($radcheck->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "new"
            ));
        }

        $this->flash->success("radcheck was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radcheck",
            "action" => "index"
        ));

    }

    /**
     * Saves a radcheck edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $radcheck = Radcheck::findFirstByid($id);
        if (!$radcheck) {
            $this->flash->error("radcheck does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "index"
            ));
        }

        $radcheck->setUsername($this->request->getPost("username"));
        $radcheck->setAttribute($this->request->getPost("attribute"));
        $radcheck->setOp($this->request->getPost("op"));
        $radcheck->setValue($this->request->getPost("value"));
        

        if (!$radcheck->save()) {

            foreach ($radcheck->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "edit",
                "params" => array($radcheck->id)
            ));
        }

        $this->flash->success("radcheck was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radcheck",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radcheck
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $radcheck = Radcheck::findFirstByid($id);
        if (!$radcheck) {
            $this->flash->error("radcheck was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "index"
            ));
        }

        if (!$radcheck->delete()) {

            foreach ($radcheck->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radcheck",
                "action" => "search"
            ));
        }

        $this->flash->success("radcheck was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radcheck",
            "action" => "index"
        ));
    }

}
