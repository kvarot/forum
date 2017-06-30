<?php

/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 17/06/2017
 * Time: 14:54
 */
class Contact extends AppModel
{
    public $useTable = false;
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'mesage' => 'Vous devez entrer votre nom'
        ),
        'email' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'mesage' => 'Vous devez entrer un email valide'
        ),
        'message' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'mesage' => 'Vous devez entrer un message'
        )
    );

    public function send($data)
    {
        $this->set($data);
        if ($this->validates()) {
            App::uses('CakeEmail', 'Network/Email');
            $mail = new CakeEmail();
            $mail->to('kevinvarot@hotmail.fr')
                ->from($data['email'])
                ->bcc($data['email'])
                ->subject('Contact :: Site')
                ->emailFormat('html')
                ->template('contact')->viewVars($data);
            return $mail->send();
        } else {
            return false;
        }
    }
}