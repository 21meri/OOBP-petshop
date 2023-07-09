<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = DB::table('cats')
        ->get();

        return view('cats.index',['cats'=>$cats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands=DB::table('brands')
        ->get();

        return view('cats.add',['brands'=>$brands]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
        ]);

        DB::table('cats')->insert([
            'name'=>$request->name,
            'year'=>$request->year,
            'weight'=>$request->weight,
            'code'=>$request->code,
            'gender'=>$request->gender,
            'brand'=>$request->brand,
        ]);
        return redirect()->route('cats');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        //
    }

    public function delete(Request $request)
    {
        $id=$request->id;

        Cat::destroy($id);

        return redirect()->route('cats');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $cats = DB::table('cats')
        ->where('id', $id)
        ->get();

        $brands = DB::table('brands')
        ->get();
    
        return view('cats.edit', ['cats' => $cats , 'brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $update_query = DB::table('cats')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'year' => $request->year,
            'weight' => $request->weight,
            'code' => $request->code,
            'gender' => $request->gender,
            'brand' => $request->brand,
            ]);

        return redirect()->route('cats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        //
    }

    public function file_add(Request $request)
    {
        $id=$request->id;
        
        $cats = Cat::find($id);

        return view('cats.file_add', ['id' => $id , 'cats' => $cats]);

    }

    public function process(Request $request)
    {
        $id=$request->id;
        
        $cats = Cat::find($id);

        $folder_to_save = $cats->code;

        $file = $request->file('file');

        $filename = $cats->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('cats');

    
}


}
