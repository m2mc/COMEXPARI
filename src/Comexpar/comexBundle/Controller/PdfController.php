<?php

namespace Comexpar\comexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PdfController extends Controller
{
    /**
     * @Route("/Pdfjour")
     * @Template()
     */
    public function PdfjourAction()
    {
        return array(
                // ...
            );    }

}
