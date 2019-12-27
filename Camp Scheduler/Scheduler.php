<?php


class Scheduler
{
    public $classList = array();
    public $camperList = array();
    public $draftingOrder = array();
    public $draftingWeights = array();
    public $classesDrafted = array();
    public $NUM_PREFERENCES = 10;
    public $NUM_CLASSES = 6;
    public $MAX_CLASS_SIZE = 13;
    public $incompleteCampers = array();

    public function __construct()
    {
    }
}