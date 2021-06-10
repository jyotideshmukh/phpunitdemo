<?php


namespace Tests;


use App\TaxonomyParser;

class TestParserWithSetup extends \PHPUnit\Framework\TestCase
{
    protected TaxonomyParser $parser;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->parser = new TaxonomyParser();

    }

    public function test_is_taxonomy_parsed(){

        $result = $this->parser->parse("Work");
        $expected = ['Work'];
        $this->assertSame($expected, $result);
    }

    public function test_is_comma_taxonomy_parsed(){

        $result = $this->parser->parse("Work,Personal,Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }

    public function test_is_comma_withspace_taxonomy_parsed(){

        $result = $this->parser->parse("Work, Personal, Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }

    public function test_is_semicolon_taxonomy_parsed(){

        $result = $this->parser->parse("Work; Personal; Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);

        $result = $this->parser->parse("Work;Personal;Family");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }

    public function test_is_taxonomy_parsed_preponed_with_space(){

        $result = $this->parser->parse(" Work; Personal; Family ");
        $expected = ['Work','Personal','Family'];
        $this->assertSame($expected, $result);
    }



}