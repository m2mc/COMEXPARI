<?php
// src/Comexpar/UserBundle/Entity/User.php

namespace Comexpar\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="com_user")
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
     * @ORM\Column(type="string")
     */
    protected $nom;
 
     /**
     * @ORM\Column(type="string")
     */

    protected $prenoms;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $datNaissance;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $cashpoint;
    /**
     * @ORM\Column(type="string")
     */
    protected $telephone;
     /**
     * @ORM\Column(type="date")
     */
    protected $datrecrutement;
    /**
     * @ORM\Column(type="string")
     */
    protected $fonction;


    public function __construct()
    {
          // parent::__construct();
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
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenoms
     *
     * @param string $prenoms
     * @return User
     */
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    /**
     * Get prenoms
     *
     * @return string 
     */
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Set datNaissance
     *
     * @param \DateTime $datNaissance
     * @return User
     */
    public function setDatNaissance($datNaissance)
    {
        $this->datNaissance = $datNaissance;

        return $this;
    }

    /**
     * Get datNaissance
     *
     * @return \DateTime 
     */
    public function getDatNaissance()
    {
        return $this->datNaissance;
    }

    /**
     * Set cashpoint
     *
     * @param string $cashpoint
     * @return User
     */
    public function setCashpoint($cashpoint)
    {
        $this->cashpoint = $cashpoint;

        return $this;
    }

    /**
     * Get cashpoint
     *
     * @return string 
     */
    public function getCashpoint()
    {
        return $this->cashpoint;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set datrecrutement
     *
     * @param \DateTime $datrecrutement
     * @return User
     */
    public function setDatrecrutement($datrecrutement)
    {
        $this->datrecrutement = $datrecrutement;

        return $this;
    }

    /**
     * Get datrecrutement
     *
     * @return \DateTime 
     */
    public function getDatrecrutement()
    {
        return $this->datrecrutement;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return User
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }
}
