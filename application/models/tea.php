<?php
/**
 * tea.php
 * Model for Tea entity.
 * 
 * @author zburnham
 * 
 */

if (!class_exists('Base')) { include('base.php');}

class Tea extends Base
{
    /**
     * Database table for persisting data.
     * 
     * @var string
     */
    protected $table = "Teas";
    
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
    protected $tea_name;
    
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
    
    /**
     * Creates a new entry.
     * 
     * @return bool
     */
    public function create()
    {
        $data = array(
            'tea_name' => $this->input->post('tea_name'),
            'categories_ID' => $this->input->post('categories_ID'),
        );
        return $this->db->insert($this->table, $data);
    }
    
    /**
     * Simple string-matching search function.
     * 
     * @return array
     */
    public function search()
    {
        $keyword = '%' . trim($this->input->post('keyword')) . '%';
        $this->db
                ->select('Categories.name, tea_name, Teas.ID')
                ->from($this->table)
                ->join('Categories', 'Categories.ID = ' . $this->table . '.categories_ID')
                ->where('tea_name LIKE ', $keyword);
        return array('search_results' => $this->db->get()->result_array());
    }
    
    /**
     * Finds all teas in a given category.
     * 
     * @return array
     */
    public function getAllInCategory()
    {
        $id = $this->input->get('id');
        return $this->db
                ->get_where($this->table, array('categories_ID' => $id))
                ->result_array();
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
    public function getTea_name()
    {
        return $this->tea_name;
    }

    /**
     * @param string $name
     * @return \Tea
     */
    public function setTea_name($tea_name)
    {
        $this->tea_name = $tea_name;
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
