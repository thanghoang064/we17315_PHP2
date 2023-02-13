<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;
class BaseController{

    protected function render($viewFile, $data = []){
        $viewDir = "./app/views"; //thư mục dẫn đến view
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }
}

?>