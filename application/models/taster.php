<?php
/**
 * Taster.php
 * Model for Taster entity.
 * 
 * @author zburnham
 * 
 */

if (!class_exists('Base')) { include('base.php');}

class Taster extends Base
{
    /**
     * Database table for persisting data.
     */
    protected $table = "Tasters";
    
    /**
     * Auto-incrementing ID.
     *
     * @var int
     */
    protected $ID;
    
    /**
     * Human-readable (full) name.
     *
     * @var string
     */
    protected $name;
    
    /**
     * Login.
     *
     * @var string
     */
    protected $login;
    
    /**
     * Password (encrypted).
     *
     * @var string
     */
    protected $password;
    
    /**
     * Class constructor.  Extends initial prototype.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
    }
    
    public function create()
    {
        $data = array(
            'login' => $this->input->post('login'),
            'name'  => $this->input->post('name'),
            'password' => $this->encrypt->encode($this->input->post('password')),
        );
        return $this->db->insert($this->table, $data);
    }
    
    /**
     * Checks taster credentials for valid login.
     * 
     * @return boolean
     */
    public function checkValidCredentials($login, $password)
    {
        $query = $this->db->get_where($this->table, array('login' => $login, 'password' => $password));
        if (0 < $query->num_rows()) {
            return true;
        }
        return false;
    }
    
    public function getIdFromLogin($login)
    {
        $query = $this->db->get_where($this->table, array('login' => $login));
        if (0 == $query->num_rows()) {
            throw new \Exception("Taster not found.");
        }
        $result = $query->row();
        return $result->ID;
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
     * @return \Taster
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
     * @return \Taster
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return \Taster
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \Taster
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}