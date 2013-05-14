<?php
/**
 * Taster.php
 * Model for Taster entity.
 * 
 * @author zburnham
 * 
 */

class Taster extends CI_Model
{
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