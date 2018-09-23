<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em= $this->getDoctrine()->getManager();
        $repo = $em->getRepository(User::class);
        $userRaul=$repo->getUserRaul();
        return $this->render('default/index.html.twig',[
            'name'=>$this->getUser(),
            'raul'=>$userRaul
        ]);
    }
}
