<?php

namespace App\Http\Controllers;

use App\Fields\Page01Fields;
use App\Page01;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Page01Controller extends Controller
{
    public function post(Request $request){
        $params = $request->all();
        $session = Arr::get($params,Page01Fields::SESSION);
        $district = Arr::get($params,Page01Fields::DISTRICT);
        $fileReceivedNumber = Arr::get($params,Page01Fields::FILE_RECEIVED_NUMBER);
        $receivingDate = Arr::get($params,Page01Fields::RECEIVING_DATE);
        $fileReceiptVoucherNumber = Arr::get($params,Page01Fields::FILE_RECEIPT_VOUCHER_NUMBER);
        $fileReceiptVoucherDate = Arr::get($params,Page01Fields::FILE_RECEIPT_VOUCHER_DATE);
        $freshFileSubmissionInPwwbNumber = Arr::get($params,Page01Fields::FRESH_FILE_SUBMISSION_IN_PWWB_NUMBER);
        $priorityOfSubmission = Arr::get($params,Page01Fields::PRIORITY_OF_SUBMISSION);
        $pwwbDiaryNumber = Arr::get($params,Page01Fields::PWWB_DIARY_NUMBER);
        $pwwbDiaryDate = Arr::get($params,Page01Fields::PWWB_DIARY_DATE);
        $pendingFilesWithRemarks = Arr::get($params,Page01Fields::PENDING_FILES_WITH_REMARKS);

        $page01 = new Page01();
        $page01->session = $session;
        $page01->district = $district;
        $page01->file_received_number = $fileReceivedNumber;
        $page01->receiving_date = $receivingDate;
        $page01->file_receipt_voucher_number = $fileReceiptVoucherNumber;
        $page01->file_receipt_voucher_date = $fileReceiptVoucherDate;
        $page01->fresh_file_submission_in_pwwb_number = $freshFileSubmissionInPwwbNumber;
        $page01->priority_of_submission = $priorityOfSubmission;
        $page01->pwwb_diary_number = $pwwbDiaryNumber;
        $page01->pwwb_diary_date = $pwwbDiaryDate;
        $page01->pending_files_with_remarks = $pendingFilesWithRemarks;
        $page01->save();

        return response()->json([
            'message' => 'data saved successfully',
            'page01' => $page01
        ],200);
    }
}
