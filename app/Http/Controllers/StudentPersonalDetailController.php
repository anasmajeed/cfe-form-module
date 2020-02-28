<?php

namespace App\Http\Controllers;

use App\Fields\StudentPersonalDetailFields;
use App\StudentPersonalDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StudentPersonalDetailController extends Controller
{
    public function post(Request $request){
        $params = $request->all();

        $indexTableId = Arr::get($params,'index_id');
        $name = Arr::get($params,StudentPersonalDetailFields::NAME);
        $fatherName = Arr::get($params,StudentPersonalDetailFields::FATHER_NAME);
        $CNICNo = Arr::get($params,StudentPersonalDetailFields::CNIC_NO);
        $quantity = Arr::get($params,StudentPersonalDetailFields::QUANTITY);
        $studentCNICAttested = Arr::get($params,StudentPersonalDetailFields::STUDENT_CNIC_ATTESTED);

        $birth_date_explode = explode('/',Arr::get($params,StudentPersonalDetailFields::DATE_OF_BIRTH));
        if(count($birth_date_explode) == 3)
            $dateOfBirth = Carbon::createFromDate($birth_date_explode[2],$birth_date_explode[1],$birth_date_explode[0])->format('Y-m-d');
        else
            $dateOfBirth = Arr::get($params,StudentPersonalDetailFields::DATE_OF_BIRTH);

        $presentAddress = Arr::get($params,StudentPersonalDetailFields::PRESENT_ADDRESS);
        $maritalStatus = Arr::get($params,StudentPersonalDetailFields::MARITAL_STATUS);
        $contactNo1 = Arr::get($params,StudentPersonalDetailFields::CONTACT_NO_1);
        $contactNo2 = Arr::get($params,StudentPersonalDetailFields::CONTACT_NO_2);
        $postalAddress = Arr::get($params,StudentPersonalDetailFields::POSTAL_ADDRESS);
        $email = Arr::get($params,StudentPersonalDetailFields::EMAIL);
        $signature = Arr::get($params,StudentPersonalDetailFields::SIGNATURE);

        if(!$indexTableId) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }
        else{
            $object = StudentPersonalDetail::where(StudentPersonalDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$object){
                $object = new StudentPersonalDetail();
            }
        }

        $object->index_table_id = $indexTableId;
        $object->name = $name;
        $object->father_name = $fatherName;
        $object->cnic_no = $CNICNo;
        $object->quantity = $quantity;
        $object->student_cnic_attested = $studentCNICAttested;
        $object->date_of_birth = $dateOfBirth;
        $object->present_address = $presentAddress;
        $object->marital_status = $maritalStatus;
        $object->contact_no_1 = $contactNo1;
        $object->contact_no_2 = $contactNo2;
        $object->postal_address = $postalAddress;
        $object->email = $email;
        $object->signature = $signature;
        $object->save();


        return response()->json([
            'message' => 'Saved Successfully',
            'object' => $object
        ],200);
    }
}
