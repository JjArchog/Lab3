<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BasController
{
    public function index ()
    {
        $model = model (GuestModel::class) ;

        $data[
            'guest' => $model->getGuest(),
            'title' => 'Guestbook',
        ];

        return view ('templates/header', $data)
             . view ('guest/index')
             . view ('templates/footer');
    }
}