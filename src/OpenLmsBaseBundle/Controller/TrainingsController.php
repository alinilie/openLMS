<?php

namespace OpenLmsBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrainingsController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function trainingsAction()
    {
        return $this->render('OpenLmsBaseBundle:trainings.html.twig');
    }
}
