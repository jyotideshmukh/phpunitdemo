<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use App\Taxonomy;
use App\Exceptions\ShortLengthException;

class TestTaxonomy extends TestCase
{
    function test_is_taxonomy_set(){
        $taxonomy = new Taxonomy('Work');
        $this->assertSame("Work", $taxonomy->getName());
    }

    /*function test_is_taxonomy_shortnamelenth_throw_exception(){

        $taxonomy = new Taxonomy('do');
        //$this->assertSame("Work", $taxonomy->getName());
        $this->expectException(ShortLengthException::class);


    }*/

    public function testFailure(): void
    {
        $this->assertContains(4, [1, 2, 3,4]);
    }


}