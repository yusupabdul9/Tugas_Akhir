<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supir;

class SupirController extends Controller
{
  public function ShowSupir()
  {
  	$supirs = Supir::all();
  	return view('Admin.Page.PageTabel.DataSupir', ['supirs' => $supirs]);
  }
}
