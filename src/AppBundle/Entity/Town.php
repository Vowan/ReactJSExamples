<?php

// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="towns")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TownRepository")
 */
class Town {

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
     * @Assert\NotBlank
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $slug = 'slug';

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $region;

    /**
     * @var Comment[]|ArrayCollection
     *
     * @ORM\OneToMany(
     *      targetEntity="AppBundle\Entity\Realty",
     *      mappedBy="town",
     *      orphanRemoval=true
     * )
     * 
     */
    private $realties;
    // ...
    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="towns")
     */
    private $agents;

    public function __construct() {
        $this->publishedAt = new \DateTime();
        $this->realties = new ArrayCollection();
        $this->agents = new ArrayCollection();
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
     * @return Town
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Town
     */
    public function setSlug($slug) {
        if (null == $slug) {
            $this->slug = strtolower($this->name);
        } else
            $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Add realty
     *
     * @param \AppBundle\Entity\Realty $realty
     *
     * @return Town
     */
    public function addRealty(\AppBundle\Entity\Realty $realty) {
        $this->realties[] = $realty;

        return $this;
    }

    /**
     * Remove realty
     *
     * @param \AppBundle\Entity\Realty $realty
     */
    public function removeRealty(\AppBundle\Entity\Realty $realty) {
        $this->realties->removeElement($realty);
    }

    /**
     * Get realties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealties() {
        return $this->realties;
    }

    /**
     * Add agent
     *
     * @param \AppBundle\Entity\User $agent
     *
     * @return Town
     */
    public function addAgent(\AppBundle\Entity\User $agent) {
        $this->agents[] = $agent;

        return $this;
    }

    /**
     * Remove agent
     *
     * @param \AppBundle\Entity\User $agent
     */
    public function removeAgent(\AppBundle\Entity\User $agent) {
        $this->agents->removeElement($agent);
    }

    /**
     * Get agents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgents() {
        return $this->agents;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Town
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

}
