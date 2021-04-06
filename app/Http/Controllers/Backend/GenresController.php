<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Generes;
use App\Models\MusicProducts;
use Illuminate\Http\Request;
use DataTables;

class GenresController extends Controller
{
    public function index()
    {
        $music = MusicProducts::all();
        return view('backend.genres.index',[
            'music' => $music
        ]);
    }


    public function create()
    {
        return view('backend.genres.creator');
    }


    public function edit($id)
    {
        $genresDetails = Generes::where('id',$id)->first();

        return view('backend.genres.edit',[
            'genres' => $genresDetails
        ]);
    }

    public function show($id)
    {

    }

    public function getTableDetails()
    {
        $genres = Generes::all();
        return Datatables::of($genres)
            ->addColumn('action', function($row){
                $btn1 = '<a href="'.route('admin.genres.edit',$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="'.route('admin.genres.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function delete($id)
    {
        $genresDetails = Generes::find($id);
        $genresDetails->delete();

        return redirect()->route('admin.genres');
    }

    public function store(Request $request)
    {
        $getGenres = new Generes;
        $getGenres->name = $request->name;
        $getGenres->description = $request->description;
        $getGenres->status = $request->status;
        $getGenres->save();

        return redirect()->route('admin.genres');

    }

    public function update(Request $request)
    {
        $getgenres = Generes::where('id',$request->id)->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status,
            ]
        );
        return redirect()->route('admin.genres');
    }
}
