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
    
    public function getTopFive()
    {
        
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
     * @return \Tea
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
     * @return \Tea
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategories_ID()
    {
        return $this->categories_ID;
    }

    /**
     * @param int $categories_ID
     * @return \Tea
     */

    public function setCategories_ID($categories_ID)
    {
        $this->categories_ID = $categories_ID;
        return $this;
    }
}
