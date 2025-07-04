@extends('layouts.master')
@section('pages')
   <!-- Page Header -->
   <div class="card bg-primary mb-3 p-4">
       <div class="row">
           <div class="col-12 d-flex justify-content-between align-item-center ">
               <h3 class=" card-title text-white d-flex align-items-center  m-0">Create ProductCategory</h3>
               <a href="{{ route('product_categories.index') }}" class="btn btn-light btn-sm" title="Back">
                   <i class="fa fa-arrow-left mr-1"></i> Back
               </a>
           </div>
       </div>
   </div>
<div class="mb-2">
   <strong>Id:</strong> {{ $productCategory->id }}
</div>
<div class="mb-2">
   <strong>Name:</strong> {{ $productCategory->name }}
</div>
<div class="mb-2">
   <strong>Description:</strong> {{ $productCategory->description }}
</div>
<div class="mb-2">
   <strong>Product id:</strong> {{ $productCategory->product->name ?? $productCategory->product_id }}
</div>
<div class="mb-2">
   <strong>Status:</strong> {{ $productCategory->status }}
</div>
<div class="mb-2">
   <strong>Created at:</strong> {{ $productCategory->created_at }}
</div>
<div class="mb-2">
   <strong>Updated at:</strong> {{ $productCategory->updated_at }}
</div>

@endsection