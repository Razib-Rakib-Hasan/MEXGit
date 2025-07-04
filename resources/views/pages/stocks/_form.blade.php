@csrf
@if ($mode === 'edit')
   @method('PUT')
@endif

<div class="mb-2">
   <label>Name</label>
   <input type="text" name="name" value="{{ old('name', $stock->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
   <label>Product id</label>
   <select name="product_id" class="form-select">
       <option value="">Select Product id</option>
       @foreach ($products as $option)
           <option value="{{ $option->id }}" {{ old('product_id', $stock->product_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
       @endforeach
   </select>
</div>
<div class="mb-2">
   <label>Qty</label>
   <input type="text" name="qty" value="{{ old('qty', $stock->qty ?? '') }}" class="form-control">
</div>
<div class="mb-2">
   <label>Transaction id</label>
   <select name="transaction_id" class="form-select">
       <option value="">Select Transaction id</option>
       @foreach ($transactions as $option)
           <option value="{{ $option->id }}" {{ old('transaction_id', $stock->transaction_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
       @endforeach
   </select>
</div>
<div class="mb-2">
   <label>Remarks</label>
   <input type="text" name="remarks" value="{{ old('remarks', $stock->remarks ?? '') }}" class="form-control">
</div>
<div class="mb-2">
   <label>Money store id</label>
   <select name="money_store_id" class="form-select">
       <option value="">Select Money store id</option>
       @foreach ($moneyStores as $option)
           <option value="{{ $option->id }}" {{ old('money_store_id', $stock->money_store_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
       @endforeach
   </select>
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>