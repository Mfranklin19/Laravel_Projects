<?php


class Camper
{
    public $ID;
    public $name;
    public $age;
    public $preferences = array();
    public $assignedClasses = array();

    public function __construct($ID, $name, $age, $preferences, $assignedClasses)
    {
        $this->age = $age;
        $this->ID = $ID;
        $this->name = $name;
        $this->preferences = $preferences;
        $this->assignedClasses = $assignedClasses;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getPreferences(): array
    {
        return $this->preferences;
    }

    /**
     * @return array
     */
    public function getAssignedClasses(): array
    {
        return $this->assignedClasses;
    }


}