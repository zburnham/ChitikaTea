<?php
/**
 * tea.php
 * Model for Tea entity.
 * 
 * @author zburnham
 * 
 */

include('./base.php');

class Tea extends Base
{
    /**
     * Database table for persisting data.
     */
    const TABLE = 'Teas';
    
    /**
     * Auto-incrementing ID.
     *
     * @var int
     */
    protected $ID;
    
    /**
     * Tea variety name.
     *
     * @var string
     */
    protected $name;
    
    /**
     * Category ID (foreign key.)
     *
     * @var int
     */
    protected $categories_ID;
    
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
            'name' => $this->input->post('name'),
            'categories_ID' => $this->input->post('categories_ID'),
        );
        return $this->db->insert(self::TABLE, $data);
    }
    
    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getCategories_ID()
    {
        return $this->categories_ID;
    }

    public function setCategories_ID($categories_ID)
    {
        $this->categories_ID = $categories_ID;
        return $this;
    }
}