<x-app-web-layout>

    <x-slot name="title">
        Add Categories
     </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Categories
                            <a href="{{url('categories')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('categories/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                @error('name')
                                    <span class="text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{old('name')}}</textarea>
                                @error('description')
                                <span class="text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" >Is Active</label>
                                <br>
                                <input type="checkbox" style="width:20px;height:20px;" name="is_active" {{old('is_active') == true ? checked:''}}>
                                @error('is_active')
                                <span class="text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>