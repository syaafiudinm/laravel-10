<x-app-web-layout>

    <x-slot:title>
        My Laravel App
    </x-slot>

    <div class="py-5">
        <div class="container">

            <div class="jumbotron">
                <h1 class="display-4">Hello, User!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="{{url('products')}}" role="button">see Product!</a>
              </div>

        </div>
    </div>

</x-app-web-layout>
