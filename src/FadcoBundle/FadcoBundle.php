<?php

namespace FadcoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FadcoBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
