<?php

namespace App\Http\Controllers;

use App\IndexTable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $mainTable = IndexTable::all();
        return view('home',['mainTable' => $mainTable]);
    }

    public function view($index_id){
        $mainObject = IndexTable::find($index_id);
        $object = $mainObject->toArray();
        $object['index_id'] = $mainObject->id;
        $object['worker_family_member_details'] = $mainObject->workerFamilyMemberDetail->toArray();
        $object['worker_personal_details'] = $mainObject->workerPersonalDetail->toArray();
        $object['worker_bank_security_details'] = $mainObject->workerBankSecurityDetail->toArray();
        $sessionDates = ['2019-2021','2021-2023','2023-2025'];
        $districtNames = ['RahimYarKhan','Lahore','Attock','Bahawalpur'];
        return view('welcome',['data' => $object,'sessionDates' => $sessionDates,'districtNames' => $districtNames]);
    }
}
