<?php

namespace DBorsatto\GiantBombBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use DBorsatto\GiantBombBundle\DependencyInjection\GiantBombExtension;

class GiantBombBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new GiantBombExtension();
    }
}
