<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    prtected $table = 'jbarchog_guest';

     public function getGuest ()
     {
        return $this->findAll () ;
     }
}