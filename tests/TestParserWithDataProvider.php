<?php


namespace Tests;


use App\TaxonomyParser;

class TestParserWithDataProvider extends \PHPUnit\Framework\TestCase
{

    /**
     * @param $input
     * @param $expected
     * @dataProvider taxonomyProvider
     */
    public function test_it_parses_taxonomies($input,$expected){
        $parser = new TaxonomyParser();
        $result = $parser->parse($input);
        $this->assertSame($expected, $result);
    }

    public function taxonomyProvider(){
        return [
            ["Work",['Work']],
            ["Work,Personal,Family", ['Work','Personal','Family']],
            ["Work, Personal,Family", ['Work','Personal','Family']],
            [" Work,Personal,Family", ['Work','Personal','Family']],
            [" Work,Personal,Family ", ['Work','Personal','Family']],
            ["Work;Personal;Family", ['Work','Personal','Family']],
            ["Work; Personal; Family", ['Work','Personal','Family']],
            [" Work; Personal; Family", ['Work','Personal','Family']],
            ["Work; Personal; Family", ['Work','Personal','Family']],
            ["Work,Personal, Family ", ['Work','Personal','Family']],
        ];
    }
}