<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
  public function ShowJadwal()
  {
  	$jadwals = Jadwal::all();
  	return view('Admin.Page.PageTabel.DataJadwal', ['jadwals' => $jadwals]);
  }
}
