<?php

namespace CupCakesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CupCakesBundle:Patisseuri:layout.html.twig');
    }
}
