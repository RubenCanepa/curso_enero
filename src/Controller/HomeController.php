<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('hola.html.twig', [
            'numero' => $number,
            'titulo' => ("TiTuLo Nro " . $number),    
        ]);
    }

    /**
     * @Route("/detalle", name="info")
     */
    public function detalle()
    {
        return $this->render('info.html.twig', [
        ]);
    }

}