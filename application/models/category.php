<?php
/**
 * category.php
 * Model for category entity.
 * 
 * @author zburnham
 * 
 */

class Category extends Base
{
    /**
     * Database table for persisting data.
     */
    protected $table = "Categories";

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
     * Creates a new category.
     * 
     * @return bool
     */
    public function create()
    {
        $data = array(
            'name' => $this->input->post('category_name'),
        );
        return $this->db->insert(self::TABLE, $data);
    }

    /**
     * Returns information on all categories available.
     * 
     * @return array
     */
    public function getList()
    {
        return $this->db->get($this->table)->result_array();
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