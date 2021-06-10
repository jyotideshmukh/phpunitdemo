<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use App\TaxonomyParser;

class TestTaxonomyParser extends TestCase
{
    public function test_is_taxonomy_parsed(){
        $parser = new TaxonomyParser();
        $result = $parser->parse("Work");
        $expected = ['Work'];
        $this->assertSame($expected, $result);
    }

    public function test_is_comma_taxonomy_parsed(){
        $parser = new TaxonomyParser();
        $result = $parser->parse("Work,Personal,Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }

    public function test_is_comma_withspace_taxonomy_parsed(){
        $parser = new TaxonomyParser();
        $result = $parser->parse("Work, Personal, Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }

    public function test_is_semicolon_taxonomy_parsed(){
        $parser = new TaxonomyParser();
        $result = $parser->parse("Work; Personal; Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);

        $result = $parser->parse("Work;Personal;Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }

    public function test_is_taxonomy_parsed_preponed_with_space(){
        $parser = new TaxonomyParser();
        $result = $parser->parse(" Work; Personal; Family ");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }




}