<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html;

class AdminController extends Controller
{
  public function index() {
    return view('admin/dashboard');
  }
}
