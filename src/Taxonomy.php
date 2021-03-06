<?php


namespace App;
use App\MetaData;
use \Ds\Vector;
use App\Exceptions\ShortLengthException;

class Taxonomy
{
    private $name;
    private MetaData $metaData;
    private Vector $decendents;

    /**
     * Taxonomy constructor.
     * @param $name
     */
    public function __construct($name)
    {
        try {
            if (strlen($name) > 3)
                $this->name = $name;
        }catch(ShortLengthException $e){
            echo $e->getMessage();
        }
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