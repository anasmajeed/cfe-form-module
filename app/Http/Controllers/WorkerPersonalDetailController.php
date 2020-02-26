<?php

namespace App\Http\Controllers;

use App\Fields\WorkerPersonalDetailFields;
use App\WorkerPersonalDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class WorkerPersonalDetailController extends Controller
{
    public function post(Request $request){
        $params = $request->all();

        $indexTableId = Arr::get($params,'index_id');
        $photographUploaded = Arr::get($params,WorkerPersonalDetailFields::PHOTOGRAPH_UPLOADED);
        $photographAttested = Arr::get($params,WorkerPersonalDetailFields::PHOTOGRAPH_ATTESTED);
        $photographQuantity = Arr::get($params,WorkerPersonalDetailFields::PHOTOGRAPH_QUANTITY);
        $workerName = Arr::get($params,WorkerPersonalDetailFields::WORKER_NAME);
        $applicantName = Arr::get($params,WorkerPersonalDetailFields::APPLICANT_NAME);
        $workerCNIC = Arr::get($params,WorkerPersonalDetailFields::WORKER_CNIC);
        $workerCNICAttested = Arr::get($params,WorkerPersonalDetailFields::WORKER_CNIC_ATTESTED);
        $workerCurrentStatus = Arr::get($params,WorkerPersonalDetailFields::WORKER_CURRENT_STATUS);
        $workerJobNature = Arr::get($params,WorkerPersonalDetailFields::WORKER_JOB_NATURE);
        $factoryStatus = Arr::get($params,WorkerPersonalDetailFields::FACTORY_STATUS);
        $workerRelationship = Arr::get($params,WorkerPersonalDetailFields::WORKER_RELATIONSHIP);

        $birth_date_explode = explode('/',Arr::get($params,WorkerPersonalDetailFields::DATE_OF_BIRTH));
        if(count($birth_date_explode) == 3)
            $dateOfBirth = Carbon::createFromDate($birth_date_explode[2],$birth_date_explode[1],$birth_date_explode[0])->format('Y-m-d');
        else
            $dateOfBirth = Arr::get($params,WorkerPersonalDetailFields::DATE_OF_BIRTH);
        $contactNo1 = Arr::get($params,WorkerPersonalDetailFields::CONTACT_No_1);
        $contactNo2 = Arr::get($params,WorkerPersonalDetailFields::CONTACT_No_2);
        $contactNo3 = Arr::get($params,WorkerPersonalDetailFields::CONTACT_No_3);
        $pwwbScholarshipForm = Arr::get($params,WorkerPersonalDetailFields::PWWB_SCHOLARSHIP_FORM);
        $factoryCard = Arr::get($params,WorkerPersonalDetailFields::FACTORY_CARD);
        $serviceLetter = Arr::get($params,WorkerPersonalDetailFields::SERVICE_LETTER);

        if(!$indexTableId) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }
        else{
            $object = WorkerPersonalDetail::where(WorkerPersonalDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$object){
                $object = new WorkerPersonalDetail();
            }
        }

        $object->index_table_id = $indexTableId;
        $object->photograph_uploaded = $photographUploaded;
        $object->photograph_attested = $photographAttested;
        $object->photograph_quantity = $photographQuantity;
        $object->worker_name = $workerName;
        $object->applicant_name = $applicantName;
        $object->worker_cnic = $workerCNIC;
        $object->worker_cnic_attested = $workerCNICAttested;
        $object->worker_current_status = $workerCurrentStatus;
        $object->worker_job_nature = $workerJobNature;
        $object->factory_status = $factoryStatus;
        $object->worker_relationship = $workerRelationship;
        $object->date_of_birth = $dateOfBirth;
        $object->contact_no_1 = $contactNo1;
        $object->contact_no_2 = $contactNo2;
        $object->contact_no_3 = $contactNo3;
        $object->pwwb_scholarship_form = $pwwbScholarshipForm;
        $object->factory_card = $factoryCard;
        $object->service_letter = $serviceLetter;
        $object->save();


        return response()->json([
            'message' => 'Saved Successfully',
            'object' => $object
        ],200);
    }
}
