<?php
/**
 * base.php
 * Base model with common functionality
 * 
 * @author zburnham
 * 
 */

class Base extends CI_Model
{
    
    protected $table;
    
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
     * Standard load function.  Uses auto-increment primary key to identify
     * record.
     * 
     * @param int $id
     * @return array
     */
    public function load($id)
    {
        $query = $this->db->get_where($this->table, array('ID' => $id));
        return $query->row_array();
    }
    
    /**
     * Returns all records.  Doesn't scale well, insomuch as it doesn't scale
     * at all.
     * 
     * @return array
     */
    public function listAll()
    {
        return $this->db->get(self::TABLE)->result_array();
    }
    
    /**
     * TODO need to do central update function if possible, otherwise do 
     * individual update functions in models
     */
}