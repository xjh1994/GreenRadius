<?php

class Radusergroup extends \Phalcon\Mvc\Model
{

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
     * @var integer
     */
    protected $priority;

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
     * Method to set the value of field priority
     *
     * @param integer $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
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
     * Returns the value of field priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

}
