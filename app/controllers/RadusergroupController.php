<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadusergroupController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radusergroup
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radusergroup", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "username";

        $radusergroup = Radusergroup::find($parameters);
        if (count($radusergroup) == 0) {
            $this->flash->notice("The search did not find any radusergroup");

            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radusergroup,
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
     * Edits a radusergroup
     *
     * @param string $username
     */
    public function editAction($username)
    {

        if (!$this->request->isPost()) {

            $radusergroup = Radusergroup::findFirstByusername($username);
            if (!$radusergroup) {
                $this->flash->error("radusergroup was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radusergroup",
                    "action" => "index"
                ));
            }

            $this->view->username = $radusergroup->username;

            $this->tag->setDefault("username", $radusergroup->getUsername());
            $this->tag->setDefault("groupname", $radusergroup->getGroupname());
            $this->tag->setDefault("priority", $radusergroup->getPriority());
            
        }
    }

    /**
     * Creates a new radusergroup
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "index"
            ));
        }

        $radusergroup = new Radusergroup();

        $radusergroup->setUsername($this->request->getPost("username"));
        $radusergroup->setGroupname($this->request->getPost("groupname"));
        $radusergroup->setPriority($this->request->getPost("priority"));
        

        if (!$radusergroup->save()) {
            foreach ($radusergroup->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "new"
            ));
        }

        $this->flash->success("radusergroup was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radusergroup",
            "action" => "index"
        ));

    }

    /**
     * Saves a radusergroup edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "index"
            ));
        }

        $username = $this->request->getPost("username");

        $radusergroup = Radusergroup::findFirstByusername($username);
        if (!$radusergroup) {
            $this->flash->error("radusergroup does not exist " . $username);

            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "index"
            ));
        }

        $radusergroup->setUsername($this->request->getPost("username"));
        $radusergroup->setGroupname($this->request->getPost("groupname"));
        $radusergroup->setPriority($this->request->getPost("priority"));
        

        if (!$radusergroup->save()) {

            foreach ($radusergroup->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "edit",
                "params" => array($radusergroup->username)
            ));
        }

        $this->flash->success("radusergroup was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radusergroup",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radusergroup
     *
     * @param string $username
     */
    public function deleteAction($username)
    {

        $radusergroup = Radusergroup::findFirstByusername($username);
        if (!$radusergroup) {
            $this->flash->error("radusergroup was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "index"
            ));
        }

        if (!$radusergroup->delete()) {

            foreach ($radusergroup->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radusergroup",
                "action" => "search"
            ));
        }

        $this->flash->success("radusergroup was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radusergroup",
            "action" => "index"
        ));
    }

}
