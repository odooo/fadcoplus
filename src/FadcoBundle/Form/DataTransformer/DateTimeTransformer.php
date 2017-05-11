<?php

namespace GSPBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class DateTimeTransformer implements DataTransformerInterface
{
    /**
     * Transforms an object (DateTime) to a string.
     *
     * @param  \DateTime|null $datetime
     * @return string
     */
    public function transform($datetime)
    {
        if (null === $datetime) {
            return '';
        }

        return $datetime->format('d/m/Y');
    }

    /**
     * Transforms a string to an object (DateTime).
     *
     * @param  string $datetime
     * @return \DateTime|null
     */
    public function reverseTransform($datetime)
    {
        // datetime optional
        if (!$datetime) {
            return;
        }

        $date = \DateTime::createFromFormat('d/m/Y', $datetime);

        return $date;
    }
}