<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // CodeIgniter will see the "extend" in the view and load the admin automatically
        return view('admin/dashboard');
    }
    public function agency(){
        return view('admin/agency');
    }
    public function alert(){
        return view('admin/alert');
    }
    public function contact(){
        return view('admin/contact');
    }
    public function project(){
        return view('admin/project');
    }
}