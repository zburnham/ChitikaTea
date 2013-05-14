<?php
/**
 * category.php
 * Model for category entity.
 * 
 * @author zburnham
 * 
 */

include('./base.php');

class Category extends Base
{
    /**
     * Database table for persisting data.
     */
    const TABLE = 'Categories';

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
    
    public function create()
    {
        $data = array(
            'name' => $this->input->post('category_name'),
        );
        return $this->db->insert(self::TABLE, $data);
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