<?php

namespace Comexpar\comexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MailController extends Controller
{
    /**
     * @Route("/Info")
     * @Template()
     */
    public function InfoAction()
    {
        return array(
                // ...
            );    }

}
