<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use App\Taxonomy;

class TestTaxonomy extends TestCase
{
    function test_is_taxonomy_set(){
        $taxonomy = new Taxonomy('Work');
        $this->assertSame("Work", $taxonomy->getName());
    }

}