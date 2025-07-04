@extends('layouts.master')
@section('pages')
   <!-- Page Header -->
   <div class="card bg-primary mb-3 p-4">
       <div class="row">
           <div class="col-12 d-flex justify-content-between align-item-center ">
               <h3 class=" card-title text-white d-flex align-items-center  m-0">Edit ProductCategory</h3>
               <a href="{{ route('product_categories.index') }}" class="btn btn-light btn-sm" title="Back">
                   <i class="fa fa-arrow-left mr-1"></i> Back
               </a>
           </div>
       </div>
   </div>
   <form action="{{ route('product_categories.update', $productCategory->id) }}" method="POST" enctype="multipart/form-data">
       @include('pages.product_categories._form', ['mode' => 'edit', 'productCategory' => $productCategory])
   </form>
@endsection