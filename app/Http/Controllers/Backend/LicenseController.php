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

    public function create()
    {
        return view('backend.license.creator');
    }

    public function store()
    {

    }

    public function getTableDetails()
    {
        $licenses = License::all();
        return Datatables::of($licenses)
            ->addColumn('action', function($row){
                $btn1 = '<a href="x" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="x" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
}
