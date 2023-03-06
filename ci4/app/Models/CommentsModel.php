<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'jbarchog_MyGuests';

    protected $allowedFields = ['Username', 'email', 'feedback'];

    public function getComments()
    {       
        return $this->findAll();
    }
}