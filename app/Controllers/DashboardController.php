<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('id')) {
            return redirect()->to('/login')->with('error', 'Please login to access the dashboard.');
        }

        return view('dashboard');
    }
}
