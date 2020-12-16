<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    function get(){
        $cek = Data::all();

        return response()->json(
            [        
                "messege" => "GET Method Sukses",
                "cek" => $cek
            ]
        );
    }

    function getById($id){
        $cek = Data::where('id', $id)->get();

        return response()->json(
            [        
                "messege" => "GETbyID Method Sukses " . $id,
                "cek" => $cek
            ]
        );
    }

    function post(Request  $request){
        $data = new Data;
        $data->tahun = $request->tahun;
        $data->judul = $request->judul;
        $data->penulis1 = $request->penulis1;
        $data->penulis2 = $request->penulis2;
        $data->penulis3 = $request->penulis3;
        $data->penulis4 = $request->penulis4;
        $data->penulis5 = $request->penulis5;
        $data->penulis6 = $request->penulis6;
        $data->penerbit = $request->penerbit;
        $data->tanggal = $request->tanggal;
        $data->halaman = $request->halaman;
        $data->file = $request->file;
        $data->link = $request->link;
        $data->noreg = $request->noreg;

        $data->save();

        return response()->json(
            [        
                "messege" => "POST Method Sukses",
                "data" => $data
            ]
        );
    }

    function put($id, Request $request){
        $data = Data::where('id', $id)->first();
        if($data){
            $data->tahun = $request->tahun ? $request->tahun : $data->tahun;
            $data->judul = $request->judul ? $request->judul : $data->judul;
            $data->penulis1 = $request->penulis1 ? $request->penulis1 : $data->penulis1;
            $data->penulis2 = $request->penulis2 ? $request->penulis2 : $data->penulis2;
            $data->penulis3 = $request->penulis3 ? $request->penulis3 : $data->penulis3;
            $data->penulis4 = $request->penulis4 ? $request->penulis4 : $data->penulis4;
            $data->penulis5 = $request->penulis5 ? $request->penulis5 : $data->penulis5;
            $data->penulis6 = $request->penulis6 ? $request->penulis6 : $data->penulis6;
            $data->penerbit = $request->penerbit ? $request->penerbit : $data->penerbit;
            $data->tanggal = $request->tanggal ? $request->tanggal : $data->tanggal;
            $data->halaman = $request->halaman ? $request->halaman : $data->halaman;
            $data->file = $request->file ? $request->file : $data->file;
            $data->link = $request->link ? $request->link : $data->link;
            $data->noreg = $request->noreg ? $request->noreg : $data->noreg;

            $data->save();
            return response()->json(
                [        
                    "messege" => "PUT Method Sukses " . $id,
                    "cek" => $data
                ]
            );
        }
        else{
            return response()->json(
                [        
                    "messege" => "Data dengan id " . $id . "tidak ada"
                ]
            );
        }    
    }

    function delete($id){
        $data = Data::where('id', $id)->first();
        if($data){
            $data->delete();
            return response()->json(
                [        
                    "messege" => "DELETE Method Sukses " . $id
                ]
            );
        }
        else{
            return response()->json(
                [        
                    "messege" => "Data dengan id " . $id . "tidak ada"
                ]
            );
        }    
    }

}
