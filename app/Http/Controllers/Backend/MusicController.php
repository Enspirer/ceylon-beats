<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Generes;
use App\Models\MusicProducts;
use App\Moduels\License;
use Illuminate\Http\Request;
use DataTables;
class MusicController extends Controller
{
    public function index()
    {
        $getGenres = MusicProducts::all();
        return view('backend.music.index',[
            'music' => $getGenres,
        ]);
    }

    public function delete($id)
    {
        MusicProducts::where('id',$id)->delete();
        Favorite::where('music_id',$id)->delete();
        return back();
    }

    public function store(Request $request)
    {
        $priceArray = [];
        foreach ($request->price as $index =>$price_list)
        {
            $outarray = [
                'price' => $price_list,
                'license_name' => $request->licese_name[$index],
                'licese_id' => $request->licese_id[$index]
            ];
            array_push($priceArray,$outarray);
        }
        $encodeJosnPackagePrice = json_encode($priceArray);
        $musicDetails = new MusicProducts;
        if($request->file('preview_file'))
        {
            $preview_fileName = time().'.'.$request->preview_file->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->preview_file->move(public_path('files/preview_files'), $preview_fileName);
            $musicDetails->preview_link = $preview_fileName;
        }else{
            $musicDetails->preview_link = 'no_img.jpg';
        }
        if($request->file('original_file'))
        {
            $orginal_fileName = time().'.'.$request->original_file->getClientOriginalExtension();
            $fullURLsOriginalFile = $request->original_file->move(public_path('files/original_files'), $orginal_fileName);
            $musicDetails->download_link = $orginal_fileName;
        }else{
            $musicDetails->download_link = 'no_img.jpg';
        }
        $musicDetails->music_name = $request->music_name;
        $musicDetails->description = $request->description;
        $musicDetails->price = $encodeJosnPackagePrice;
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

    public function update(Request $request)
    {
        $priceArray = [];
        foreach ($request->price as $index =>$price_list)
        {
            $outarray = [
                'price' => $price_list,
                'license_name' => $request->licese_name[$index],
                'licese_id' => $request->licese_id[$index]
            ];
            array_push($priceArray,$outarray);
        }
        $encodeJosnPackagePrice = json_encode($priceArray);
        if($request->file('preview_file'))
        {
            $preview_fileName = time().'.'.$request->preview_file->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->preview_file->move(public_path('files/preview_files'), $preview_fileName);
            $preview_link = $preview_fileName;
        }else{
            $getmusicProductz = MusicProducts::where('id',$request->id)->first();
            $preview_link = $getmusicProductz->preview_link;
        }
        if($request->file('original_file'))
        {
            $orginal_fileName = time().'.'.$request->original_file->getClientOriginalExtension();
            $fullURLsOriginalFile = $request->original_file->move(public_path('files/original_files'), $orginal_fileName);
            $original_file = $orginal_fileName;
        }else{
            $getmusicProductz = MusicProducts::where('id',$request->id)->first();
            $original_file = $getmusicProductz->download_link;
        }


        $getmusicProduct = MusicProducts::where('id',$request->id)->update([
            'music_name' => $request->music_name,
            'download_link' => $original_file,
            'preview_link' => $preview_link,
            'description' => $request->description,
            'price' => $encodeJosnPackagePrice,
            'genres_id' => $request->genres,
            'tags' => $request->tag,
            'duration' => $request->duration,
            'instrument' => $request->instrument,
            'bmp' => $request->bmp,
            'tempo' => $request->tempo,
            'author_name' => $request->author_name,
            'user_id' => auth()->user()->id,
            'is_features' =>  $request->is_features
        ]);
        return redirect()->route('admin.music');
    }



    public function getTableDetails()
    {
        $category = MusicProducts::all();
        return Datatables::of($category)
            ->editColumn('price',function ($row){
                $price_details = json_decode($row->price);
                $imprim ="";
                foreach ($price_details as $pricedetails)
                {
                    $imprim .= '<p class="badge badge-secondary" style="display: flow-root; padding: 10px;text-align: inherit;line-height: 16px;margin-bottom: 5px;"><b>License Name: </b>'.$pricedetails->license_name.'<br> <b>Price: </b>'.number_format($pricedetails->price,2).'</p>';
                }
                return $imprim;
            })
            ->addColumn('action', function($row){
                $btn1 = '<a href="'.route('admin.music.edit',$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <button   data-toggle="modal" data-target="#exampleModal'.$row->id.'"  class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </button>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action','price'])
            ->make();
    }

    public function create()
    {
        $licenseDetails =  License::where('status',1)->get();
        $getGenres = Generes::where('status',1)->get();
        return view('backend.music.creator',[
            'liceseDetails' => $licenseDetails,
            'get_genres' => $getGenres,
        ]);
    }
    public function edit($id)
    {
        $licenseDetails =  License::where('status',1)->get();
        $getGenres = Generes::where('status',1)->get();
        $musicDetails = MusicProducts::where('id',$id)->first();

        return view('backend.music.edit',[
            'musicDetails'=>$musicDetails,
            'get_genres' => $getGenres,
            'liceseDetails' => $licenseDetails
        ]);
    }

}
