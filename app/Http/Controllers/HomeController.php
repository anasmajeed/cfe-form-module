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
        $object['worker_family_member_details'] = $mainObject->workerFamilyMemberDetail ? $mainObject->workerFamilyMemberDetail->toArray() : null;
        $object['worker_personal_details'] = $mainObject->workerPersonalDetail ? $mainObject->workerPersonalDetail->toArray() : null;
        $object['worker_bank_security_details'] = $mainObject->workerBankSecurityDetail->toArray();
        $object['factory_details'] = $mainObject->factoryDetail ? $mainObject->factoryDetail->toArray() : null;
        $object['service_details'] = $mainObject->serviceDetail ? $mainObject->serviceDetail->toArray() : null;
        $object['factory_death_manager_details'] = $mainObject->factoryDeathManagerDetail ? $mainObject->factoryDeathManagerDetail->toArray() : null;
        $object['student_personal_detail'] = $mainObject->studentPersonalDetail ? $mainObject->studentPersonalDetail->toArray() : null;
        $sessionDates = ['2019-2021','2021-2023','2023-2025'];
        $districtNames = ['RahimYarKhan','Lahore','Attock','Bahawalpur'];
        return view('welcome',['data' => $object,'sessionDates' => $sessionDates,'districtNames' => $districtNames]);
    }
}
