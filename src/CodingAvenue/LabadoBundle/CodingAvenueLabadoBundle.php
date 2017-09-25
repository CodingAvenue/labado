<?php

namespace CodingAvenue\LabadoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CodingAvenueLabadoBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
