@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Product
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf   
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $product->code }}">
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                        
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">Quantity</label>
                <div class="col-md-6">
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity"value="{{ $product->quantity }}">
                        @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>
                    <div class="col-md-6">
                        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                    <div class="col-md-6">
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
<<<<<<< HEAD
                    <label for="image_blob" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control @error('image_blob') is-invalid @enderror" id="image_blob" name="image_blob">
                        @error('image_blob')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        @if($product->hasImage())
                            <div class="mt-2">
                                <small class="text-muted">Current image:</small><br>
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="max-width:200px; height:auto;" class="img-thumbnail">
                            </div>
                        @endif
                    </div>
                </div>
=======
                    <label for="image" class="col-md-4 col-form-label text-md-end text-start">Product Image</label>
                    <div class="col-md-6">
                        @if($product->image_path)
                        <div class="mb-2">
                            <strong>Current Image:</strong><br>
                <img src="{{ asset('storage/'.$product->image_path) }}" 
                     alt="Current Product Image" 
                     class="img-thumbnail mt-2" 
                     style="max-height: 150px;">
            </div>
        @endif
        
        <input type="file" 
               class="form-control @error('image') is-invalid @enderror" 
               id="image" 
               name="image">
        
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <small class="text-muted">
            @if($product->image_path)
                Leave empty to keep current image.
            @endif
        </small>
    </div>
</div>
>>>>>>> 5834926ac5a32b91cfd1b3662a15453859262678
                
                <div class="mb-3 row">
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
</div> 
</div>
@endsection

