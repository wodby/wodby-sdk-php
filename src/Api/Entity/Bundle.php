<?php declare (strict_types=1);

namespace Wodby\Api\Entity;

class Bundle extends EntityAbstract
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
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $build;

    /**
     * @var array
     */
    private $services;

    /**
     * Bundle constructor.
     * @param array $properties
     */
    public function __construct(array $properties)
    {
        $this->id = $properties['id'];
        $this->title = $properties['title'];
        $this->name = $properties['name'];
        $this->version = $properties['version'];
        $this->build = $properties['build'];
        $this->services = [];

        if (!empty($properties['services'])) {
            foreach ($properties['services'] as $service) {
                $this->services[] = new BundleService($service);
            }
        }
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
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * @return array
     */
    public function getServices()
    {
        return $this->services;
    }
}
