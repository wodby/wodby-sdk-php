<?php declare (strict_types=1);

namespace Wodby\Api\Entity;

class User extends EntityAbstract
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * User constructor.
     * @param array $properties
     */
    public function __construct(array $properties)
    {
        $this->id = $properties['id'];
        $this->name = $properties['name'];
        $this->email = $properties['email'];
        $this->firstName = $properties['first_name'];
        $this->lastName = $properties['last_name'];
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
