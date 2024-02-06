<x-app-web-layout>

    <x-slot:title>
        My Laravel App
    </x-slot>

    <div class="py-5">
        <div class="container">

            @php
                $succesMessage = "saved succesfully";
                $type = "danger";
            @endphp

            <x-alert-message :type="$type" :message="$succesMessage"/>

            <hr>

            <h4>Welcome to LARAVEL</h4>

            <hr>

            <x-form.label value="My First Name"/>

            <x-form.label>
                My name
            </x-form.label>

        </div>
    </div>

</x-app-web-layout>
