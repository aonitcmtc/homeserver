<?php

namespace App\Admin\Controllers;

use App\Controllers\BaseController;   // ← or your own Admin\BaseController

class Users extends BaseController
{
    public function __construct()
    {
        // die("__construct::func() >>> first step before run public function.");

        // Simple protection (you can also use Filter - recommended)
        if (!session()->get('access_token')) {
            return redirect()->to('/admin/login');
        }
    }

    public function index()
    {
        $data = [
            'title'      => 'Admin',
            'admin_name' => session()->get('admin_name') ?? 'Admin'
        ];

        return view('App\Admin\Views\layout', [
            'title'   => $data['title'],
            'content' => view('App\Admin\Views\users', $data)
        ]);
    }
}