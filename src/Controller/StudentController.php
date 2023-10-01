<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
    #[Route('/showTeacher/{name}', name: '')]
    public function show($name):reponse
    {
return  new Response('Bonjour'.$name);}
#[Route('/showStudentTwig',name:'show_student_twig')]
    public function showTWIG()
       {$title='List of Students';
        $students=array(
         array('id'=>1,'name'=>'student1','nb_classe'=>4),
         array('id'=>1,'name'=>'student2','nb_classe'=>7), 
         array('id'=>1,'name'=>'student3','nb_classe'=>6)   
        );
       return $this->render('student/show.html.twig',['t'=>$title,'tt'=>$students]);

       }




}

