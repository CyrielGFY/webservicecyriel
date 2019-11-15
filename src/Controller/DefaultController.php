<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{


    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @IsGranted("ROLE_USER")
     */
    public function protected()
    {
        return $this->render('protected.html.twig');
    }

    /**
     * @IsGranted("ROLE_SUPER_ADMIN")
     */
    public function admin()
    {
        return $this->render('admin.html.twig');
    }
}
