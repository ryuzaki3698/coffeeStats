<?php


namespace CoffeeStats\Bundle\CoffeeStatsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;
    
    /**
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;
    
    /**
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;
    
    /**
     * @ORM\Column(name="needCoffee", type="boolean")
     */
    private $needCoffee = false;
    
    /**
     * @ORM\Column(name="needCleanup", type="boolean")
     */
    private $needCleanup = false;
    
    /**
     * @ORM\Column(name="stockCoffee", type="string", options="{default:'0'}")
     */
    private $stockCoffee = "0";
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return User
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    public function setEmail($email){
        parent::setEmail($email);
        parent::setUsername($email);
    }

    /**
     * Set needCoffee
     *
     * @param boolean $needCoffee
     * @return User
     */
    public function setNeedCoffee($needCoffee)
    {
        $this->needCoffee = $needCoffee;

        return $this;
    }

    /**
     * Get needCoffee
     *
     * @return boolean 
     */
    public function getNeedCoffee()
    {
        return $this->needCoffee;
    }

    /**
     * Set needCleanup
     *
     * @param boolean $needCleanup
     * @return User
     */
    public function setNeedCleanup($needCleanup)
    {
        $this->needCleanup = $needCleanup;

        return $this;
    }

    /**
     * Get needCleanup
     *
     * @return boolean 
     */
    public function getNeedCleanup()
    {
        return $this->needCleanup;
    }

    /**
     * Set stockCoffee
     *
     * @param string $stockCoffee
     * @return User
     */
    public function setStockCoffee($stockCoffee)
    {
        $this->stockCoffee = $stockCoffee;

        return $this;
    }

    /**
     * Get stockCoffee
     *
     * @return string 
     */
    public function getStockCoffee()
    {
        return $this->stockCoffee;
    }
}
