<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadreplyController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radreply
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radreply", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $radreply = Radreply::find($parameters);
        if (count($radreply) == 0) {
            $this->flash->notice("The search did not find any radreply");

            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radreply,
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
     * Edits a radreply
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $radreply = Radreply::findFirstByid($id);
            if (!$radreply) {
                $this->flash->error("radreply was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radreply",
                    "action" => "index"
                ));
            }

            $this->view->id = $radreply->id;

            $this->tag->setDefault("id", $radreply->getId());
            $this->tag->setDefault("username", $radreply->getUsername());
            $this->tag->setDefault("attribute", $radreply->getAttribute());
            $this->tag->setDefault("op", $radreply->getOp());
            $this->tag->setDefault("value", $radreply->getValue());
            
        }
    }

    /**
     * Creates a new radreply
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "index"
            ));
        }

        $radreply = new Radreply();

        $radreply->setUsername($this->request->getPost("username"));
        $radreply->setAttribute($this->request->getPost("attribute"));
        $radreply->setOp($this->request->getPost("op"));
        $radreply->setValue($this->request->getPost("value"));
        

        if (!$radreply->save()) {
            foreach ($radreply->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "new"
            ));
        }

        $this->flash->success("radreply was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radreply",
            "action" => "index"
        ));

    }

    /**
     * Saves a radreply edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $radreply = Radreply::findFirstByid($id);
        if (!$radreply) {
            $this->flash->error("radreply does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "index"
            ));
        }

        $radreply->setUsername($this->request->getPost("username"));
        $radreply->setAttribute($this->request->getPost("attribute"));
        $radreply->setOp($this->request->getPost("op"));
        $radreply->setValue($this->request->getPost("value"));
        

        if (!$radreply->save()) {

            foreach ($radreply->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "edit",
                "params" => array($radreply->id)
            ));
        }

        $this->flash->success("radreply was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radreply",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radreply
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $radreply = Radreply::findFirstByid($id);
        if (!$radreply) {
            $this->flash->error("radreply was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "index"
            ));
        }

        if (!$radreply->delete()) {

            foreach ($radreply->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radreply",
                "action" => "search"
            ));
        }

        $this->flash->success("radreply was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radreply",
            "action" => "index"
        ));
    }

}
