<?php

class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $stmt->$request = $request;
        if ($stmt->request['controller'] == ""){
            $stmt->controller = 'home';
        }   else {
            $stmt->controller = $stmt->request['controller'];
        }
        if ($stmt->request['action'] == ""){
            $stmt->action = 'index';
        }   else {
            $stmt->action = $stmt->request['action'];
        }
    }
}