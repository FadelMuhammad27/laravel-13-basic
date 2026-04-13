<x-app>


    <x-slot:title>{{ $title }}</x-slot>
    <ul class="list-group">
        @foreach ($Students as $Student)
            <li class="list-group-item">{{ $loop->iteration }}.{{ $Student->nim }}--{{ $Student->name }}</li>
        @endforeach

        <h1 class="fw-bold">Data Student</h1>
</x-app>
