<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DebugController extends AbstractController
{
    /**
     * @Route("/debug", name="debug")
     */
    public function index(): Response
    {

ob_start();
phpinfo();
$phpinfo = ob_get_clean();

        return $this->render('debug/index.html.twig', [
            'controller_name' => 'DebugController', 'phpinfo' => $phpinfo,
        ]);
    }
}
