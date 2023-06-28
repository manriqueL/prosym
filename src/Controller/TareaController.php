<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tarea;
use App\Entity\Usuario;

class TareaController extends AbstractController
{
    public function index(): Response
    {   
        //prueba de entidades y relaciones
        // $em = $this->getDoctrine()->getManager();
        // $tareaRepo = $this->getDoctrine()->getRepository(Tarea::class);
        // $tareas = $tareaRepo->findAll();
        
        // foreach ($tareas as $tarea) {
        //     echo $tarea->getUsuario()->getEmail()." - ".$tarea->getContent()." - horas: ".$tarea->getHours()." - Prioridad: ".$tarea->getPriority().'<br/>';
        // };

        // $usuarioRepo = $this->getDoctrine()->getRepository(Usuario::class);
        // $usuarios = $usuarioRepo->findAll();

        // foreach ($usuarios as $usuario) {
        //     echo '<h1>'.$usuario->getName()." - ".$usuario->getLastName().'</h1>';
        //     foreach ($usuario->getTareas() as $tarea) {
        //         echo $tarea->getTittle().'<br/>';
        //     }
        // }
        return $this->render('tarea/index.html.twig', [
            'controller_name' => 'TareaController',
        ]);
    }
}
