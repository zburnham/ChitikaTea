<?php
/**
 * tea.php
 * Model for Tea entity.
 * 
 * @author zburnham
 * 
 */

class Tea extends CI_Model
{
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
}