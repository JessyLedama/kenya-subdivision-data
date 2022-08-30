<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCounty;
use App\Services\CountyService;
use App\Services\RegionService;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionsData = RegionService::all();
        $regionsCount = $regionsData['regionsCount'];
        $regions = $regionsData['regions'];

        $counties = CountyService::paginate(10);
        $countiesCount = County::count();
        $subCounties = SubCounty::with('county')->paginate(10);
        
        
        $subCountiesCount = count(SubCounty::all());

        return view('summery', compact('regionsCount','countiesCount', 'subCountiesCount', 'regions', 'counties', 'subCounties'));
    }
}