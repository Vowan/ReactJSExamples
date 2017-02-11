<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="realties")
 */
class Realty {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="float")
     
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(type="float")
     
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
   
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
   
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
   
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
    
     */
    private $st_number;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Town", inversedBy="realties")
     * @ORM\JoinColumn(name="town_id", referencedColumnName="id")
     */
    private $town;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
    
     */
    private $price;

    /**
     * @ORM\OneToMany(targetEntity="Room", mappedBy="realty", cascade={"persist"})
     */
    private $rooms;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
    
     */
    private $sqTotal;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
    
     */
    private $sqLife;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
    
     */
    private $sqKitchen;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
    
     */
    private $levels;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="realties")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $agent;

    public function __construct() {
        $this->rooms = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Realty
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set town
     *
     * @param \AppBundle\Entity\Town $town
     *
     * @return Realty
     */
    public function setTown(\AppBundle\Entity\Town $town = null) {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return \AppBundle\Entity\Town
     */
    public function getTown() {
        return $this->town;
    }

    /**
     * Set agent
     *
     * @param \AppBundle\Entity\User $agent
     *
     * @return Realty
     */
    public function setAgent(\AppBundle\Entity\User $agent = null) {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return \AppBundle\Entity\User
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Realty
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Realty
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Realty
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Realty
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Realty
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Realty
     */
    public function setRegion($region) {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return Realty
     */
    public function setDistrict($district) {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict() {
        return $this->district;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Realty
     */
    public function setStreet($street) {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * Set stNumber
     *
     * @param string $stNumber
     *
     * @return Realty
     */
    public function setStNumber($stNumber) {
        $this->st_number = $stNumber;

        return $this;
    }

    /**
     * Get stNumber
     *
     * @return string
     */
    public function getStNumber() {
        return $this->st_number;
    }

    /**
     * Set sqTotal
     *
     * @param integer $sqTotal
     *
     * @return Realty
     */
    public function setSqTotal($sqTotal) {
        $this->sqTotal = $sqTotal;

        return $this;
    }

    /**
     * Get sqTotal
     *
     * @return integer
     */
    public function getSqTotal() {
        return $this->sqTotal;
    }

    /**
     * Set sqLife
     *
     * @param integer $sqLife
     *
     * @return Realty
     */
    public function setSqLife($sqLife) {
        $this->sqLife = $sqLife;

        return $this;
    }

    /**
     * Get sqLife
     *
     * @return integer
     */
    public function getSqLife() {
        return $this->sqLife;
    }

    /**
     * Set sqKitchen
     *
     * @param integer $sqKitchen
     *
     * @return Realty
     */
    public function setSqKitchen($sqKitchen) {
        $this->sqKitchen = $sqKitchen;

        return $this;
    }

    /**
     * Get sqKitchen
     *
     * @return integer
     */
    public function getSqKitchen() {
        return $this->sqKitchen;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Realty
     */
    public function setLevel($level) {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * Set levels
     *
     * @param integer $levels
     *
     * @return Realty
     */
    public function setLevels($levels) {
        $this->levels = $levels;

        return $this;
    }

    /**
     * Get levels
     *
     * @return integer
     */
    public function getLevels() {
        return $this->levels;
    }

    /**
     * Add room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return Realty
     */
    public function addRoom(\AppBundle\Entity\Room $room) {

       $this->rooms[] = $room;

        return $this;
    }

    /**
     * Add room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return Realty
     */
    public function setRooms(ArrayCollection $rooms) {

       $this->rooms[] = $room;

        return $this;
    }

    /**
     * Remove room
     *
     * @param \AppBundle\Entity\Room $room
     */
    public function removeRoom(\AppBundle\Entity\Room $room) {
        $this->rooms->removeElement($room);
    }

    /**
     * Get rooms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRooms() {
        return $this->rooms;
    }

}
