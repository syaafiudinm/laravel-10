<x-app-web-layout>

    <x-slot name="title">
        Upload Product Image
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product images
                            <a href="{{url('products')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                        <h5>Product Name : {{$product->name}} </h5>
                        <hr>

                        @if ($errors->any())
                            <ul class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ url('products/'.$product->id.'/upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Upload image (Max: 10 images only)</label>
                                <input type="file" name="images[]" multiple class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4" style="display: flex; gap:20px">
                @foreach ($productImages as $prodImg)
                <div class="card" style="width: 115px;">
                    <img src="{{asset($prodImg->image)}}" class="card-img-top" alt="img" style="width: 113px; height: 100px;">
                    <div class="card-body">
                      <a href="{{url('product-image/'.$prodImg->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Are ou sure want to delete image product?');">remove</a>
                    </div>
                  </div>
                    {{-- <img src="{{asset($prodImg->image)}}" class="border p-2 m-3" alt="img">

                    <a href="{{url('product-image/'.$prodImg->id.'/delete')}}" class="btn btn-danger">Remove</a> --}}

                @endforeach
            </div>

        </div>
    </div>

</x-app-web-layout>
