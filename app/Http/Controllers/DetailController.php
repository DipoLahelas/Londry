<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class DetailController extends Controller
{
    public function store(Request $req)
    {
        $data=$req->validate([
            "nama"=>["required"],
            "alamat"=>["required"],
            "email"=>["required"],
            "hp"=>["required"],
            "tipe"=>["required"],
        ]);

        $data['tanggal'] = now();

        detail::create($data);
        return response()->json(["status"=>200], 200);
    }

    public function update(Request $req, $up)
    {
        $det=detail::find($up)->update([
            "nama"=>$req->nama,
            "alamat"=>$req->alamat,
            "email"=>$req->email,
            "hp"=>$req->hp,
            "tipe"=>$req->tipe,
            "berat"=>$req->berat,
            "h_laundry"=>$req->h_laundry,
            "ongkir"=>$req->ongkir,
            "h_total"=>$req->h_total,
        ]);

        return response()->json(["status"=>200], 200);
    }

    public function destroy($up)
    {
        $del=detail::find($up)->delete();
        return response()->json(["status"=>200, "message"=>"Data Dihapus"], 200);
    }

    public function show($up)
    {
        $show=detail::find($up);
        return response()->json($show, 200);
    }

    public function index()
    {
        return response()->json(detail::all(), 200);
    }
}
