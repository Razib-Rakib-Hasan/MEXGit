<?php

namespace App\Http\Controllers\api\inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice\invoice;
use App\Models\invoice\invoiceDetail;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return json_encode(['invoices'=>'successful']);
        // $invoices = DB::table('invoices as i')
        //     ->join('customers as c', 'c.id', '=', 'i.customer_id')
        //     ->select('i.id', 'i.created_at', 'i.invoice_total', 'c.name as customer')
        //     ->get();
        // $invoices = DB::table('invoices as i')
        //     ->join('customers as c', 'c.id', '=', 'i.customer_id')
        //     ->select('i.id', 'i.created_at','i.invoice_total','i.shipping_address','c.name as customer')
        //     ->get();

       // return json_encode(['invoice' => $invoices]);

    $invoices=invoice:: all();
    return json_encode(["invoices"=>$invoices]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  return json_encode(['invoices'=>'successful']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return json_encode(['invoices' => 'successful']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
