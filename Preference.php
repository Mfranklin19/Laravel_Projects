<?php


class Preference
{
    public CampClass $classPref;
    public $rank;
    public $attempted;

    public function __construct($classPref,$rank,$attempted)
    {
        $this->classPref = $classPref;
        $this->rank = $rank;
        $this->attempted = $attempted;
    }

    /**
     * @return CampClass
     */
    public function getClassPref(): CampClass
    {
        return $this->classPref;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return mixed
     */
    public function getAttempted()
    {
        return $this->attempted;
    }
}