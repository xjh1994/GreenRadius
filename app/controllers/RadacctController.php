<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class RadacctController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for radacct
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Radacct", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "radacctid";

        $radacct = Radacct::find($parameters);
        if (count($radacct) == 0) {
            $this->flash->notice("The search did not find any radacct");

            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $radacct,
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
     * Edits a radacct
     *
     * @param string $radacctid
     */
    public function editAction($radacctid)
    {

        if (!$this->request->isPost()) {

            $radacct = Radacct::findFirstByradacctid($radacctid);
            if (!$radacct) {
                $this->flash->error("radacct was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "radacct",
                    "action" => "index"
                ));
            }

            $this->view->radacctid = $radacct->radacctid;

            $this->tag->setDefault("radacctid", $radacct->getRadacctid());
            $this->tag->setDefault("acctsessionid", $radacct->getAcctsessionid());
            $this->tag->setDefault("acctuniqueid", $radacct->getAcctuniqueid());
            $this->tag->setDefault("username", $radacct->getUsername());
            $this->tag->setDefault("groupname", $radacct->getGroupname());
            $this->tag->setDefault("realm", $radacct->getRealm());
            $this->tag->setDefault("nasipaddress", $radacct->getNasipaddress());
            $this->tag->setDefault("nasportid", $radacct->getNasportid());
            $this->tag->setDefault("nasporttype", $radacct->getNasporttype());
            $this->tag->setDefault("acctstarttime", $radacct->getAcctstarttime());
            $this->tag->setDefault("acctstoptime", $radacct->getAcctstoptime());
            $this->tag->setDefault("acctsessiontime", $radacct->getAcctsessiontime());
            $this->tag->setDefault("acctauthentic", $radacct->getAcctauthentic());
            $this->tag->setDefault("connectinfo_start", $radacct->getConnectinfoStart());
            $this->tag->setDefault("connectinfo_stop", $radacct->getConnectinfoStop());
            $this->tag->setDefault("acctinputoctets", $radacct->getAcctinputoctets());
            $this->tag->setDefault("acctoutputoctets", $radacct->getAcctoutputoctets());
            $this->tag->setDefault("calledstationid", $radacct->getCalledstationid());
            $this->tag->setDefault("callingstationid", $radacct->getCallingstationid());
            $this->tag->setDefault("acctterminatecause", $radacct->getAcctterminatecause());
            $this->tag->setDefault("servicetype", $radacct->getServicetype());
            $this->tag->setDefault("framedprotocol", $radacct->getFramedprotocol());
            $this->tag->setDefault("framedipaddress", $radacct->getFramedipaddress());
            $this->tag->setDefault("acctstartdelay", $radacct->getAcctstartdelay());
            $this->tag->setDefault("acctstopdelay", $radacct->getAcctstopdelay());
            $this->tag->setDefault("xascendsessionsvrkey", $radacct->getXascendsessionsvrkey());
            
        }
    }

    /**
     * Creates a new radacct
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "index"
            ));
        }

        $radacct = new Radacct();

        $radacct->setAcctsessionid($this->request->getPost("acctsessionid"));
        $radacct->setAcctuniqueid($this->request->getPost("acctuniqueid"));
        $radacct->setUsername($this->request->getPost("username"));
        $radacct->setGroupname($this->request->getPost("groupname"));
        $radacct->setRealm($this->request->getPost("realm"));
        $radacct->setNasipaddress($this->request->getPost("nasipaddress"));
        $radacct->setNasportid($this->request->getPost("nasportid"));
        $radacct->setNasporttype($this->request->getPost("nasporttype"));
        $radacct->setAcctstarttime($this->request->getPost("acctstarttime"));
        $radacct->setAcctstoptime($this->request->getPost("acctstoptime"));
        $radacct->setAcctsessiontime($this->request->getPost("acctsessiontime"));
        $radacct->setAcctauthentic($this->request->getPost("acctauthentic"));
        $radacct->setConnectinfoStart($this->request->getPost("connectinfo_start"));
        $radacct->setConnectinfoStop($this->request->getPost("connectinfo_stop"));
        $radacct->setAcctinputoctets($this->request->getPost("acctinputoctets"));
        $radacct->setAcctoutputoctets($this->request->getPost("acctoutputoctets"));
        $radacct->setCalledstationid($this->request->getPost("calledstationid"));
        $radacct->setCallingstationid($this->request->getPost("callingstationid"));
        $radacct->setAcctterminatecause($this->request->getPost("acctterminatecause"));
        $radacct->setServicetype($this->request->getPost("servicetype"));
        $radacct->setFramedprotocol($this->request->getPost("framedprotocol"));
        $radacct->setFramedipaddress($this->request->getPost("framedipaddress"));
        $radacct->setAcctstartdelay($this->request->getPost("acctstartdelay"));
        $radacct->setAcctstopdelay($this->request->getPost("acctstopdelay"));
        $radacct->setXascendsessionsvrkey($this->request->getPost("xascendsessionsvrkey"));
        

        if (!$radacct->save()) {
            foreach ($radacct->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "new"
            ));
        }

        $this->flash->success("radacct was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radacct",
            "action" => "index"
        ));

    }

    /**
     * Saves a radacct edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "index"
            ));
        }

        $radacctid = $this->request->getPost("radacctid");

        $radacct = Radacct::findFirstByradacctid($radacctid);
        if (!$radacct) {
            $this->flash->error("radacct does not exist " . $radacctid);

            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "index"
            ));
        }

        $radacct->setAcctsessionid($this->request->getPost("acctsessionid"));
        $radacct->setAcctuniqueid($this->request->getPost("acctuniqueid"));
        $radacct->setUsername($this->request->getPost("username"));
        $radacct->setGroupname($this->request->getPost("groupname"));
        $radacct->setRealm($this->request->getPost("realm"));
        $radacct->setNasipaddress($this->request->getPost("nasipaddress"));
        $radacct->setNasportid($this->request->getPost("nasportid"));
        $radacct->setNasporttype($this->request->getPost("nasporttype"));
        $radacct->setAcctstarttime($this->request->getPost("acctstarttime"));
        $radacct->setAcctstoptime($this->request->getPost("acctstoptime"));
        $radacct->setAcctsessiontime($this->request->getPost("acctsessiontime"));
        $radacct->setAcctauthentic($this->request->getPost("acctauthentic"));
        $radacct->setConnectinfoStart($this->request->getPost("connectinfo_start"));
        $radacct->setConnectinfoStop($this->request->getPost("connectinfo_stop"));
        $radacct->setAcctinputoctets($this->request->getPost("acctinputoctets"));
        $radacct->setAcctoutputoctets($this->request->getPost("acctoutputoctets"));
        $radacct->setCalledstationid($this->request->getPost("calledstationid"));
        $radacct->setCallingstationid($this->request->getPost("callingstationid"));
        $radacct->setAcctterminatecause($this->request->getPost("acctterminatecause"));
        $radacct->setServicetype($this->request->getPost("servicetype"));
        $radacct->setFramedprotocol($this->request->getPost("framedprotocol"));
        $radacct->setFramedipaddress($this->request->getPost("framedipaddress"));
        $radacct->setAcctstartdelay($this->request->getPost("acctstartdelay"));
        $radacct->setAcctstopdelay($this->request->getPost("acctstopdelay"));
        $radacct->setXascendsessionsvrkey($this->request->getPost("xascendsessionsvrkey"));
        

        if (!$radacct->save()) {

            foreach ($radacct->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "edit",
                "params" => array($radacct->radacctid)
            ));
        }

        $this->flash->success("radacct was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radacct",
            "action" => "index"
        ));

    }

    /**
     * Deletes a radacct
     *
     * @param string $radacctid
     */
    public function deleteAction($radacctid)
    {

        $radacct = Radacct::findFirstByradacctid($radacctid);
        if (!$radacct) {
            $this->flash->error("radacct was not found");

            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "index"
            ));
        }

        if (!$radacct->delete()) {

            foreach ($radacct->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "radacct",
                "action" => "search"
            ));
        }

        $this->flash->success("radacct was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "radacct",
            "action" => "index"
        ));
    }

}
