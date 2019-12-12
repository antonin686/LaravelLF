<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catagory;
use App\SubCatagory;
use App\Manufacturer;
use DB;


class HomeController extends Controller
{
    
    function index(Request $request)
    {
        if($request->session()->get('role') == 1)
        {
            return view('admin.home');
        }else{

        $products = Product::all();
        $catagories = Catagory::all();
        $subCatagories = SubCatagory::all();
        $manusfacturers = Manufacturer::all();

        $datas = [];

        foreach ($catagories as $catagory) {
            $subcata = [];   
            foreach ($subCatagories as $sub) {

                if ($sub->c_id == $catagory->id) {
                    
                    
                        $subcata[] = [
                            's_name' => $sub->name,
                            's_id' => $sub->id,
                        ];
                    
                }

            }
            
            if(!empty($subcata))
            {
                $datas[] = [
                    'c_name' => $catagory->name,
                    's_data' => $subcata,
                ];
            }
            
        }
            
            return view('user.home')->with('catagories',$datas);
        }
    }
}
