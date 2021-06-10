<?php


namespace App;
use App\MetaData;

class Taxonomy
{
    private $name;
    private MetaData $metaData;

    /**
     * Taxonomy constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return \App\MetaData
     */
    public function getMetaData(): \App\MetaData
    {
        return $this->metaData;
    }

    /**
     * @param \App\MetaData $metaData
     */
    public function setMetaData(\App\MetaData $metaData): void
    {
        $this->metaData = $metaData;
    }



}