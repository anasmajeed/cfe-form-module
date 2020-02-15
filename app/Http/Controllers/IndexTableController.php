<?php

namespace App\Http\Controllers;

use App\Fields\IndexTableFields;
use App\Fields\WorkerFamilyMemberDetailFields;
use App\IndexTable;
use App\WorkerFamilyMemberDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexTableController extends Controller
{

    public function loadMainPage(){
        $sessionDates = ['2019-2021','2021-2023','2023-2025'];
        $districtNames = ['RahimYarKhan','Lahore','Attock','Bahawalpur'];
        return view('welcome',['data' => null,'sessionDates' => $sessionDates,'districtNames' => $districtNames]);
    }

    public function post(Request $request){
        $params = $request->all();

        $session = Arr::get($params,IndexTableFields::SESSION);
        $district = Arr::get($params,IndexTableFields::DISTRICT);
        $fileReceivedNumber = 'R-'.str_replace('R-','',Arr::get($params,IndexTableFields::FILE_RECEIVED_NUMBER));
        $receivingDate = Arr::get($params,IndexTableFields::RECEIVING_DATE);
        $fileReceiptVoucherNumber = Arr::get($params,IndexTableFields::FILE_RECEIPT_VOUCHER_NUMBER);
        $fileReceiptVoucherDate = Arr::get($params,IndexTableFields::FILE_RECEIPT_VOUCHER_DATE);
        $freshFileSubmissionInPwwbNumber = 'S-'.str_replace('S-','',Arr::get($params,IndexTableFields::FRESH_FILE_SUBMISSION_IN_PWWB_NUMBER));
        $priorityOfSubmission = Arr::get($params,IndexTableFields::PRIORITY_OF_SUBMISSION);
        $pwwbDiaryNumber = Arr::get($params,IndexTableFields::PWWB_DIARY_NUMBER);
        $pwwbDiaryDate = Arr::get($params,IndexTableFields::PWWB_DIARY_DATE);
        $pendingFilesWithRemarks = Arr::get($params,IndexTableFields::PENDING_FILES_WITH_REMARKS);

        //Worker Family Details
        $serialNo = Arr::get($params,WorkerFamilyMemberDetailFields::SERIAL_NO);
        $workerName = Arr::get($params,WorkerFamilyMemberDetailFields::WORKER_NAME);
        $workerCNIC = Arr::get($params,WorkerFamilyMemberDetailFields::WORKER_CNIC);
        $studentName = Arr::get($params,WorkerFamilyMemberDetailFields::STUDENT_NAME);
        $passedDegree = Arr::get($params,WorkerFamilyMemberDetailFields::PASSED_DEGREE);
        $potentialDegree = Arr::get($params,WorkerFamilyMemberDetailFields::POTENTIAL_DEGREE);
        $followUp = Arr::get($params,WorkerFamilyMemberDetailFields::FOLLOW_UP);
        $fileReceivedStatus = Arr::get($params,WorkerFamilyMemberDetailFields::FILE_RECEIVED_STATUS);

        $index_id = Arr::get($params,'index_id');

        if(!$index_id) {
            $index_table = new IndexTable();
        }
        else{
            $index_table = IndexTable::find($index_id);
        }

        $index_table->session = $session;
        $index_table->district = $district;
        $index_table->file_received_number = $fileReceivedNumber;
        $index_table->receiving_date = $receivingDate;
        $index_table->file_receipt_voucher_number = $fileReceiptVoucherNumber;
        $index_table->file_receipt_voucher_date = $fileReceiptVoucherDate;
        $index_table->fresh_file_submission_in_pwwb_number = $freshFileSubmissionInPwwbNumber;
        $index_table->priority_of_submission = $priorityOfSubmission;
        $index_table->pwwb_diary_number = $pwwbDiaryNumber;
        $index_table->pwwb_diary_date = $pwwbDiaryDate;
        $index_table->pending_files_with_remarks = $pendingFilesWithRemarks;
        $index_table->save();

        if(!$index_id){
            for($i = 0 ; $i < count($fileReceivedStatus); $i++){
                $workerFamilyMemberDetail = new WorkerFamilyMemberDetail();
                $this->fillWorkerFamilyDetailData($i,$workerFamilyMemberDetail,$serialNo,$index_table,$workerName,$workerCNIC,$passedDegree,$potentialDegree,$studentName,$fileReceivedStatus,$followUp);
            }
        }
        else{
            $j = 0;
            foreach(WorkerFamilyMemberDetail::where('index_table_id',$index_table->id)->get() as $workerFamilyMemberDetail){
                $workerFamilyMemberDetailSingle = WorkerFamilyMemberDetail::find($workerFamilyMemberDetail->id);
                $this->fillWorkerFamilyDetailData($j,$workerFamilyMemberDetailSingle,$serialNo,$index_table,$workerName,$workerCNIC,$passedDegree,$potentialDegree,$studentName,$fileReceivedStatus,$followUp);
                $j++;
            }
            if($j < count($fileReceivedStatus)){
                for($k = $j ; $k < count($fileReceivedStatus); $k++){
                    $workerFamilyMemberDetail = new WorkerFamilyMemberDetail();
                    $this->fillWorkerFamilyDetailData($k,$workerFamilyMemberDetail,$serialNo,$index_table,$workerName,$workerCNIC,$passedDegree,$potentialDegree,$studentName,$fileReceivedStatus,$followUp);
                }
            }
        }

        return response()->json([
            'indexObject' => $index_table,
        ],200);
    }

    private function fillWorkerFamilyDetailData($index,$workerObject,$serialNo,$index_table,$workerName,$workerCNIC,$passedDegree,$potentialDegree,$studentName,$fileReceivedStatus,$followUp){
        $workerObject->serial_no = isset($serialNo[$index]) ? $serialNo[$index] : null;
        $workerObject->index_table_id = $index_table->id;
        $workerObject->worker_name = isset($workerName[$index]) ? $workerName[$index] : null;
        $workerObject->worker_cnic = isset($workerCNIC[$index]) ? $workerCNIC[$index] : null;
        $workerObject->passed_degree = isset($passedDegree[$index]) ? $passedDegree[$index] : null;
        $workerObject->potential_degree = isset($potentialDegree[$index]) ? $potentialDegree[$index] : null;
        $workerObject->student_name = isset($studentName[$index]) ? $studentName[$index] : null;
        $workerObject->file_received_status = isset($fileReceivedStatus[$index]) ? $fileReceivedStatus[$index] : null;
        $workerObject->follow_up = isset($followUp[$index]) ? $followUp[$index] : null;
        $workerObject->save();
    }

    public function deleteWorkerDetail(Request $request){
        $params = $request->all();
        $serialNo = Arr::get($params,WorkerFamilyMemberDetailFields::SERIAL_NO);
        $indexId = Arr::get($params,'index_id');
        $object = WorkerFamilyMemberDetail::where('serial_no',$serialNo)->where('index_table_id',$indexId);
        if($object->first()){
            $object->delete();
        }
        return response()->json([
            'message' => 'deleted'
        ],200);
    }
}
