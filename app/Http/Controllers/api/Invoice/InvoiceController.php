<?php

namespace App\Http\Controllers\api\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Invoice\Invoice;
// use App\Models\Invoice\InvoiceDetail;
use App\Models\Invoice\InvoiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $invoices=Invoice::all();
    //     return json_encode(['invoices'=>$invoices]);

        $invoices=DB::table('invoices as i')
          ->join('customers as c','c.id','=','i.customer_id')
        ->select('i.id','i.created_at','i.invoice_total','i.payment_term','c.name as customer')
        ->get();

            return json_encode(array('hello'=> $invoices));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $invoice =new Invoice();
        $invoice->customer_id=$request->customer_id;
        $invoice->invoice_total=$request->invoice_total;
        $invoice->payment_term=$request->payment_term;
        $invoice->paid_total=$request->paid_total;
        $invoice->created_at=$request->created_at;
        $invoice->remarks=$request->remarks;
        $invoice->discount=$request->discount;
        $invoice->previous_due=0;
        $invoice->save();

        $products=$request->items;

        foreach($products as $product){
            $pr=new InvoiceDetail();
            $pr->invoice_id=$invoice->id;
            $pr->product_id=$product['id'];
            $pr->price=$product['price'];
            $pr->vat=$product['vat'];
            $pr->discount=$product['discount'];
            $pr->save();
        }
        return json_encode(['invoices'=>$invoice]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
