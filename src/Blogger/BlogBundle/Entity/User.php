<?php

namespace Blogger\BlogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="symfony_demo_user")
 *
 * Defines the properties of the User entity to represent the application users.
 * See http://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 *
 * Tip: if you have an existing database, you can generate these entity class automatically.
 * See http://symfony.com/doc/current/cookbook/doctrine/reverse_engineering.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $nume;
    /**
     * @ORM\Column(type="string")
     */

    private $prenume;
    /**
     * @ORM\Column(type="string")
     */
	 private $email;
    /**
     * @ORM\Column(type="string", unique=true)
     */

    private $password;
    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = array();
    public function getId()
    {
        return $this->id;
    }
    /**
     * Implement abstract method required by UserInterface 
     */
    public function getUsername() {
      return $this->username;
    }
    /**
     * {@inheritdoc}
     */
    public function getNume()
    {
        return $this->nume;
    }
    public function setNume($nume)
    {
        $this->nume = $nume;
    }
    public function getPrenume()
    {
        return $this->prenume;
    }
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;
    }
	public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    /**
     * Returns the roles or permissions granted to the user for security.
     */
    public function getRoles()
    {
        $roles = $this->roles;
        // guarantees that a user always has at least one role for security
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }
        return array_unique($roles);
    }
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }
    /**
     * Returns the salt that was originally used to encode the password.
     */
    public function getSalt()
    {
        // See "Do you need to use a Salt?" at http://symfony.com/doc/current/cookbook/security/entity_provider.html
        // we're using bcrypt in security.yml to encode the password, so
        // the salt value is built-in and you don't have to generate one
        return;
    }
    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials()
    {
        // if you had a plainPassword property, you'd nullify it here
        // $this->plainPassword = null;
    }
}
