<?php 

namespace app\controllers

use yii\web\Controller;

class HelloWorldController extends Controller{
    public function actionHelloWorld(){
        return $this->render('hello-world');
    }
}


?>