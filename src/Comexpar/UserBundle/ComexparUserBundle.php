<?php

// src/comexpar/UserBundle/comexparUserBundle.php

namespace Comexpar\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ComexparUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
