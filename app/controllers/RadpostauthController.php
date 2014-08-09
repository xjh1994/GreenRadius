<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadpostauthController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radpostauth
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radpostauth", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $radpostauth = Radpostauth::find($parameters);
        if (count($radpostauth) == 0) {
            $this->flash->notice("The search did not find any radpostauth");

            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radpostauth,
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
     * Edits a radpostauth
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $radpostauth = Radpostauth::findFirstByid($id);
            if (!$radpostauth) {
                $this->flash->error("radpostauth was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radpostauth",
                    "action" => "index"
                ));
            }

            $this->view->id = $radpostauth->id;

            $this->tag->setDefault("id", $radpostauth->getId());
            $this->tag->setDefault("username", $radpostauth->getUsername());
            $this->tag->setDefault("pass", $radpostauth->getPass());
            $this->tag->setDefault("reply", $radpostauth->getReply());
            $this->tag->setDefault("authdate", $radpostauth->getAuthdate());
            
        }
    }

    /**
     * Creates a new radpostauth
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "index"
            ));
        }

        $radpostauth = new Radpostauth();

        $radpostauth->setUsername($this->request->getPost("username"));
        $radpostauth->setPass($this->request->getPost("pass"));
        $radpostauth->setReply($this->request->getPost("reply"));
        $radpostauth->setAuthdate($this->request->getPost("authdate"));
        

        if (!$radpostauth->save()) {
            foreach ($radpostauth->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "new"
            ));
        }

        $this->flash->success("radpostauth was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radpostauth",
            "action" => "index"
        ));

    }

    /**
     * Saves a radpostauth edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $radpostauth = Radpostauth::findFirstByid($id);
        if (!$radpostauth) {
            $this->flash->error("radpostauth does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "index"
            ));
        }

        $radpostauth->setUsername($this->request->getPost("username"));
        $radpostauth->setPass($this->request->getPost("pass"));
        $radpostauth->setReply($this->request->getPost("reply"));
        $radpostauth->setAuthdate($this->request->getPost("authdate"));
        

        if (!$radpostauth->save()) {

            foreach ($radpostauth->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "edit",
                "params" => array($radpostauth->id)
            ));
        }

        $this->flash->success("radpostauth was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radpostauth",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radpostauth
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $radpostauth = Radpostauth::findFirstByid($id);
        if (!$radpostauth) {
            $this->flash->error("radpostauth was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "index"
            ));
        }

        if (!$radpostauth->delete()) {

            foreach ($radpostauth->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radpostauth",
                "action" => "search"
            ));
        }

        $this->flash->success("radpostauth was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radpostauth",
            "action" => "index"
        ));
    }

}
