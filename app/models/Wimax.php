<?php

class Wimax extends \Phalcon\Mvc\Model
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
    protected $authdate;

    /**
     *
     * @var string
     */
    protected $spi;

    /**
     *
     * @var string
     */
    protected $mipkey;

    /**
     *
     * @var integer
     */
    protected $lifetime;

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
     * Method to set the value of field spi
     *
     * @param string $spi
     * @return $this
     */
    public function setSpi($spi)
    {
        $this->spi = $spi;

        return $this;
    }

    /**
     * Method to set the value of field mipkey
     *
     * @param string $mipkey
     * @return $this
     */
    public function setMipkey($mipkey)
    {
        $this->mipkey = $mipkey;

        return $this;
    }

    /**
     * Method to set the value of field lifetime
     *
     * @param integer $lifetime
     * @return $this
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;

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
     * Returns the value of field authdate
     *
     * @return string
     */
    public function getAuthdate()
    {
        return $this->authdate;
    }

    /**
     * Returns the value of field spi
     *
     * @return string
     */
    public function getSpi()
    {
        return $this->spi;
    }

    /**
     * Returns the value of field mipkey
     *
     * @return string
     */
    public function getMipkey()
    {
        return $this->mipkey;
    }

    /**
     * Returns the value of field lifetime
     *
     * @return integer
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

}
