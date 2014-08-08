<?php

class Nas extends \Phalcon\Mvc\Model
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
    protected $nasname;

    /**
     *
     * @var string
     */
    protected $shortname;

    /**
     *
     * @var string
     */
    protected $type;

    /**
     *
     * @var integer
     */
    protected $ports;

    /**
     *
     * @var string
     */
    protected $secret;

    /**
     *
     * @var string
     */
    protected $server;

    /**
     *
     * @var string
     */
    protected $community;

    /**
     *
     * @var string
     */
    protected $description;

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
     * Method to set the value of field nasname
     *
     * @param string $nasname
     * @return $this
     */
    public function setNasname($nasname)
    {
        $this->nasname = $nasname;

        return $this;
    }

    /**
     * Method to set the value of field shortname
     *
     * @param string $shortname
     * @return $this
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field ports
     *
     * @param integer $ports
     * @return $this
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * Method to set the value of field secret
     *
     * @param string $secret
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Method to set the value of field server
     *
     * @param string $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Method to set the value of field community
     *
     * @param string $community
     * @return $this
     */
    public function setCommunity($community)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Returns the value of field nasname
     *
     * @return string
     */
    public function getNasname()
    {
        return $this->nasname;
    }

    /**
     * Returns the value of field shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field ports
     *
     * @return integer
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * Returns the value of field secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Returns the value of field server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Returns the value of field community
     *
     * @return string
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

}
