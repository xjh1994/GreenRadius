<?php

class Radpostauth extends \Phalcon\Mvc\Model
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
    protected $username;

    /**
     *
     * @var string
     */
    protected $pass;

    /**
     *
     * @var string
     */
    protected $reply;

    /**
     *
     * @var string
     */
    protected $authdate;

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
     * Method to set the value of field pass
     *
     * @param string $pass
     * @return $this
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Method to set the value of field reply
     *
     * @param string $reply
     * @return $this
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Method to set the value of field authdate
     *
     * @param string $authdate
     * @return $this
     */
    public function setAuthdate($authdate)
    {
        $this->authdate = $authdate;

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
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Returns the value of field reply
     *
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Returns the value of field authdate
     *
     * @return string
     */
    public function getAuthdate()
    {
        return $this->authdate;
    }

}
