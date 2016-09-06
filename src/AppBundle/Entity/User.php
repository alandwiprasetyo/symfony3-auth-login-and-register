<?php
/**
 * Created by PhpStorm.
 * User: alandwiprasetyo
 * Date: 9/5/16
 * Time: 9:44 AM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="This email address is already in use")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $email;
    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $role;
    /**
     * @Assert\Length(max=4096)
     */
    protected $plainPassword;
    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;
    public function eraseCredentials()
    {
        return null;
    }
    // Roles
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRoles()
    {
        return [$this->getRole()];
    }
    // ID, name and email
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getUsername()
    {
        return $this->email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    // Passwords and salt
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }
    public function getSalt()
    {
        return null;
    }
}