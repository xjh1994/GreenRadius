<?php

class Radippool extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $pool_name;

    /**
     *
     * @var string
     */
    protected $framedipaddress;

    /**
     *
     * @var string
     */
    protected $nasipaddress;

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
    protected $expiry_time;

    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $pool_key;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field pool_name
     *
     * @param string $pool_name
     * @return $this
     */
    public function setPoolName($pool_name)
    {
        $this->pool_name = $pool_name;

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
     * Method to set the value of field expiry_time
     *
     * @param string $expiry_time
     * @return $this
     */
    public function setExpiryTime($expiry_time)
    {
        $this->expiry_time = $expiry_time;

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
     * Method to set the value of field pool_key
     *
     * @param string $pool_key
     * @return $this
     */
    public function setPoolKey($pool_key)
    {
        $this->pool_key = $pool_key;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field pool_name
     *
     * @return string
     */
    public function getPoolName()
    {
        return $this->pool_name;
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
     * Returns the value of field nasipaddress
     *
     * @return string
     */
    public function getNasipaddress()
    {
        return $this->nasipaddress;
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
     * Returns the value of field expiry_time
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiry_time;
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
     * Returns the value of field pool_key
     *
     * @return string
     */
    public function getPoolKey()
    {
        return $this->pool_key;
    }

}
