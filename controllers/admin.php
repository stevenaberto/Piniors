<?php

class Admin extends Controller
{
    private $method;
    function __construct($method = null)
    {
        parent::__construct();
        $url = $_SERVER["REQUEST_URI"];
        $url = trim($url, "/");
        $url = explode("/", $url);
        if (empty($url[1]))
            $this->admin();
    }

    function admin()
    {
        $this->view->render("admin/index",1);
    }

    function nuevapregunta()
    {
        $this->view->render("admin/nuevapregunta",1);
    }

    function listadopreguntas()
    {
        $this->view->render("admin/listadopreguntas",1);
    }

    function configuracion()
    {
        $this->view->render("admin/configuracion",1);
    }

    function editarPregunta($id)
    {
        $this->view->render("admin/editarpregunta",1);
    }
    function eliminarPregunta($id)
    {
        $this->view->render("admin/eliminarpregunta",1);
    }
    function cerrarsesion()
    {
        $this->view->render("admin/cerrarsesion",1);
    }

    function login()
    {
        $this->view->render("login/index");
    }
    function cambiarNombreTema()
    {
        $this->model->cambiarTema($_POST);
    }
}