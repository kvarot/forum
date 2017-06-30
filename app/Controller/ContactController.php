<?php

class ContactController extends AppController
{
    public $components = array('Session', 'Security');

    function index()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->data['Contact']['website'])) {
                $this->Session->setFlash("Votre mail nous est bien parvenu", "ok");
                $this->request->data = array();
            } else {
                if ($this->Contact->send($this->request->data['Contact'])) {
                    $this->Session->setFlash("Votre mail est envoyé", "ok");
                    $this->request->data = array();
                } else {
                    $this->Session->setFlash("Une erreur d'envoie s'est produite", "ko");
                }
            }
        }
    }
}


        ?>