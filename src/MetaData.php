<?php


namespace App;


class MetaData
{
    private $keys = array();

    /**
     * MetaData constructor.
     * @param array $keys
     */
    public function __construct(array $keys)
    {
        $this->keys = $keys;
    }

    /**
     * @return array
     */
    public function getKeys(): array
    {
        return $this->keys;
    }

    /**
     * @param array $keys
     */
    public function setKeys(array $keys): void
    {
        $this->keys = $keys;
    }

    /**
     * @return array
     */
    public function getMetaData(): array
    {
        return $this->keys;
    }

    /**
     * @param array $keys
     */
    public function setMetaData(array $keys): void
    {
        $this->keys = $keys;
    }



}