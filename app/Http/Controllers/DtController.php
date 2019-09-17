<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lokasi;
use Yajra\Datatables\Datatables;

class DtController extends Controller
{
    
    function index()
    {
    	return view('dt');
    }

    function get_data(DataTables $datatables)
    {
    	$query = Lokasi::select('villages.name as kelurahan','districts.name as kecamatan','regencies.name as kota','provinces.name as provinsi')
    		->leftJoin('districts','villages.district_id','=','districts.id')
    		->leftJoin('regencies','districts.regency_id','=','regencies.id')
    		->leftJoin('provinces','regencies.province_id','=','provinces.id');

        return $datatables->eloquent($query)
                          ->toJson();
    }
}
