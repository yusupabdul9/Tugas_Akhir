<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penginapan;

class PenginapanController extends Controller
{
  public function ShowPenginapan()
  {
  	$penginapans = Penginapan::all();
  	return view('Admin.Page.PageTabel.DataPenginapan', ['penginapans' => $penginapans]);
  }
}
