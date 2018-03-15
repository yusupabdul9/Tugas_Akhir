<?php


Route::get('/', function () {
    return view('Admin.Page.PageHome');
});

Route::get('/Home', function () {
    return view('Admin.Page.PageHome');
});

//To Admin
Route::group(['prefix' => 'Admin'], function(){
	Route::get('/ShowAdmin', 'AdminController@ShowAdmin');

	Route::get('/CreateAdmin', 'AdminController@CreateAdmin');

	Route::post('/insertAdmin','AdminController@AddAdmin');

	Route::get('/SearchAdmin/{id}','AdminController@Find');

	Route::post('/UpdateAdmin/{id}','AdminController@EditAdmin');

	Route::get('/DeleteAdmin/{id}','AdminController@DeleteAdmin');
});


Route::group(['prefix' => 'User'],function(){
	Route::get('/ShowUser', 'UserController@ShowUser');	
});

//To User



//To Supir
Route::get('/ShowSupir', 'SupirController@ShowSupir');


//To Jadwal
Route::get('/ShowJadwal', 'JadwalController@ShowJadwal');


//To Bus
Route::get('/ShowBus', 'BusController@ShowBus');


//To Paket Request
Route::get('/ShowRequest', 'PaketRequestController@ShowPaketRequest');


//To Paket Wisata
Route::get('/ShowPaketWisata', 'PaketWisataController@ShowPaketWisata');


//To Penginapan
Route::get('/ShowPenginapan', 'PenginapanController@ShowPenginapan');


//To Pesanan
Route::get('/ShowPesanan', 'PesananController@ShowPesanan');


//To Pusat Oleh-oleh
Route::get('/ShowOleh', 'PusatOleh2Controller@ShowTempatOleh2');


//To Tempat Makan
Route::get('/TempatMakan', 'TempatMakanController@ShowTempatMakan');


//To Tempat Wisata
Route::get('/TempatWisata', 'TempatWisataController@ShowTempatWisata');

// Route::get('/User', function () {
//     return view('Admin.Page.PageUser');
// });

// Route::get('/Bus', function () {
//     return view('Admin.Page.PageBus');
// });

// Route::get('/Jadwal', function () {
//     return view('Admin.Page.PageJadwal');
// });

// Route::get('/Request', function () {
//     return view('Admin.Page.PagePaketRequest');
// });

// Route::get('/PaketWisata', function () {
//     return view('Admin.Page.PagePaketWisata');
// });

// Route::get('/Penginapan', function () {
//     return view('Admin.Page.PagePenginapan');
// });

// Route::get('/Pesanan', function () {
//     return view('Admin.Page.PagePesanan');
// });

// Route::get('/Supir', function () {
//     return view('Admin.Page.PageSupir');
// });

// Route::get('/Oleh', function () {
//     return view('Admin.Page.PagePusatOleh2');
// });

// Route::get('/Makan', function () {
//     return view('Admin.Page.PageTempatMakan');
// });

// Route::get('/Wisata', function () {
//     return view('Admin.Page.PageTempatWisata');
// });
