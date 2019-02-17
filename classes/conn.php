<?php

class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $this->request = $request;
        if($this->request['controller'] == ""){
            $this->contoller = 'home';
        } else  {
            $this->controller =$this->request['controller'];
        }
        if($this->request['action'] == ""){
            $this->action = 'index';
        } else  {
            $this->action = $this->request['action'];
        }
    }

    public function createController(){
        //Checking classes
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            //If extends
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
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