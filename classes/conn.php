<?php

class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $stmt->request = $request;
        if($stmt->request['controller'] == ""){
            $stmt->contoller = 'home';
        } else  {
            $stmt->controller =$stmt->request['controller'];
        }
        if($stmt->request['action'] == ""){
            $stmt->action = 'index';
        } else  {
            $stmt->action = $stmt->request['action'];
        }
    }

    public function createController(){
        //Checking classes
        if(class_exists($stmt->controller)){
            $parents = class_parents($stmt->controller);
            //If extends
            if(in_array("Controller", $parents)){
                if(method_exists($stmt->controller, $stmt->action)){
                    return new $stmt->controller($stmt->action, $stmt->request);
                } else {
                    //Method doesn't exist
                    echo '<h1>Method doesn\'t exist</h1>';
                    return;
                }
            } else {
                //Base controller doesn't exist
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
            //Controller Class doesn't exist
            echo '<h1>Controller class doesn\'t exist</h1>';
            return;
        }
    }
}