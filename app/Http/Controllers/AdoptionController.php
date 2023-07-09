<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                // Ispisati broj udomljavanja odrađenih u periodu od 1.12.2021 do 31.12.2021

                $from = '2021-12-01 00:00:00';
                $to = '2023-12-31 23:59:59';
        
                $number_of_adoptions = DB::table('adoptions')
                    ->whereBetween('date', [$from, $to])
                    ->count();

                    $number_of_cats = DB::table('cats')
                    ->whereBetween('year', [$from, $to])
                    ->count();


   

                    $most_common_cat_countries = DB::table('cats')
                    ->select('brands.*', DB::raw('count(*) as brojac'))
                    ->groupBy('brands.id')
                    ->join('adoptions', 'cats.id', '=', 'adoptions.cat')
                    ->join('brands', 'cats.brand', '=', 'brands.id')
                    ->orderByRaw('COUNT(*) DESC')
                    ->get();


                    $ema_cat_workers = DB::table('workers')
                    ->select('workers.name as worker_name', 'workers.lastname as worker_lastname')
                    ->groupBy('workers.id')
                    ->join('adoptions', 'workers.id', '=', 'adoptions.worker')
                    ->join('cats', 'adoptions.cat', '=', 'cats.id')
                    ->join('brands', 'cats.brand', '=', 'brands.id')
                    ->where('adoptions.name', 'Ema')
                    ->whereBetween('date', [$from, $to])
                    ->get();

                    $most_common_cat_bengalska = DB::table('cats')
                    ->select('brands.*', DB::raw('count(*) as brojac'))
                    ->groupBy('brands.id')
                    ->join('adoptions', 'cats.id', '=', 'adoptions.cat')
                    ->join('brands', 'cats.brand', '=', 'brands.id')
                    ->where('brands.name', 'Bengalska')
                    ->orderByRaw('COUNT(*) DESC')
                    ->get();





            $most_common_cats = DB::table('cats')
            ->select('cats.*', DB::raw('count(*) as brojac'))
            ->groupBy('cats.id')
            ->join('adoptions', 'cats.id', '=', 'adoptions.cat')
            ->orderByRaw('COUNT(*) DESC')
            ->get();




 //    Ispisati imena i prezimena vozača koji su vozili auto njemačke proizvodnje koji su voženi u periodu od 10.12.2021 do 31.12.2021.

        
        $bengal_cat_workers = DB::table('workers')
        ->select('workers.name as worker_name', 'workers.lastname as worker_lastname')
        ->groupBy('workers.id')
        ->join('adoptions', 'workers.id', '=', 'adoptions.worker')
        ->join('cats', 'adoptions.cat', '=', 'cats.id')
        ->join('brands', 'cats.brand', '=', 'brands.id')
        ->where('brands.name', 'Bengalska')
        ->whereBetween('date', [$from, $to])
        ->get();

        $turner_cat_workers = DB::table('workers')
        ->select('workers.lastname as worker_lastname', 'workers.description as worker_description')
        ->groupBy('workers.id')
        ->join('adoptions', 'workers.id', '=', 'adoptions.worker')
        ->join('cats', 'adoptions.cat', '=', 'cats.id')
        ->join('brands', 'cats.brand', '=', 'brands.id')
        ->where('workers.name', 'Turner Heathcote')
        ->get();





        return view('adoptions.index', 
        [
            'most_common_cats'=>$most_common_cats,
        'most_common_cat_countries' => $most_common_cat_countries,
        'most_common_cat_bengalska' => $most_common_cat_bengalska, 
        'number_of_adoptions' => $number_of_adoptions,
        'number_of_cats' => $number_of_cats, 
        'bengal_cat_workers' => $bengal_cat_workers,
        'ema_cat_workers' => $ema_cat_workers,
        'turner_cat_workers' => $turner_cat_workers
    ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adoption $adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adoption $adoption)
    {
        //
    }
}
