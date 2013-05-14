<?php
/**
 * rating.php
 * Model for Rating entity.
 * 
 * @author zburnham
 * 
 */

class Rating extends CI_Model
{
    /**
     * Auto-incrementing ID.
     *
     * @var int
     */
    protected $ID;
    
    /**
     * Tea ID (foreign key.)
     *
     * @var int
     */
    protected $teas_ID;
    
    /**
     * Taste rating (1-5).
     *
     * @var int
     */
    protected $taste;
    
    /**
     * Color rating (1-5).
     *
     * @var int
     */
    protected $color;
    
    /**
     * Body rating (1-5).
     *
     * @var int
     */
    protected $body;
    
    /**
     * Taster ID (Foreign key.)
     *
     * @var int
     */
    protected $tasters_ID;
    
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
     * @return \Rating
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeas_ID()
    {
        return $this->teas_ID;
    }

    /**
     * @param int $teas_ID
     * @return \Rating
     */
    public function setTeas_ID($teas_ID)
    {
        $this->teas_ID = $teas_ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaste()
    {
        return $this->taste;
    }

    /**
     * @param int $taste
     * @return \Rating
     */
    public function setTaste($taste)
    {
        $this->taste = $taste;
        return $this;
    }

    /**
     * @return int
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int $color
     * @return \Rating
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param int $body
     * @return \Rating
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return int
     */
    public function getTasters_ID()
    {
        return $this->tasters_ID;
    }

    /**
     * @param int $tasters_ID
     * @return \Rating
     */
    public function setTasters_ID($tasters_ID)
    {
        $this->tasters_ID = $tasters_ID;
        return $this;
    }
}