<?php


namespace core;


class Route
{
    static public function init(){

        $path=$_SERVER['REQUEST_URI'];
        $ulrComponents= explode('/',$path);
        array_shift($ulrComponents);

        if (count($ulrComponents)>3){
            self::notFound();
        }
        $controllerName = 'index';
        if (!empty($ulrComponents[0])){
            $controllerName = strtolower($ulrComponents[0]);
        }
        $actionName = 'index';
        if (!empty($ulrComponents[1])){
            $actionName = strtolower($ulrComponents[1]);
        }

        $articleId=null;
        if ($actionName=='article'){
            if(ctype_digit($ulrComponents[2]) ){      /*(int)($ulrComponents[2])settype($ulrComponents[2], "integer")*/
                $articleId=$ulrComponents[2];
                //var_dump($articleId);
            }else{
                self::notFound();
            }
        }

        $controllerClass='controllers\\'.ucfirst($controllerName);
        if(!class_exists($controllerClass)){
            self::notFound();
        }
        $controller = new $controllerClass();
        self::actionCaller($controller, $actionName, $articleId);

//        if(!($controller instanceof controllerInterface)){
//            //TODO generate error of type
//            exit('controller must be implement controllerInterface');
    }


    static private function actionCaller(controllerInterface $controller, string $action, $articleId=null){
        if (!method_exists($controller, $action)) {
            self::notFound();
        }
        $controller->$action($articleId);
    }

    static public function notFound(){
        http_response_code(404);
        exit();
    }

    static public function url(string $controller=null, string $action=null){
        //return '/'.$controller??''.empty($action)?'':'/'.$action;
        $url = '/';
        if (!empty($controller)){
            $url.=strtolower($controller);
            if(!empty($action)){
                $url.='/'.strtolower($action);
            }
        }
        return $url;
    }

    static public function redirect(string $url='/'){
        header('Location:'.$url);
        exit();
    }
}
