@csrf
@if ($mode === 'edit')
   @method('PUT')
@endif

<div class="mb-2">
   <label>Name</label>
   <input type="text" name="name" value="{{ old('name', $productCategory->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
   <label>Description</label>
   <input type="text" name="description" value="{{ old('description', $productCategory->description ?? '') }}" class="form-control">
</div>
<div class="mb-2">
   <label>Product id</label>
   <select name="product_id" class="form-select">
       <option value="">Select Product id</option>
       @foreach ($products as $option)
           <option value="{{ $option->id }}" {{ old('product_id', $productCategory->product_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
       @endforeach
   </select>
</div>
<div class="mb-2">
   <label>Status</label>
   <input type="text" name="status" value="{{ old('status', $productCategory->status ?? '') }}" class="form-control">
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>