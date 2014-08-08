<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadgroupcheckController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radgroupcheck
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radgroupcheck", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $radgroupcheck = Radgroupcheck::find($parameters);
        if (count($radgroupcheck) == 0) {
            $this->flash->notice("The search did not find any radgroupcheck");

            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radgroupcheck,
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
     * Edits a radgroupcheck
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $radgroupcheck = Radgroupcheck::findFirstByid($id);
            if (!$radgroupcheck) {
                $this->flash->error("radgroupcheck was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radgroupcheck",
                    "action" => "index"
                ));
            }

            $this->view->id = $radgroupcheck->id;

            $this->tag->setDefault("id", $radgroupcheck->getId());
            $this->tag->setDefault("groupname", $radgroupcheck->getGroupname());
            $this->tag->setDefault("attribute", $radgroupcheck->getAttribute());
            $this->tag->setDefault("op", $radgroupcheck->getOp());
            $this->tag->setDefault("value", $radgroupcheck->getValue());
            
        }
    }

    /**
     * Creates a new radgroupcheck
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "index"
            ));
        }

        $radgroupcheck = new Radgroupcheck();

        $radgroupcheck->setGroupname($this->request->getPost("groupname"));
        $radgroupcheck->setAttribute($this->request->getPost("attribute"));
        $radgroupcheck->setOp($this->request->getPost("op"));
        $radgroupcheck->setValue($this->request->getPost("value"));
        

        if (!$radgroupcheck->save()) {
            foreach ($radgroupcheck->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "new"
            ));
        }

        $this->flash->success("radgroupcheck was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radgroupcheck",
            "action" => "index"
        ));

    }

    /**
     * Saves a radgroupcheck edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $radgroupcheck = Radgroupcheck::findFirstByid($id);
        if (!$radgroupcheck) {
            $this->flash->error("radgroupcheck does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "index"
            ));
        }

        $radgroupcheck->setGroupname($this->request->getPost("groupname"));
        $radgroupcheck->setAttribute($this->request->getPost("attribute"));
        $radgroupcheck->setOp($this->request->getPost("op"));
        $radgroupcheck->setValue($this->request->getPost("value"));
        

        if (!$radgroupcheck->save()) {

            foreach ($radgroupcheck->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "edit",
                "params" => array($radgroupcheck->id)
            ));
        }

        $this->flash->success("radgroupcheck was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radgroupcheck",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radgroupcheck
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $radgroupcheck = Radgroupcheck::findFirstByid($id);
        if (!$radgroupcheck) {
            $this->flash->error("radgroupcheck was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "index"
            ));
        }

        if (!$radgroupcheck->delete()) {

            foreach ($radgroupcheck->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radgroupcheck",
                "action" => "search"
            ));
        }

        $this->flash->success("radgroupcheck was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radgroupcheck",
            "action" => "index"
        ));
    }

}
