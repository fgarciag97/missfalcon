<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authError' => ' ',
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Usuarios',
                    'fields' => [
                        'username' => 'usuario',
                        'password' => 'password',
                    ],
                ],
            ],
            'loginAction' => [
                'controller' => 'Principal',
                'action' => 'index',
            ],
            'loginRedirect' => [
                'controller' => 'Inicio',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'controller' => 'Principal',
                'action' => 'index',
            ],
            'storage' => 'Session',
        ]);
    }

    public function isAuthorized($user)
    {
        return true;
    }

    public function talla($decimal){
        $decimal = str_replace(',', '', $decimal);
        return $decimal;
    }
}
