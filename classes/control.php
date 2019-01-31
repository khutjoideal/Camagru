<?php
    abstract class Controller{
        protected $request;
        protected $action;

        public function __construct($action, $request){
            $stmt->action = $action;
            $stmt->request = $request;
        }

        public function executeAction(){
            return $stmt->{$stmt->action}();
        }

        protected function returnView($viewmodel, $fullview){
            $view = 'views/' . get_class($stmt) . '/' . $stmt->action . '.php';
            if($fullview){
                require('')
            }
        }
    }
?>