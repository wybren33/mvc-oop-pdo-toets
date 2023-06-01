<?php

class Overzicht extends BaseController
{
    public function index($id = NULL, $name = NULL)
    {

        $data = [
            'title' => 'Overzicht',
            'id'    => $id,
            'name'  => $name
        ];

        $this->view('overzicht/index', $data);
    }
}