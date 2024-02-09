<x-app-web-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Categories
                            <a href="{{url('categories/create')}}" class="btn btn-primary float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <x-slot name="title">
                            Categories
                        </x-slot>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>
