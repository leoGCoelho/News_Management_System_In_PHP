<?php
// Controller destinado para gerencia das paginas
namespace App\Http\Controllers;
class Controller_pag extends Controller{
    public function getWelcome(){
        $title = "Welcome";
        return view('pages.welcome', ['title' => $title]);
    }
    public function getIndex(){
        $title = "Home";
        return view('pages.home', ['title' => $title]);
    }
    public function getAbout(){
        $title = "Sobre";
        return view('pages.about', ['title' => $title]);
    }
    public function getAdd(){
        $title = "Adicionar";
        return view('pages.about', ['title' => $title]);
    }
    public function getSuccess(){
        $title = "Adicionar";
        return view('pages.success', ['title' => $title]);
    }
    /*public function getSearch(){
        $title = "Buscar";
        return view('pages.search', ['title' => $title]);
    }
    public function getDel(){
    }
    public function getShare(){
    }*/
}
