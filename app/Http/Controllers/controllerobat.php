<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerobat extends Controller
{
    public function index()
	{
		
	}
	
	public function create()
	{
		return view('obat.create');
	}
	
	public function store(Request $request)
	{
		$request->validate([
        'nama_obat'=>'required',
        'harga'=> 'required|integer',
        'stok' => 'required|integer',
		'expired_date' => 'required|date',
		'production_date' => 'required|date'
      ]);
      $obat = new obat([
        'nama_obat' => $request->get('nama_obat'),
        'harga'=> $request->get('harga'),
        'stok'=> $request->get('stok'),
		'expired_date'=> $request->get('expired_date'),
		'produciton_date'=> $request->get('produciton_date')
      ]);
      $obat->save();
      return redirect('/obat')->with('success', 'Udah ketambah obatnya, YAY');
	}
	
	public function show($id)
	{
		
	}
	
	public function edit($id)
	{
		
	}
	
	public function update(Request $request, $id)
	{
		
	}
	
	public function destroy($id)
	{
		
	}
}
