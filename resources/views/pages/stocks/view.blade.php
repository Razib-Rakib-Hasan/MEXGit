@extends('layouts.master')
@section('pages')
   <!-- Page Header -->
   <div class="card bg-primary mb-3 p-4">
       <div class="row">
           <div class="col-12 d-flex justify-content-between align-item-center ">
               <h3 class=" card-title text-white d-flex align-items-center  m-0">Create Stock</h3>
               <a href="{{ route('stocks.index') }}" class="btn btn-light btn-sm" title="Back">
                   <i class="fa fa-arrow-left mr-1"></i> Back
               </a>
           </div>
       </div>
   </div>
<div class="mb-2">
   <strong>Id:</strong> {{ $stock->id }}
</div>
<div class="mb-2">
   <strong>Name:</strong> {{ $stock->name }}
</div>
<div class="mb-2">
   <strong>Product id:</strong> {{ $stock->product->name ?? $stock->product_id }}
</div>
<div class="mb-2">
   <strong>Qty:</strong> {{ $stock->qty }}
</div>
<div class="mb-2">
   <strong>Transaction id:</strong> {{ $stock->transaction->name ?? $stock->transaction_id }}
</div>
<div class="mb-2">
   <strong>Remarks:</strong> {{ $stock->remarks }}
</div>
<div class="mb-2">
   <strong>Money store id:</strong> {{ $stock->moneyStore->name ?? $stock->money_store_id }}
</div>
<div class="mb-2">
   <strong>Created at:</strong> {{ $stock->created_at }}
</div>
<div class="mb-2">
   <strong>Updated at:</strong> {{ $stock->updated_at }}
</div>

@endsection