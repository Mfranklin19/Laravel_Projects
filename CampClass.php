<?php


class CampClass
{
    public $ID;
    public $size;
    public $name;
    public $ageRestriction;
    public $classLength;
    public $campersAssigned;

    public function __construct($ID,$size,$name,$ageRestriction,$classLength,$campersAssigned)
    {
        $this->ID = $ID;
        $this->size = $size;
        $this->name = $name;
        $this->ageRestriction = $ageRestriction;
        $this->classLength = $classLength;
        $this->campersAssigned = $campersAssigned;
    }

    /**
     * @return integer
     */
    public function getID()
    {
        return $this->ID;
    }


    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }


    /**
     * @return mixed
     */
    public function getClassLength()
    {
        return $this->classLength;
    }


    /**
     * @return mixed
     */
    public function getCampersAssigned()
    {
        return $this->campersAssigned;
    }
}