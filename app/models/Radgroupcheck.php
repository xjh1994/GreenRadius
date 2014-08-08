<?php

class Radgroupcheck extends \Phalcon\Mvc\Model
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
    protected $groupname;

    /**
     *
     * @var string
     */
    protected $attribute;

    /**
     *
     * @var string
     */
    protected $op;

    /**
     *
     * @var string
     */
    protected $value;

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
     * Method to set the value of field attribute
     *
     * @param string $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Method to set the value of field op
     *
     * @param string $op
     * @return $this
     */
    public function setOp($op)
    {
        $this->op = $op;

        return $this;
    }

    /**
     * Method to set the value of field value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

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
     * Returns the value of field groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Returns the value of field attribute
     *
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Returns the value of field op
     *
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Returns the value of field value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
