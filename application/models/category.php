<?php
/**
 * category.php
 * Model for category entity.
 * 
 * @author zburnham
 * 
 */

class Category extends CI_Model
{
    /**
     * Auto-incrementing ID.
     *
     * @var int
     */
    protected $ID;
    
    /**
     * Category name.
     *
     * @var string
     */
    protected $name;
    
    /**
     * Class constructor.  Extends initial prototype.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Category
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}