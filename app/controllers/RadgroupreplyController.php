<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadgroupreplyController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radgroupreply
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radgroupreply", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $radgroupreply = Radgroupreply::find($parameters);
        if (count($radgroupreply) == 0) {
            $this->flash->notice("The search did not find any radgroupreply");

            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radgroupreply,
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
     * Edits a radgroupreply
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $radgroupreply = Radgroupreply::findFirstByid($id);
            if (!$radgroupreply) {
                $this->flash->error("radgroupreply was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radgroupreply",
                    "action" => "index"
                ));
            }

            $this->view->id = $radgroupreply->id;

            $this->tag->setDefault("id", $radgroupreply->getId());
            $this->tag->setDefault("groupname", $radgroupreply->getGroupname());
            $this->tag->setDefault("attribute", $radgroupreply->getAttribute());
            $this->tag->setDefault("op", $radgroupreply->getOp());
            $this->tag->setDefault("value", $radgroupreply->getValue());
            
        }
    }

    /**
     * Creates a new radgroupreply
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "index"
            ));
        }

        $radgroupreply = new Radgroupreply();

        $radgroupreply->setGroupname($this->request->getPost("groupname"));
        $radgroupreply->setAttribute($this->request->getPost("attribute"));
        $radgroupreply->setOp($this->request->getPost("op"));
        $radgroupreply->setValue($this->request->getPost("value"));
        

        if (!$radgroupreply->save()) {
            foreach ($radgroupreply->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "new"
            ));
        }

        $this->flash->success("radgroupreply was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radgroupreply",
            "action" => "index"
        ));

    }

    /**
     * Saves a radgroupreply edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $radgroupreply = Radgroupreply::findFirstByid($id);
        if (!$radgroupreply) {
            $this->flash->error("radgroupreply does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "index"
            ));
        }

        $radgroupreply->setGroupname($this->request->getPost("groupname"));
        $radgroupreply->setAttribute($this->request->getPost("attribute"));
        $radgroupreply->setOp($this->request->getPost("op"));
        $radgroupreply->setValue($this->request->getPost("value"));
        

        if (!$radgroupreply->save()) {

            foreach ($radgroupreply->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "edit",
                "params" => array($radgroupreply->id)
            ));
        }

        $this->flash->success("radgroupreply was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radgroupreply",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radgroupreply
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $radgroupreply = Radgroupreply::findFirstByid($id);
        if (!$radgroupreply) {
            $this->flash->error("radgroupreply was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "index"
            ));
        }

        if (!$radgroupreply->delete()) {

            foreach ($radgroupreply->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radgroupreply",
                "action" => "search"
            ));
        }

        $this->flash->success("radgroupreply was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radgroupreply",
            "action" => "index"
        ));
    }

}
