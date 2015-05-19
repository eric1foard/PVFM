<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @var string
     *
     * @ORM\Column(name="bio", type="string", length=256, nullable=true)
     */
    protected $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="product_info", type="string", length=256, nullable=true)
     */
    protected $productInfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attending", type="boolean", nullable=false)
     */
    protected $attending;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmed", type="boolean", nullable=false)
     */
    protected $confirmed;


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
     * Set bio
     *
     * @param string $bio
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set productInfo
     *
     * @param string $productInfo
     * @return User
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;

        return $this;
    }

    /**
     * Get productInfo
     *
     * @return string 
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Set attending
     *
     * @param boolean $attending
     * @return User
     */
    public function setAttending($attending)
    {
        $this->attending = $attending;

        return $this;
    }

    /**
     * Get attending
     *
     * @return boolean 
     */
    public function getAttending()
    {
        return $this->attending;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     * @return User
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }
}
