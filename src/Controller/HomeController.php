<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;


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

    /**
     * @Route("/detalle_usr", name="info")
     */
    public function detalleUsuario()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('App:Usuario')->findAllOrderedByName();    
        //dd($usuarios);
        
        $productos = $em->getRepository('App:Producto')->findAll();    
        //dd($productos);
        return $this->render('detalle.html.twig', [
            'usuarios' => $usuarios,
            'productos' => $productos,
        ]);
    }


}