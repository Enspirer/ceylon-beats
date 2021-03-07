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
        return view('backend.license.index');
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
                $btn1 = '<a href="x" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="'.route('admin.license.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
}
