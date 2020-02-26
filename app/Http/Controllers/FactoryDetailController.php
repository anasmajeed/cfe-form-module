<?php

namespace App\Http\Controllers;

use App\FactoryDetail;
use App\Fields\FactoryDetailFields;
use App\Fields\ServiceDetailFields;
use App\ServiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FactoryDetailController extends Controller
{

    public function post(Request $request)
    {
        $params = $request->all();

        $factoryName = Arr::get($params, FactoryDetailFields::FACTORY_NAME);
        $factoryAddress = Arr::get($params, FactoryDetailFields::FACTORY_ADDRESS);
        $factoryRegistrationNumber = Arr::get($params, FactoryDetailFields::FACTORY_REGISTRATION_NUMBER);
        
        $factory_registration_date_explode = explode('/',Arr::get($params,FactoryDetailFields::FACTORY_REGISTRATION_DATE));
        if(count($factory_registration_date_explode) == 3)
            $factoryRegistrationDate = Carbon::createFromDate($factory_registration_date_explode[2],$factory_registration_date_explode[1],$factory_registration_date_explode[0])->format('Y-m-d');
        else
            $factoryRegistrationDate = Arr::get($params, FactoryDetailFields::FACTORY_REGISTRATION_DATE);

        $factoryRegistrationCertificateAttestedByM = Arr::get($params, FactoryDetailFields::FACTORY_REGISTRATION_CERTIFICATE_ATTESTED_BY_MANAGER);
        $factoryRegistrationCertificateAttestedByO = Arr::get($params, FactoryDetailFields::FACTORY_REGISTRATION_CERTIFICATE_ATTESTED_BY_OFFICER);
        $factoryRegistrationCertificateAttestedByD = Arr::get($params, FactoryDetailFields::FACTORY_REGISTRATION_CERTIFICATE_ATTESTED_BY_DIRECTOR);
        $signatureOfWorker = Arr::get($params, FactoryDetailFields::SIGNATURE_OF_WORKER);
        $dateOfSubmission = Arr::get($params, FactoryDetailFields::DATE_OF_SUBMISSION);

        //Service Details
        $serialNo = Arr::get($params,ServiceDetailFields::SERIAL_NO);
        $name = Arr::get($params,ServiceDetailFields::NAME);

        $appointment_date_explode = explode('/',Arr::get($params,ServiceDetailFields::APPOINTMENT_DATE));
        if(count($appointment_date_explode) == 3)
            $appointmentDate = Carbon::createFromDate($appointment_date_explode[2],$appointment_date_explode[1],$appointment_date_explode[0])->format('Y-m-d');
        else
            $appointmentDate = Arr::get($params,ServiceDetailFields::APPOINTMENT_DATE);

        $job_leaving_date_explode = explode('/',Arr::get($params,ServiceDetailFields::JOB_LEAVING_DATE));
        if(count($job_leaving_date_explode) == 3)
            $jobLeavingDate = Carbon::createFromDate($job_leaving_date_explode[2],$job_leaving_date_explode[1],$job_leaving_date_explode[0])->format('Y-m-d');
        else
            $jobLeavingDate = Arr::get($params,ServiceDetailFields::JOB_LEAVING_DATE);

        $totalPeriod = Arr::get($params,ServiceDetailFields::TOTAL_PERIOD);

        $completion_date_explode = explode('/',Arr::get($params,ServiceDetailFields::COMPLETION_DATE));
        if(count($completion_date_explode) == 3)
            $completionDate = Carbon::createFromDate($completion_date_explode[2],$completion_date_explode[1],$completion_date_explode[0])->format('Y-m-d');
        else
            $completionDate = Arr::get($params,ServiceDetailFields::COMPLETION_DATE);


        $serviceCompletionStatus = Arr::get($params,ServiceDetailFields::SERVICE_PERIOD_COMPLETION_STATUS);
        $attestedByFactoryManager = Arr::get($params,ServiceDetailFields::ATTESTED_BY_FACTORY_MANAGER);
        $attestedByDol = Arr::get($params,ServiceDetailFields::ATTESTED_BY_DOL);
        $attestedByDirector = Arr::get($params,ServiceDetailFields::ATTESTED_BY_DIRECTOR);

        $index_id = Arr::get($params, 'index_id');
        if(!$index_id) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }

        $factoryDetail = FactoryDetail::where(FactoryDetailFields::INDEX_TABLE_ID,$index_id)->first();
        if(!$factoryDetail){
            $factoryDetail = new FactoryDetail();
        }

        $factoryDetail->index_table_id = $index_id;
        $factoryDetail->factory_name = $factoryName;
        $factoryDetail->factory_address = $factoryAddress;
        $factoryDetail->factory_registration_number = $factoryRegistrationNumber;
        $factoryDetail->factory_registration_date = $factoryRegistrationDate;
        $factoryDetail->factory_registration_certificate_attested_by_manager = $factoryRegistrationCertificateAttestedByM;
        $factoryDetail->factory_registration_certificate_attested_by_officer = $factoryRegistrationCertificateAttestedByO;
        $factoryDetail->factory_registration_certificate_attested_by_director = $factoryRegistrationCertificateAttestedByD;
        $factoryDetail->signature_of_worker = $signatureOfWorker;
        $factoryDetail->date_of_submission = $dateOfSubmission;
        $factoryDetail->save();


        if (!$index_id) {
            for ($i = 0; $i < count($serviceCompletionStatus); $i++) {
                $serviceDetail = new ServiceDetail();
                $this->fillServiceDetailDate($i, $serviceDetail, $index_id,$serialNo,$name,$appointmentDate,$jobLeavingDate,$totalPeriod,$completionDate,$serviceCompletionStatus,$attestedByFactoryManager,$attestedByDol,$attestedByDirector);
            }
        } else {
            $j = 0;
            foreach (ServiceDetail::where('index_table_id', $index_id)->get() as $serviceDetail) {
                $serviceDetailSingle = ServiceDetail::find($serviceDetail->id);
                $this->fillServiceDetailDate($j, $serviceDetailSingle, $index_id,$serialNo,$name,$appointmentDate,$jobLeavingDate,$totalPeriod,$completionDate,$serviceCompletionStatus,$attestedByFactoryManager,$attestedByDol,$attestedByDirector);
                $j++;
            }
            if ($j < count($serviceCompletionStatus)) {
                for ($k = $j; $k < count($serviceCompletionStatus); $k++) {
                    $serviceDetail = new ServiceDetail();
                    $this->fillServiceDetailDate($k, $serviceDetail, $index_id,$serialNo,$name,$appointmentDate,$jobLeavingDate,$totalPeriod,$completionDate,$serviceCompletionStatus,$attestedByFactoryManager,$attestedByDol,$attestedByDirector);
                }
            }
        }

        return response()->json([
            'message' => 'Saved Successfully',
        ], 200);
    }

    private function fillServiceDetailDate($index,$serviceObject,$index_id, $serialNo, $name, $appointmentDate, $jobLeavingDate, $totalPeriod, $completionDate, $serviceCompletionStatus, $attestedByFactoryManager, $attestedByDol, $attestedByDirector){
        $serviceObject->index_table_id = $index_id;
        $serviceObject->serial_no = isset($serialNo[$index]) ? $serialNo[$index] : null;
        $serviceObject->name = isset($name[$index]) ? $name[$index] : null;

        $Appointment = null;
        if(isset($appointmentDate[$index])){
            $AppointmentExplode = explode('/',$appointmentDate[$index]);
            if(count($AppointmentExplode) == 3)
                $Appointment = Carbon::createFromDate($AppointmentExplode[2],$AppointmentExplode[1],$AppointmentExplode[0])->format('Y-m-d');
            else
                $Appointment = $appointmentDate[$index];
        }
        $serviceObject->appointment_date = $Appointment;

        $JobLeaving = null;
        if(isset($jobLeavingDate[$index])){
            $JobLeavingExplode = explode('/',$jobLeavingDate[$index]);
            if(count($JobLeavingExplode) == 3)
                $JobLeaving = Carbon::createFromDate($JobLeavingExplode[2],$JobLeavingExplode[1],$JobLeavingExplode[0])->format('Y-m-d');
            else
                $JobLeaving = $jobLeavingDate[$index];
        }
        $serviceObject->job_leaving_date = $JobLeaving;
        $serviceObject->total_period = isset($totalPeriod[$index]) ? $totalPeriod[$index] : null;
        
        $Completion = null;
        if(isset($completionDate[$index])){
            $CompletionExplode = explode('/',$completionDate[$index]);
            if(count($CompletionExplode) == 3)
                $Completion = Carbon::createFromDate($CompletionExplode[2],$CompletionExplode[1],$CompletionExplode[0])->format('Y-m-d');
            else
                $Completion = $completionDate[$index];
        }
        $serviceObject->completion_date = $Completion;
        $serviceObject->service_completion_status = isset($serviceCompletionStatus[$index]) ? $serviceCompletionStatus[$index] : null;
        $serviceObject->attested_by_factory_manager = isset($attestedByFactoryManager[$index]) ? $attestedByFactoryManager[$index] : null;
        $serviceObject->attested_by_dol = isset($attestedByDol[$index]) ? $attestedByDol[$index] : null;
        $serviceObject->attested_by_director = isset($attestedByDirector[$index]) ? $attestedByDirector[$index] : null;
        $serviceObject->save();
    }

    public function deleteServiceDetail(Request $request){
        $params = $request->all();
        $serialNo = Arr::get($params,ServiceDetailFields::SERIAL_NO);
        $indexId = Arr::get($params,'index_id');
        $object = ServiceDetail::where('serial_no',$serialNo)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
