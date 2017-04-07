<?php

namespace Bskhaled\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BskhaledFirstBundle:Default:index.html.twig');
    }
}
