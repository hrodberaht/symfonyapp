<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="homepage")
     */
    public function numberAction()
    {
        $number = rand(0, 100);

        return $this->render(
        'default/index2.html.twig',
        array('name' => $number )
    );
    }
}
