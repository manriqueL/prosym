<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;

use App\Form\FormRegistro;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsuarioController extends AbstractController
{

    public function registro(Request $request, UserPasswordEncoderInterface $encoder)
    {   //Crea el formulario
        $usuario = new Usuario;
        $form = $this->createForm(FormRegistro::class, $usuario);
        //verifica si se creó
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //cifra la contraseña
            $encoded = $encoder->encodePassword($usuario, $usuario->getPassword());
            //setea el rol al usuario
            $usuario->setRole('ROLE_USER');
            //setea contraseña encriptada
            $usuario->setPassword($encoded);
            //setea la fecha y la hora creada anteriormente
            $usuario->setCreatedAt(new \DateTime('now'));
            var_dump($usuario); 

            //GUARDAR EL USUARIO
            //Importar el Entity Manager
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('tareas');
        }
        //Da la vista al formulario
        return $this->render('usuario/registro.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
