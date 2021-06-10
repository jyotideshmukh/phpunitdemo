<?php


namespace App;


class TaxonomyParser
{
    /**
     * @param string $taxonomyStr
     * @return string[]
     * first simple parsing function which returns array
     */
   /* public function parse(string $taxonomyStr) :array
    {
        return [$taxonomyStr];
    }*/

    /**
     * @param string $taxonomyStr
     * @return array
     * second function of parse which uses explode function to explode
     */
   /* public function parse(string $taxonomyStr) :array
    {
        return explode(",",$taxonomyStr );
    }*/

    /**
     * @param string $taxonomyStr
     * @return array
     * third function of parse which uses preg_split function with  space
     */
    /*  public function parse(string $taxonomyStr): array
      {
          return preg_split('/, /',$taxonomyStr);
      }*/

     /**
     * @param string $taxonomyStr
     * @return array
     * forth function of parse which uses preg_split function with optional space
     */
  /*  public function parse(string $taxonomyStr): array
    {
        return preg_split('/, ?/',$taxonomyStr);
    }*/

    /**
     * @param string $taxonomyStr
     * @return array
     * fifth function of parse which uses preg_split function with optional space or semicolon
     * with or without space
     */
      /*public function parse(string $taxonomyStr): array
      {
          return preg_split('/[,;] ?/',$taxonomyStr);
      }*/

    /**
     * @param string $taxonomyStr
     * @return array
     * fifth function of parse which uses preg_split function with optional space or semicolon
     * with or without space
     */
   /* public function parse(string $taxonomyStr): array
    {
        $taxonomies = preg_split('/[,;] ?/',$taxonomyStr);
        //return array_map(function($tag){
          //  return trim($tag);
        //},$taxonomies);

         //or short function
       // return array_map(fn($tag)=>trim($tag),$taxonomies);
    }*/

    /**
     * @param string $taxonomyStr
     * @return array
     * fifth function of parse which uses preg_split function with optional space or semicolon
     * with or without space
     */
     /*public function parse(string $taxonomyStr): array
     {
         //still it fails for below condition
         //$result = $parser->parse(" Work; Personal; Family ");
         return preg_split('/ ?[,;] ?/',$taxonomyStr);
     }*/

    /**
     * @param string $taxonomyStr
     * @return array
     * fifth function of parse which uses preg_split function with optional space or semicolon
     * with or without space
     */
    public function parse(string $taxonomyStr): array
    {
        return preg_split('/ ?[,;] ?/',trim($taxonomyStr));
    }
}