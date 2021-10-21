<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class MissHelper extends Helper
{
    protected $_defaultConfig = [];

    public function Foto($controlador, $dir, $img){
        if(!$dir or !$img){
            return '/img/usuario.png';
        }else{
            return '/subidas/'.$controlador.'/photo/'.$dir.'/'.$img;
        }
    }
}
