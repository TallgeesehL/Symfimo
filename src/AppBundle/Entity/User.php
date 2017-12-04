<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
* @ORM\Entity
*@UniqueEntity(fields={"email"}, errorPath="email")
*/

class User implements UserInterface{
  use IdTrait;


  /**
  * @ORM\Column(unique=true)
  */
  private $email;

  /**
  * @ORM\Column()
  */
  private $firstname;

  /**
  * @ORM\Column()
  */
  private $lastname;


  /**
  * @ORM\Column()
  */
  private $password;

  /**
 * @ORM\Column(type="json_array")
 */
 private $roles = array();

  public function __construct() {
        $this->roles = ["ROLE_USER"];
    }

  public function getUsername()
  {
      return $this->getEmail();
  }

  public function getSalt()
  {
      return null;
  }

  public function getRoles()
  {
      // if ($this->isAdmin) {
      //   return ['ROLE_ADMIN'];
      // }
      // return ['ROLE_USER'];
      return $this->roles;
  }

  public function eraseCredentials()
  {
  }

public function setEmail($email)
{
   $this->email = $email;
   return $this;
}

public function getEmail()
{
   return $this->email;
}

public function setFirstname($firstname)
{
   $this->firstname = $firstname;
   return $this;
}

public function getFirstname()
{
   return $this->firstname;
}

public function setLastname($lastname)
{
   $this->lastname = $lastname;
   return $this;
}

public function getLastname()
{
   return $this->lastname;
}

public function setPassword($password)
{
   $this->password = $password;
   return $this;
}

public function getPassword()
{
   return $this->password;
}

public function setRole($role)
{
   $this->role = $role;
   return $this;
}

public function getRole()
{
   return $this->role;
}

}
