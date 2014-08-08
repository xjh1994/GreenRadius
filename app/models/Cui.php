<?php

class Cui extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $clientipaddress;

    /**
     *
     * @var string
     */
    protected $callingstationid;

    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $cui;

    /**
     *
     * @var string
     */
    protected $creationdate;

    /**
     *
     * @var string
     */
    protected $lastaccounting;

    /**
     * Method to set the value of field clientipaddress
     *
     * @param string $clientipaddress
     * @return $this
     */
    public function setClientipaddress($clientipaddress)
    {
        $this->clientipaddress = $clientipaddress;

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
     * Method to set the value of field cui
     *
     * @param string $cui
     * @return $this
     */
    public function setCui($cui)
    {
        $this->cui = $cui;

        return $this;
    }

    /**
     * Method to set the value of field creationdate
     *
     * @param string $creationdate
     * @return $this
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Method to set the value of field lastaccounting
     *
     * @param string $lastaccounting
     * @return $this
     */
    public function setLastaccounting($lastaccounting)
    {
        $this->lastaccounting = $lastaccounting;

        return $this;
    }

    /**
     * Returns the value of field clientipaddress
     *
     * @return string
     */
    public function getClientipaddress()
    {
        return $this->clientipaddress;
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
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field cui
     *
     * @return string
     */
    public function getCui()
    {
        return $this->cui;
    }

    /**
     * Returns the value of field creationdate
     *
     * @return string
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Returns the value of field lastaccounting
     *
     * @return string
     */
    public function getLastaccounting()
    {
        return $this->lastaccounting;
    }

}
