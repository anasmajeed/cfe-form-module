<?php

namespace App\Http\Controllers;

use App\Fields\IndexTableFields;
use App\IndexTable;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexTableController extends Controller
{
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
//
//        $page01 = new IndexTable();
//        $page01->session = $session;
//        $page01->district = $district;
//        $page01->file_received_number = $fileReceivedNumber;
//        $page01->receiving_date = $receivingDate;
//        $page01->file_receipt_voucher_number = $fileReceiptVoucherNumber;
//        $page01->file_receipt_voucher_date = $fileReceiptVoucherDate;
//        $page01->fresh_file_submission_in_pwwb_number = $freshFileSubmissionInPwwbNumber;
//        $page01->priority_of_submission = $priorityOfSubmission;
//        $page01->pwwb_diary_number = $pwwbDiaryNumber;
//        $page01->pwwb_diary_date = $pwwbDiaryDate;
//        $page01->pending_files_with_remarks = $pendingFilesWithRemarks;
//        $page01->save();

        return response()->json([
            'message' => 'data saved successfully',
//            'object' => $page01
        ],200);
    }
}
