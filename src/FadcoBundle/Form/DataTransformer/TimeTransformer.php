<?php
namespace GSPBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class TimeTransformer implements DataTransformerInterface
{
    public function transform($time)
    {
        if (null === $time) {
            return '';
        }

        return $time->format('H:i:s');
    }

    public function reverseTransform($time)
    {
        // datetime optional
        if (!$time) {
            return;
        }

        $time = \DateTime::createFromFormat('H:i', $time);

        return $time;
    }
}