<?php
namespace App\Controllers;

class MainController extends CoreController{

    public function home($params)  {
        $poste=[
            'title'=>'article'
        ];
        $this->show('home',[
            'posts'=>[]
        ]);
    }


}