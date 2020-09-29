<?php


namespace App\Http\Controller;


use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     */
    public function index(){

      return  $this->render('pages/index.html.twig');
    }
}