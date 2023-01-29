<?php 

namespace src\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return $this->twig->display("site/index.html.twig");
    }
}