<?php declare (strict_types=1);

namespace Wodby\Api\Entity;

class Domain extends EntityAbstract
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
    private $status;

    /**
     * @var bool
     */
    private $isTechnical;

    /**
     * @var bool
     */
    private $isPrimary;

    /**
     * Domain constructor.
     * @param array $properties
     */
    public function __construct(array $properties)
    {
        $this->id = $properties['id'];
        $this->name = $properties['name'];
        $this->status = $properties['status'];
        $this->isTechnical = (bool)$properties['technical'];
        $this->isPrimary = (bool)$properties['primary'];
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return boolean
     */
    public function isIsTechnical()
    {
        return $this->isTechnical;
    }

    /**
     * @return boolean
     */
    public function isIsPrimary()
    {
        return $this->isPrimary;
    }
}
