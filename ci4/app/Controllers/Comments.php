<?php

namespace App\Controllers;

use App\Models\CommentsModel;

class Comments extends BaseController
{
    public function index()
    {
        $model = model(CommentsModel::class);

        helper('form');

        $data = [
            'comments'  => $model->getComments(),
            'title' => 'Comment Section',
        ];

        if (! $this->request->is('post')) {
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

        $post = $this->request->getPost(['Username', 'email', 'feedback']);

        if (! $this->validateData($post, [
            'Username' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'feedback'  => 'required|max_length[5000]|min_length[1]',
        ])) {
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

        $model->save([
            'Username' => $post['Username'],
            'email' => $post['email'],
            'feedback'  => $post['feedback'],
        ]);

        return view('templates/header', $data)
        . view('comments/success')
        . view('templates/footer');
        
        }

    
    }