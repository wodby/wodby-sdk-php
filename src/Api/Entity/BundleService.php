<?php declare (strict_types=1);

namespace Wodby\Api\Entity;

class BundleService extends EntityAbstract
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var string
     */
    private $image;

    /**
     * BundleService constructor.
     * @param array $properties
     */
    public function __construct(array $properties)
    {
        $this->id = $properties['id'];
        $this->title = $properties['title'];
        $this->name = $properties['name'];
        $this->required = (bool)$properties['required'];
        $this->image = $properties['image'];
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return boolean
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
