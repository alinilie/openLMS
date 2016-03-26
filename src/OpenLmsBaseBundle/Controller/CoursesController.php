<?php

namespace OpenLmsBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OpenLmsBaseBundle\DBAL\Type\EnumStatusType;

class CoursesController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function coursesAction()
    {
        /** @var \OpenLmsBaseBundle\Repository\CoursesRepository $coursesRepository */
        $coursesRepository = $this->getDoctrine()->getRepository('OpenLmsBaseBundle:Courses');

        $coursesList = $coursesRepository->findBy(array('status' => EnumStatusType::STATUS_ACTIVE));

        return $this->render('OpenLmsBaseBundle:courses.html.twig', ['courses' => $coursesList]);
    }

    /**
     * @param $homepageSlug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function courseInstructorHomepageAction($homepageSlug)
    {
        return $this->forward('OpenLmsBaseBundle:Courses:courses');
    }
}
