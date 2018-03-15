<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function ShowUser()
  {
  	$users = User::all();
  	return view('Admin.Page.PageTabel.DataUser', ['users' => $users]);
  }
}
