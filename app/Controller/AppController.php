<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'You must be logged in to view this page.',
            'loginError' => 'Invalid Username or Password entered, please try again.'

        ));

// only allow the login controllers only
    public function beforeFilter()
    {
        parent::beforeFilter();
        // Connecté ou non
        $allow = array('login');
        // Non connecté
        if (!$this->Auth->user('id')) {
            array_push($allow, 'index', 'login', 'contact');
        }

        $this->Auth->allow($allow);
    }

}
