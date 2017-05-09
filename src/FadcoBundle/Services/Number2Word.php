<?php

namespace FadcoBundle\Services;

use Kwn\NumberToWords\NumberToWords;
use Kwn\NumberToWords\Transformer\TransformerFactoriesRegistry;

class Number2Word
{
     public  function toWords($number)
    {
        // build the registry of transformer factories we want to work with
        $registry = new TransformerFactoriesRegistry([
            new \Kwn\NumberToWords\Language\French\TransformerFactory
        ]);

        // create the number to words "manager" class
        $numberToWords = new NumberToWords($registry);

        // build a new number transformer using the RFC 3066 language identifier
        $numberTransformer = $numberToWords->getNumberTransformer('fr');

        return $numberTransformer->toWords($number);
    }
}
