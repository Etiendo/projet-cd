<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pois
 *
 * @ORM\Table(name="pois")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PoisRepository")
 */
class Pois
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=8)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="decimal", precision=10, scale=8)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Maps")
     * @ORM\JoinColumn(name="map_id", nullable=false)
     */
    private $map;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Pois
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lat.
     *
     * @param int $lat
     *
     * @return Pois
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat.
     *
     * @return int
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng.
     *
     * @param string $lng
     *
     * @return Pois
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng.
     *
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Pois
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Pois
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set picture.
     *
     * @param string $picture
     *
     * @return Pois
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture.
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return Pois
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set map.
     *
     * @param \AppBundle\Entity\Maps $map
     *
     * @return Pois
     */
    public function setMap(\AppBundle\Entity\Maps $map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map.
     *
     * @return \AppBundle\Entity\Maps
     */
    public function getMap()
    {
        return $this->map;
    }
}
