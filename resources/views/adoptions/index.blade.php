<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pocetna-Udomljavanja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
 
            <div>
                <h1>Upit 1: Ispis imena mačaka i njenog boja udomljavanja</h1>
                        <hr/>
                        @foreach($most_common_cats as $most_common_cat) 
                        <p>{{$loop->iteration}}. {{$most_common_cat->name}} - {{$most_common_cat->brojac}}</p>
                        @endforeach
                    </div>
                    
</div>
</div>
</div>
</div>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 2: Ispis naziva država iz kojih potječu mačke koje su se najviše udomljavale i broj udomljavanja iz te države</h1>
                        <hr/>
                        @foreach($most_common_cat_countries as $most_common_cat_country) 
                        <p>{{$loop->iteration}}. {{$most_common_cat_country->country}} - {{$most_common_cat_country->brojac}}</p>
                        @endforeach
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h3>Upit 3: Ispisati broj udomljavanja odrađenih u periodu od 1.12.2021 do 2023.12.31</h3>
                        <hr/>
                        <p>{{$number_of_adoptions}}</p>
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 4: Ispis imena i prezimena radnika koji su dali na udomljavanje mačke kategorije Bengalska u periodu 10.12.2021 do 31.12.2023.</h1>
                        <hr/>
                        @foreach($bengal_cat_workers as $bengal_cat_worker)
                        <p>{{$loop->iteration}}. {{$bengal_cat_worker->worker_name}} - {{$bengal_cat_worker->worker_lastname}}</p>
                        @endforeach
                </div>
                </div>
</div>
</div>
</div>
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                <div>
                        <h1>Upit 5: Ispis prezimena radnika i njegovog opisa posla koji je dao na udomljavanje mačke pod svojim rednim brojem koda 3</h1>
                        <hr/>
                        @foreach($turner_cat_workers as $turner_cat_worker)
                        <p>{{$loop->iteration}}. {{$turner_cat_worker->worker_lastname}} - {{$turner_cat_worker->worker_description}}</p>
                        @endforeach
                </div>
                </div>
</div>
</div>
</div>
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                <div>
                        <h3>Upit 6: Ispisati broj mačaka koje su primljene u centar u periodu od 1.12.2021 do 2023.12.31 bez obzira da li su one date na udomljavanje ili ne</h3>
                        <hr/>
                        <p>{{$number_of_cats}}</p>
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 7: Ispis naziva države iz koje mačke potječu i iz koje je najveći broj udomljavanja odrađen, te broj udomljavanja koja su odrađena za mačke koje su kategorije Bengalska</h1>
                        <hr/>
                        @foreach($most_common_cat_bengalska as $most_common_cat_bengalsk) 
                        <p>{{$loop->iteration}}. {{$most_common_cat_bengalsk->country}} - {{$most_common_cat_bengalsk->brojac}}</p>
                        @endforeach
                    </div>
                    </div>
</div>
</div>
</div>
                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-4 justify-items-left">
                    <div>
                        <h1>Upit 8: Ispis imena i prezimena radnika koji su dali na udomljavanje mačke osobi pod imenom Ema u periodu 10.12.2021 do 31.12.2023.</h1>
                        <hr/>
                        @foreach($ema_cat_workers as $ema_cat_worker)
                        <p>{{$loop->iteration}}. {{$ema_cat_worker->worker_name}} - {{$ema_cat_worker->worker_lastname}}</p>
                        @endforeach
                </div>

            </div>    
            </div>
        </div>
    </div>
</x-app-layout>
