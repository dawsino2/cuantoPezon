<?php

namespace ICM06\CuantoPezonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ICM06CuantoPezonBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function listadoAction()
    {
        $repositorio = $this->getDoctrine()->getRepository('ICM06CuantoPezonBundle:Noticia');

        
        //busca todos
        $noticias = $repositorio->findAll();

        return $this->render('ICM06CuantoPezonBundle:Default:listado.html.twig', array('noticias' => $noticias));

    } 
    
    
    public function nuevoAction(){
        
        $noticia = new Noticia();
        //crear un formulario
        $formulario = $this->createFormBuilder($noticia)
                            ->add('titulo','text')
                            ->add('descripcion','text')
                            ->add('imagen','file')
                            ->add('Aceptar','submit')
                            ->getForm();
        
        $peticion = $this->getRequest();

        
        if($peticion ->getMethod() == 'POST'){
            $formulario->bind($peticion);
            $em = $this->getDoctrine()->getEntityManager();
            
            $imagen = $formulario->get('imagen')->getData();
            $nombreRealDeLaImagen = $imagen->getClientOriginalName();
            $noticia->setImagen($nombreRealDeLaImagen);
            $em->persist($noticia);
            $em->flush();

            $imagen->move('imagenes/', $nombreRealDeLaImagen);
            
            return $this->redirect($this->generateUrl('icm06_cuanto_pezon_listado'));
        }
        
        return $this->render('ICM06CuantoPezonBundle:Default:formulario.html.twig', array('formulario' => $formulario->createView()));
    }
    
    public function borraAction($id_noticia)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $noticia = $em -> getRepository('ICM06CuantoPezonBundle:Noticia')
                ->find($id_noticia);
        $em->remove($noticia);
        $em->flush();
        return $this->redirect($this->generateUrl('icm06_cuanto_pezon_borra'));
        
    }
    
   public function modificaAction($id_noticia)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $noticia = $em -> getRepository('ICM06CuantoPezonBundle:Noticia')
                ->find($id_noticia);
        
        $formulario = $this->createFormBuilder($noticia)
                        ->add('titulo','text')
                        ->add('descripcion','text')
                        ->add('like','text')
                        ->add('imagen','file')
                        ->add('Aceptar','submit')
                        ->getForm();
        
        $peticion = $this->getRequest();
        
        if($peticion ->getMethod() == 'POST'){
            $formulario->bind($peticion);
            //$em = $this->getDoctrine()->getEntityManager();
            $em->persist($noticia);
            $em->flush();
            return $this->redirect($this->generateUrl('icm06_cuanto_pezon_listado'));
        }
        
        return $this->render('ICM06CuantoPezonBundle:Default:modifica.html.twig', array('formulario' => $formulario->createView(),'id_noticia' => $id_noticia));
    }
}
