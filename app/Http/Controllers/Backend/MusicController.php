<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MusicProducts;
use Illuminate\Http\Request;
use DataTables;
class MusicController extends Controller
{
    public function index()
    {
        return view('backend.music.index');
    }

    public function store(Request $request)
    {
        $musicDetails = new MusicProducts;
        if($request->file('preview_file'))
        {
            //Feature Images
            $preview_fileName = time().'.'.$request->preview_file->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->preview_file->move(public_path('files/preview_files'), $preview_fileName);
            $musicDetails->preview_link = $preview_fileName;
        }else{
            $musicDetails->preview_link = 'no_img.jpg';
        }


        if($request->file('original_file'))
        {
            //Feature Images
            $orginal_fileName = time().'.'.$request->original_file->getClientOriginalExtension();
            $fullURLsOriginalFile = $request->original_file->move(public_path('files/original_files'), $orginal_fileName);
            $musicDetails->download_link = $orginal_fileName;
        }else{
            $musicDetails->download_link = 'no_img.jpg';
        }

        $musicDetails->music_name = $request->music_name;
        $musicDetails->description = $request->description;
        $musicDetails->price = $request->price;
        $musicDetails->genres_id = $request->genres;
        $musicDetails->tags = $request->tag;
        $musicDetails->duration = $request->duration;
        $musicDetails->instrument = $request->instrument;
        $musicDetails->bmp = $request->bmp;
        $musicDetails->tempo = $request->tempo;
        $musicDetails->author_name = $request->author_name;
        $musicDetails->user_id = auth()->user()->id;
        $musicDetails->is_features = $request->is_features;
        $musicDetails->save();
        return redirect()->route('admin.music');
    }

    public function getTableDetails()
    {
        $category = MusicProducts::all();
        return Datatables::of($category)
            ->addColumn('action', function($row){
                $btn1 = '<a href="x" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="x" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function create()
    {
        return view('backend.music.creator');
    }

}
