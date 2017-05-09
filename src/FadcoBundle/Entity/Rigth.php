<?php

namespace FadcoBundle\Entity;

/**
 * Rigth
 */
class Rigth
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $express;

    /**
     * @var string
     */
    private $description;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set express
     *
     * @param string $express
     *
     * @return Rigth
     */
    public function setExpress($express)
    {
        $this->express = $express;

        return $this;
    }

    /**
     * Get express
     *
     * @return string
     */
    public function getExpress()
    {
        return $this->express;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Rigth
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function isIn(array $roles){
        return in_array($this->express, $roles);
    }
}
