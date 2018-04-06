<?php declare (strict_types=1);

namespace Wodby\Api\Entity;

class Application extends EntityAbstract
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
    private $status;

    /**
     * @var string
     */
    private $docroot;

    /**
     * @var Repository
     */
    private $repository;

    /**
     * @var string
     */
    private $site_name;

    /**
     * Application constructor.
     * @param array $properties
     */
    public function __construct(array $properties)
    {
        $this->id = $properties['id'];
        $this->title = $properties['title'];
        $this->name = $properties['name'];
        $this->status = $properties['status'];
        $this->docroot = $properties['docroot'];
        $this->repository = !empty($properties['repository']) ? new Repository($properties['repository']) : null;
        $this->site_name = $properties['site_name'];
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getDocroot()
    {
        return $this->docroot;
    }

    /**
     * @return \Wodby\Api\Entity\Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->site_name;
    }
}
