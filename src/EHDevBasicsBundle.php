<?php
namespace EHDev\BasicsBundle;

use EHDev\BasicsBundle\DependencyInjection\EHDevBasicsExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EHDevBasicsBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new EHDevBasicsExtension();
    }
}
