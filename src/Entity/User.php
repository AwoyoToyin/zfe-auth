<?php

namespace Zfe\User\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Zend\Crypt\Password\Bcrypt;
use Zfe\Common\Entity\AbstractEntity;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="user")
 */
class User extends AbstractEntity implements \JsonSerializable
{
    /**
     * @ORM\Column(name="firstname", type="string", length=32)
     * @var string
     */
    private $firstname;

    /**
     * @ORM\Column(name="lastname", type="string", length=32)
     * @var string
     */
    private $lastname;

    /**
     * @ORM\Column(name="username", type="string", length=32)
     * @var string
     */
    private $username;

    /**
     * @ORM\Column(name="email", type="string", length=32)
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(name="password", type="string", length=32)
     * @var string
     */
    private $password;

    /**
     * Get the value of firstname
     *
     * @return  string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return  string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param  string  $lastname
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Concatenate firstname and lastname
     *
     * @return  string
     */
    public function getFullname(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * Get the value of username
     *
     * @return  string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param  string  $username
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $this->hashPassword($password);
        return $this;
    }

    /**
     * Checks if supplied password is valid
     *
     * @param string $password
     * @return boolean
     */
    public function isPasswordValid(string $password): boolean
    {
        $bcrypt = new Bcrypt();
        return $bcrypt->verify($password, $this->password);
    }

    public function jsonSerialize(): array
    {
        return [
            'id'            => $this->getId(),
            'fullname'      => $this->getFullname(),
            'firstname'     => $this->getFirstname(),
            'lastname'      => $this->getLastname(),
            'username'      => $this->getUsername(),
            'email'         => $this->getEmail(),
            'createdAt'     => $this->getCreatedAt(),
            'updatedAt'     => $this->getUpdatedAt()
        ];
    }

    /**
     * Hashes / Secures User Password
     *
     * @param string $password
     * @return string
     */
    private function hashPassword($password): string
    {
        $bcrypt = new Bcrypt();
        $hashedPassword = $bcrypt->create($password);
        return $hashedPassword;
    }
}
