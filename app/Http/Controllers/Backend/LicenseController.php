<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Moduels\License;
use Illuminate\Http\Request;
use DataTables;
class LicenseController extends Controller
{
    public function index()
    {
        $license = License::all();
        return view('backend.license.index',[
            'license' => $license
        ]);
    }

    public function delete($id)
    {
        $liceseDetails = License::find($id);
        $liceseDetails->delete();

        return redirect()->route('admin.license');
    }

    public function create()
    {
        return view('backend.license.creator');
    }

    public function store(Request $request)
    {
        $liceseDetaials = new License;
        $liceseDetaials->license_name = $request->license_name;
        $liceseDetaials->license_agreement = $request->license_agreement;
        $liceseDetaials->description = $request->description;
        $liceseDetaials->status = $request->status;
        $liceseDetaials->license_type = $request->license_type;
        $liceseDetaials->save();
        return redirect()->route('admin.license');
    }

    public function getTableDetails()
    {
        $licenses = License::all();
        return Datatables::of($licenses)
            ->addColumn('action', function($row){
                $btn1 = '<a href="'.route('admin.license.edit',$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<button class="edit btn btn-primary btn-sm" style="margin-left:5px;" data-toggle="modal" data-target="#exampleModal'.$row->id.'"><i class="fa fa-trash"></i> Trash </button>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function edit($id)
    {
        $liceseDetails = License::where('id',$id)->first();
        return view('backend.license.edit',['liceseDetails'=>$liceseDetails]);
    }
    public function update(Request $request)
    {
        License::where('id',$request->id)->update([
            'license_name' => $request->license_name,
            'license_agreement' => $request->license_agreement,
            'description' => $request->description,
            'status' => $request->status,
            'license_type' => $request->license_type,
         ]);
         return back();
    }
}
