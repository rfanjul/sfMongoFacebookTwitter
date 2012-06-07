<?php

namespace Quorra\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('QuorraCoreBundle:Default:index.html.twig');
    }
}
