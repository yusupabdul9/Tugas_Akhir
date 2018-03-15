<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Alert;

class AdminController extends Controller
{

  public function ShowAdmin()
  {
  	$admins = Admin::all();
  	return view('Admin.Page.PageTabel.DataAdmin', compact('admins'));
  }

  public function CreateAdmin()
  {	
  	 return view('Admin.Page.PageInput.FormTambahAdmin');
  }
  
  public function AddAdmin(Request $param)
  {

  	$admins = new Admin;
  	$admins->name =$param->input('Nama');
  	$admins->email =$param->input('Email');
  	$admins->password =$param->input('Password');
  	$admins->save();
    Alert::success('Data Admin berhasil tersimpan', 'Sukses Simpan'); 
    return view('Admin.Page.PageTabel.DataAdmin', compact('admins'));
  }

  public function Find($id)
  {
  	$admins = Admin::find($id);
  	return view('Admin.Page.PageInput.FormUbahAdmin', ['admins' => $admins]);
  }

  public function EditAdmin(Request $param, $id)
  {
  	$this->validate($param,[
      'Nama' => 'required',
      'Password' => 'required',
      'Email' => 'required'
    ]);

  	$data = array(
  		'Nama' => $param->input('Nama'),
	  	'Email' =>$param->input('Email'),
	  	'Password' =>$param->input('Password')
  	);

  	Admin::where('id', $id)
    ->update($data);
    $admins = new Admin;
  	return view('Admin.Page.PageTabel.DataAdmin', compact('admins'));
  }

  public function DeleteAdmin($id){
    Admin::where('id', $id)
    ->delete();
    $admins = new Admin;
    Alert::success('Data Admin berhasil dihapus', 'Sukses Hapus');
    return view('Admin.Page.PageTabel.DataAdmin', compact('admins'));
  }

}
