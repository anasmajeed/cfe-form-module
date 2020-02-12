<?php

namespace App\Http\Controllers;

use App\Fields\IndexTableFields;
use App\IndexTable;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexTableController extends Controller
{

    public function loadMainPage(){
        $sessionDates = ['2019-2021','2021-2023','2023-2025'];
        $districtNames = ['RahimYarKhan','Lahore','Attock','Bahawalpur'];
        return view('welcome',['sessionDates' => $sessionDates,'districtNames' => $districtNames]);
    }

    public function post(Request $request){
        $params = $request->all();
        $session = Arr::get($params,IndexTableFields::SESSION);
        $district = Arr::get($params,IndexTableFields::DISTRICT);
        $fileReceivedNumber = 'R-'.Arr::get($params,IndexTableFields::FILE_RECEIVED_NUMBER);
        $receivingDate = Arr::get($params,IndexTableFields::RECEIVING_DATE);
        $fileReceiptVoucherNumber = Arr::get($params,IndexTableFields::FILE_RECEIPT_VOUCHER_NUMBER);
        $fileReceiptVoucherDate = Arr::get($params,IndexTableFields::FILE_RECEIPT_VOUCHER_DATE);
        $freshFileSubmissionInPwwbNumber = 'S-'.Arr::get($params,IndexTableFields::FRESH_FILE_SUBMISSION_IN_PWWB_NUMBER);
        $priorityOfSubmission = Arr::get($params,IndexTableFields::PRIORITY_OF_SUBMISSION);
        $pwwbDiaryNumber = Arr::get($params,IndexTableFields::PWWB_DIARY_NUMBER);
        $pwwbDiaryDate = Arr::get($params,IndexTableFields::PWWB_DIARY_DATE);
        $pendingFilesWithRemarks = Arr::get($params,IndexTableFields::PENDING_FILES_WITH_REMARKS);

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

        return response()->json([
            'indexObject' => $index_table
        ],200);
    }
}
