@extends('layouts.master')
@section('pages')
   <!-- Page Header -->
   <div class="card bg-primary mb-3 p-4">
       <div class="row">
           <div class="col-12 d-flex justify-content-between align-item-center ">
               <h3 class=" card-title text-white d-flex align-items-center  m-0">Create Product</h3>
               <a href="{{ route('products.index') }}" class="btn btn-light btn-sm" title="Back">
                   <i class="fa fa-arrow-left mr-1"></i> Back
               </a>
           </div>
       </div>
   </div>
<div class="mb-2">
   <strong>Id:</strong> {{ $product->id }}
</div>
<div class="mb-2">
   <strong>Name:</strong> {{ $product->name }}
</div>
<div class="mb-2">
   <strong>Offer price:</strong> {{ $product->offer_price }}
</div>
<div class="mb-2">
   <strong>Regular price:</strong> {{ $product->regular_price }}
</div>
<div class="mb-2">
   <strong>Description:</strong> {{ $product->description }}
</div>
<div class="mb-2">
   <strong>Photo:</strong><br>
   @if($product->photo)
       <img src="{{ asset('storage/' . $product->photo) }}" width="150">
   @else
       No Photo
   @endif
</div>
<div class="mb-2">
   <strong>Product category id:</strong> {{ $product->productCategory->name ?? $product->product_category_id }}
</div>
<div class="mb-2">
   <strong>Product section id:</strong> {{ $product->productSection->name ?? $product->product_section_id }}
</div>
<div class="mb-2">
   <strong>Offer discount:</strong> {{ $product->offer_discount }}
</div>
<div class="mb-2">
   <strong>Product type id:</strong> {{ $product->productType->name ?? $product->product_type_id }}
</div>
<div class="mb-2">
   <strong>Product unit id:</strong> {{ $product->productUnit->name ?? $product->product_unit_id }}
</div>
<div class="mb-2">
   <strong>Created at:</strong> {{ $product->created_at }}
</div>
<div class="mb-2">
   <strong>Updated at:</strong> {{ $product->updated_at }}
</div>

@endsection