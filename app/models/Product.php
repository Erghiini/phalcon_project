<?php

class Product extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var int
     */
    public $price;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $image;
}