<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pocetna-Radnici') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-x1">Ovdje ce biti izlistani radnici</h1>
                    <hr/>
                    @foreach($workers as $worker)
                    <p class="p-2">{{$loop->iteration}}. {{$worker->name}}-{{$worker->description}}</p>
                    @endforeach
</div>
                
            </div>
        </div>
    </div>
</x-app-layout>
