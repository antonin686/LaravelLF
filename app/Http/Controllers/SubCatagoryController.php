<?php

namespace App\Http\Controllers;

use App\SubCatagory;
use DB;
use Illuminate\Http\Request;

class SubCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCatagory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCatagory $subCatagory)
    {
        //
    }
    
    public function brand($id)
    {
        $brands = DB::table('manufacturers')
            ->select('manufacturers.name','products.m_id')
            ->join('products', 'manufacturers.id', '=', 'products.m_id')
            ->groupBy('products.m_id')
            ->where('products.s_id', $id)
            ->get();

            $datas = (object) [
                'data' => $brands,
                's_id' => $id, 
            ];
            
            
            return view('product.brandlist')->with('brands', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCatagory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCatagory $subCatagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCatagory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCatagory $subCatagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCatagory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCatagory $subCatagory)
    {
        //
    }
}
