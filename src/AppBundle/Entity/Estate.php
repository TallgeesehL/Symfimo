<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/

class Estate{
  use IdTrait;
  /**
  * @ORM\ManyToOne(targetEntity="User")
  */
  private $user;

  /**
  * @ORM\OneToOne(targetEntity="Type")
  */
  private $type;


  /**
  * @ORM\ManyToMany(targetEntity="Option")
  */
  private $options;

  /**
  * @ORM\Column()
  */
  private $title;

  /**
  * @ORM\Column()
  */
  private $description;

  /**
  * @ORM\Column()
  */
  private $address;

  /**
  * @ORM\Column()
  */
  private $zip;

  /**
  * @ORM\Column()
  */
  private $city;

  /**
  * @ORM\Column()
  */
  private $country;

  /**
  * @ORM\Column()
  */
  private $dpe;

  /**
  * @ORM\Column()
  */
  private $ges;

  /**
  * @ORM\Column()
  */
  private $rooms;

  /**
  * @ORM\Column()
  */
  private $bedrooms;

  /**
  * @ORM\Column()
  */
  private $surface;

  /**
  * @ORM\Column()
  */
  private $groundSurface;

  /**
  * @ORM\Column()
  */
  private $created;


  public function __construct(){
    $this->options = new ArrayCollection();
  }

  public function addGenre(Genre $option){
  if (!$this->options->contains($option)) {
    $this->options->add($option);
  }
  }

  public function removeGenre(Genre $option){
    $this->options->removeEmelent($option);
  }

public function setId($id)
{
   $this->id = $id;
   return $this;
}

public function getId()
{
   return $this->id;
}

public function setTitle($title)
{
   $this->title = $title;
   return $this;
}

public function getTitle()
{
   return $this->title;
}

public function setDescription($description)
{
   $this->description = $description;
   return $this;
}

public function getDescription()
{
   return $this->description;
}

public function setAddress($address)
{
   $this->address = $address;
   return $this;
}

public function getAddress()
{
   return $this->address;
}

public function setZip($zip)
{
   $this->zip = $zip;
   return $this;
}

public function getZip()
{
   return $this->zip;
}

public function setCity($city)
{
   $this->city = $city;
   return $this;
}

public function getCity()
{
   return $this->city;
}

public function setCountry($country)
{
   $this->country = $country;
   return $this;
}

public function getCountry()
{
   return $this->country;
}

public function setDpe($dpe)
{
   $this->dpe = $dpe;
   return $this;
}

public function getDpe()
{
   return $this->dpe;
}

public function setGes($ges)
{
   $this->ges = $ges;
   return $this;
}

public function getGes()
{
   return $this->ges;
}

public function setRooms($rooms)
{
   $this->rooms = $rooms;
   return $this;
}

public function getRooms()
{
   return $this->rooms;
}

public function setBedrooms($bedrooms)
{
   $this->bedrooms = $bedrooms;
   return $this;
}

public function getBedrooms()
{
   return $this->bedrooms;
}

public function setSurface($surface)
{
   $this->surface = $surface;
   return $this;
}

public function getSurface()
{
   return $this->surface;
}

public function setGroundSurface($groundSurface)
{
   $this->groundSurface = $groundSurface;
   return $this;
}

public function getGroundSurface()
{
   return $this->groundSurface;
}

public function setCreated($created)
{
   $this->created = $created;
   return $this;
}

public function getCreated()
{
   return $this->created;
}

}
