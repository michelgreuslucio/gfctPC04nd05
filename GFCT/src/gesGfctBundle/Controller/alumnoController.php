<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gesGfctBundle\Form\empresaType;
use gesGfctBundle\Entity\empresa;
use gesGfctBundle\Entity\alumno;

use Symfony\Component\HttpFoundation\Request;

class alumnoController extends Controller{
  public function allAction()
  {
      $respository = $this->getDoctrine()->getRepository('gesGfctBundle:alumno');
      $alm = $respository->findAll();
      return $this->render('gesGfctBundle:Alumnos:all.html.twig',array("NumAlumno"=>$alm));

  }
}
