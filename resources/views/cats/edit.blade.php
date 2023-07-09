<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Macke-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($cats as $cat)
                    <form method="POST" action="{{ route('update_cat') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$cat->id}}"/>
                        <div>
                            <x-label for="name" value="{{ __('Naziv') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="year" value="{{ __('Godina') }}" />
                            <x-input id="year" class="block mt-1 w-full" type="date" name="year" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="gender" value="{{ __('Spol') }}" />
                            <x-input id="gender" class="block mt-1 w-full" type="text" name="gender" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="code" value="{{ __('Sifra') }}" />
                            <x-input id="code" class="block mt-1 w-full" type="number" name="code" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="weight" value="{{ __('Tezina') }}" />
                            <x-input id="weight" class="block mt-1 w-full" type="number" name="weight" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="brand" value="{{ __('Kategorija') }}" />
                            <select id="brand" name="brand" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 
                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option>Odaberi</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}"
                                @if($cat->brand==$brand->id)selected
                                @endif>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>