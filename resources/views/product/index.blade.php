<x-app-web-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Products
                            <a href="{{url('products/create')}}" class="btn btn-primary float-end">Add Product</a>
                        </h4>
                    </div>
                    <div class="card-body">
                       <table class="table table-border table-striped">
                         <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>is Active</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>
                                        @if ($product->is_active)
                                            Active
                                        @else
                                            In-Active
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{url('products/'.$product->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Are ou sure want to delete product?');">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>
