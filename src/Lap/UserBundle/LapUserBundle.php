<?php

namespace Lap\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LapUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

?>
