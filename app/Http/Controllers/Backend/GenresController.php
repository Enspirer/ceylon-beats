<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Generes;
use Illuminate\Http\Request;
use DataTables;

class GenresController extends Controller
{
    public function index()
    {
        return view('backend.genres.index');
    }


    public function create()
    {
        return view('backend.genres.creator');
    }

    public function show($id)
    {

    }




    public function getTableDetails()
    {
        $genres = Generes::all();
        return Datatables::of($genres)
            ->addColumn('action', function($row){
                $btn1 = '<a href="x" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function delete($id)
    {

    }

    public function store(Request $request)
    {

    }

    public function update(Request $request)
    {

    }
}
