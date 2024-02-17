<x-app-web-layout>

    <x-slot:title>
        Products Edit
    </x-slot>

    <div class="container mt-5">
        <form action="{{ url('products/'.$products->id.'/edit') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row justify-content-ceter">
                <div class="col md-6">

                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Products
                                <a href="{{url('products')}}" class="btn btn-primary float-end">back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="{{$products->name}}" class="form-control" />
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Product Description</label>
                                <textarea name="description" rows="3" class="form-control">{{$products->description}}</textarea>
                                @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Product Price</label>
                                <input type="text" name="price" class="form-control" value="{{$products->price}}"/>
                                @error('price') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Product Stock</label>
                                <input type="text" name="stock" class="form-control" value="{{$products->stock}}"/>
                                @error('stock') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Is Active</label>
                                <br>
                                <input type="checkbox" name="is_active" style="height:20px;width:20px" {{$products->is_active == true ? 'checked':''}}/>
                                @error('is_active') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-web-layout>
