<?php
/**
 * rating.php
 * Model for Rating entity.
 * 
 * @author zburnham
 * 
 */

if (!class_exists('Base')) { include('base.php');}

class Rating extends Base
{ 
    /**
     * Database table for persisting data.
     * 
     * @var string
     */
    protected $table = 'Ratings';
    
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
     * Any free-form notes.
     *
     * @var string
     */
    protected $notes;
    
    /**
     * Time rating was entered.
     *
     * @var string
     */
    protected $timestamp;
    
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
            'body' => $this->input->post('body'),
            'color' => $this->input->post('color'),
            'taste' => $this->input->post('taste'),
            'tasters_ID' => $this->input->post('tasters_ID'),
            'teas_ID'=> $this->input->post('teas_ID'),
            'notes' => $this->input->post('notes'),
        );
        
        return $this->db->insert($this->table, $data);
    }
    
    public function getTeaAverages($teas_ID)
    {
        $query = $this->db->get_where($this->table, array('teas_ID' => $teas_ID));
        $averages = array();
        $averages['count'] = $count = $query->num_rows();
        if (0 < $count) {
            $body = $color = $taste = 0;
            foreach($query->result_array() as $row) {
                $body += $row['body'];
                $color += $row['color'];
                $taste += $row['taste'];
            }
            $averages['body'] = $body / $count;
            $averages['color'] = $color / $count;
            $averages['taste'] = $taste / $count;
        }
        return $averages;
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

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Rating
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return \Rating
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}