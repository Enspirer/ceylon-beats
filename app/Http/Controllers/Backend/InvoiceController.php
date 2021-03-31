<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use DataTables;
class InvoiceController extends Controller
{
    public function index()
    {
        return view('backend.invoice.index');
    }

    public function getTableDetails()
    {
        $invoices = Invoice::all();
        return Datatables::of($invoices)
            ->addColumn('customer_name',function ($row){
              $userDetaials = User::where('id',$row->user_id)->first();
              return $userDetaials->first_name.' '.$userDetaials->last_name;
            })
            ->editColumn('total',function ($row){
              return 'USD '. number_format($row->total,2);
            })
            ->addColumn('action', function($row){
                $btn1 = '<a href="'.route('admin.invoice.show',$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </a>';
                $btn2 = ' <a href="'.route('admin.invoice.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function show($id)
    {

    }

    public function delete($id)
    {

    }
}
