<?php

class Radacct extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $radacctid;

    /**
     *
     * @var string
     */
    protected $acctsessionid;

    /**
     *
     * @var string
     */
    protected $acctuniqueid;

    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $groupname;

    /**
     *
     * @var string
     */
    protected $realm;

    /**
     *
     * @var string
     */
    protected $nasipaddress;

    /**
     *
     * @var string
     */
    protected $nasportid;

    /**
     *
     * @var string
     */
    protected $nasporttype;

    /**
     *
     * @var string
     */
    protected $acctstarttime;

    /**
     *
     * @var string
     */
    protected $acctstoptime;

    /**
     *
     * @var integer
     */
    protected $acctsessiontime;

    /**
     *
     * @var string
     */
    protected $acctauthentic;

    /**
     *
     * @var string
     */
    protected $connectinfo_start;

    /**
     *
     * @var string
     */
    protected $connectinfo_stop;

    /**
     *
     * @var integer
     */
    protected $acctinputoctets;

    /**
     *
     * @var integer
     */
    protected $acctoutputoctets;

    /**
     *
     * @var string
     */
    protected $calledstationid;

    /**
     *
     * @var string
     */
    protected $callingstationid;

    /**
     *
     * @var string
     */
    protected $acctterminatecause;

    /**
     *
     * @var string
     */
    protected $servicetype;

    /**
     *
     * @var string
     */
    protected $framedprotocol;

    /**
     *
     * @var string
     */
    protected $framedipaddress;

    /**
     *
     * @var integer
     */
    protected $acctstartdelay;

    /**
     *
     * @var integer
     */
    protected $acctstopdelay;

    /**
     *
     * @var string
     */
    protected $xascendsessionsvrkey;

    /**
     * Method to set the value of field radacctid
     *
     * @param integer $radacctid
     * @return $this
     */
    public function setRadacctid($radacctid)
    {
        $this->radacctid = $radacctid;

        return $this;
    }

    /**
     * Method to set the value of field acctsessionid
     *
     * @param string $acctsessionid
     * @return $this
     */
    public function setAcctsessionid($acctsessionid)
    {
        $this->acctsessionid = $acctsessionid;

        return $this;
    }

    /**
     * Method to set the value of field acctuniqueid
     *
     * @param string $acctuniqueid
     * @return $this
     */
    public function setAcctuniqueid($acctuniqueid)
    {
        $this->acctuniqueid = $acctuniqueid;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field groupname
     *
     * @param string $groupname
     * @return $this
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Method to set the value of field realm
     *
     * @param string $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Method to set the value of field nasipaddress
     *
     * @param string $nasipaddress
     * @return $this
     */
    public function setNasipaddress($nasipaddress)
    {
        $this->nasipaddress = $nasipaddress;

        return $this;
    }

    /**
     * Method to set the value of field nasportid
     *
     * @param string $nasportid
     * @return $this
     */
    public function setNasportid($nasportid)
    {
        $this->nasportid = $nasportid;

        return $this;
    }

    /**
     * Method to set the value of field nasporttype
     *
     * @param string $nasporttype
     * @return $this
     */
    public function setNasporttype($nasporttype)
    {
        $this->nasporttype = $nasporttype;

        return $this;
    }

    /**
     * Method to set the value of field acctstarttime
     *
     * @param string $acctstarttime
     * @return $this
     */
    public function setAcctstarttime($acctstarttime)
    {
        $this->acctstarttime = $acctstarttime;

        return $this;
    }

    /**
     * Method to set the value of field acctstoptime
     *
     * @param string $acctstoptime
     * @return $this
     */
    public function setAcctstoptime($acctstoptime)
    {
        $this->acctstoptime = $acctstoptime;

        return $this;
    }

    /**
     * Method to set the value of field acctsessiontime
     *
     * @param integer $acctsessiontime
     * @return $this
     */
    public function setAcctsessiontime($acctsessiontime)
    {
        $this->acctsessiontime = $acctsessiontime;

        return $this;
    }

    /**
     * Method to set the value of field acctauthentic
     *
     * @param string $acctauthentic
     * @return $this
     */
    public function setAcctauthentic($acctauthentic)
    {
        $this->acctauthentic = $acctauthentic;

        return $this;
    }

    /**
     * Method to set the value of field connectinfo_start
     *
     * @param string $connectinfo_start
     * @return $this
     */
    public function setConnectinfoStart($connectinfo_start)
    {
        $this->connectinfo_start = $connectinfo_start;

        return $this;
    }

    /**
     * Method to set the value of field connectinfo_stop
     *
     * @param string $connectinfo_stop
     * @return $this
     */
    public function setConnectinfoStop($connectinfo_stop)
    {
        $this->connectinfo_stop = $connectinfo_stop;

        return $this;
    }

    /**
     * Method to set the value of field acctinputoctets
     *
     * @param integer $acctinputoctets
     * @return $this
     */
    public function setAcctinputoctets($acctinputoctets)
    {
        $this->acctinputoctets = $acctinputoctets;

        return $this;
    }

    /**
     * Method to set the value of field acctoutputoctets
     *
     * @param integer $acctoutputoctets
     * @return $this
     */
    public function setAcctoutputoctets($acctoutputoctets)
    {
        $this->acctoutputoctets = $acctoutputoctets;

        return $this;
    }

    /**
     * Method to set the value of field calledstationid
     *
     * @param string $calledstationid
     * @return $this
     */
    public function setCalledstationid($calledstationid)
    {
        $this->calledstationid = $calledstationid;

        return $this;
    }

    /**
     * Method to set the value of field callingstationid
     *
     * @param string $callingstationid
     * @return $this
     */
    public function setCallingstationid($callingstationid)
    {
        $this->callingstationid = $callingstationid;

        return $this;
    }

    /**
     * Method to set the value of field acctterminatecause
     *
     * @param string $acctterminatecause
     * @return $this
     */
    public function setAcctterminatecause($acctterminatecause)
    {
        $this->acctterminatecause = $acctterminatecause;

        return $this;
    }

    /**
     * Method to set the value of field servicetype
     *
     * @param string $servicetype
     * @return $this
     */
    public function setServicetype($servicetype)
    {
        $this->servicetype = $servicetype;

        return $this;
    }

    /**
     * Method to set the value of field framedprotocol
     *
     * @param string $framedprotocol
     * @return $this
     */
    public function setFramedprotocol($framedprotocol)
    {
        $this->framedprotocol = $framedprotocol;

        return $this;
    }

    /**
     * Method to set the value of field framedipaddress
     *
     * @param string $framedipaddress
     * @return $this
     */
    public function setFramedipaddress($framedipaddress)
    {
        $this->framedipaddress = $framedipaddress;

        return $this;
    }

    /**
     * Method to set the value of field acctstartdelay
     *
     * @param integer $acctstartdelay
     * @return $this
     */
    public function setAcctstartdelay($acctstartdelay)
    {
        $this->acctstartdelay = $acctstartdelay;

        return $this;
    }

    /**
     * Method to set the value of field acctstopdelay
     *
     * @param integer $acctstopdelay
     * @return $this
     */
    public function setAcctstopdelay($acctstopdelay)
    {
        $this->acctstopdelay = $acctstopdelay;

        return $this;
    }

    /**
     * Method to set the value of field xascendsessionsvrkey
     *
     * @param string $xascendsessionsvrkey
     * @return $this
     */
    public function setXascendsessionsvrkey($xascendsessionsvrkey)
    {
        $this->xascendsessionsvrkey = $xascendsessionsvrkey;

        return $this;
    }

    /**
     * Returns the value of field radacctid
     *
     * @return integer
     */
    public function getRadacctid()
    {
        return $this->radacctid;
    }

    /**
     * Returns the value of field acctsessionid
     *
     * @return string
     */
    public function getAcctsessionid()
    {
        return $this->acctsessionid;
    }

    /**
     * Returns the value of field acctuniqueid
     *
     * @return string
     */
    public function getAcctuniqueid()
    {
        return $this->acctuniqueid;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Returns the value of field realm
     *
     * @return string
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Returns the value of field nasipaddress
     *
     * @return string
     */
    public function getNasipaddress()
    {
        return $this->nasipaddress;
    }

    /**
     * Returns the value of field nasportid
     *
     * @return string
     */
    public function getNasportid()
    {
        return $this->nasportid;
    }

    /**
     * Returns the value of field nasporttype
     *
     * @return string
     */
    public function getNasporttype()
    {
        return $this->nasporttype;
    }

    /**
     * Returns the value of field acctstarttime
     *
     * @return string
     */
    public function getAcctstarttime()
    {
        return $this->acctstarttime;
    }

    /**
     * Returns the value of field acctstoptime
     *
     * @return string
     */
    public function getAcctstoptime()
    {
        return $this->acctstoptime;
    }

    /**
     * Returns the value of field acctsessiontime
     *
     * @return integer
     */
    public function getAcctsessiontime()
    {
        return $this->acctsessiontime;
    }

    /**
     * Returns the value of field acctauthentic
     *
     * @return string
     */
    public function getAcctauthentic()
    {
        return $this->acctauthentic;
    }

    /**
     * Returns the value of field connectinfo_start
     *
     * @return string
     */
    public function getConnectinfoStart()
    {
        return $this->connectinfo_start;
    }

    /**
     * Returns the value of field connectinfo_stop
     *
     * @return string
     */
    public function getConnectinfoStop()
    {
        return $this->connectinfo_stop;
    }

    /**
     * Returns the value of field acctinputoctets
     *
     * @return integer
     */
    public function getAcctinputoctets()
    {
        return $this->acctinputoctets;
    }

    /**
     * Returns the value of field acctoutputoctets
     *
     * @return integer
     */
    public function getAcctoutputoctets()
    {
        return $this->acctoutputoctets;
    }

    /**
     * Returns the value of field calledstationid
     *
     * @return string
     */
    public function getCalledstationid()
    {
        return $this->calledstationid;
    }

    /**
     * Returns the value of field callingstationid
     *
     * @return string
     */
    public function getCallingstationid()
    {
        return $this->callingstationid;
    }

    /**
     * Returns the value of field acctterminatecause
     *
     * @return string
     */
    public function getAcctterminatecause()
    {
        return $this->acctterminatecause;
    }

    /**
     * Returns the value of field servicetype
     *
     * @return string
     */
    public function getServicetype()
    {
        return $this->servicetype;
    }

    /**
     * Returns the value of field framedprotocol
     *
     * @return string
     */
    public function getFramedprotocol()
    {
        return $this->framedprotocol;
    }

    /**
     * Returns the value of field framedipaddress
     *
     * @return string
     */
    public function getFramedipaddress()
    {
        return $this->framedipaddress;
    }

    /**
     * Returns the value of field acctstartdelay
     *
     * @return integer
     */
    public function getAcctstartdelay()
    {
        return $this->acctstartdelay;
    }

    /**
     * Returns the value of field acctstopdelay
     *
     * @return integer
     */
    public function getAcctstopdelay()
    {
        return $this->acctstopdelay;
    }

    /**
     * Returns the value of field xascendsessionsvrkey
     *
     * @return string
     */
    public function getXascendsessionsvrkey()
    {
        return $this->xascendsessionsvrkey;
    }

}
