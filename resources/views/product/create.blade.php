<x-app-web-layout>

    <x-slot:title>
        Products Create
    </x-slot>

    <div class="container mt-5">
        <form action="{{ url('products/create') }}" method="POST">
            @csrf

            <div class="row justify-content-ceter">
                <div class="col md-6">

                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Add Product
                                <a href="{{url('products')}}" class="btn btn-primary float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" autocomplete="off" />
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Product Description</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                                @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Product Price</label>
                                <input type="text" name="price" class="form-control" autocomplete="off" />
                                @error('price') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Product Stock</label>
                                <input type="text" name="stock" class="form-control" autocomplete="off"/>
                                @error('stock') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Is Active</label>
                                <br>
                                <input type="checkbox" name="is_active" style="height:40px;width:40px"/>
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
