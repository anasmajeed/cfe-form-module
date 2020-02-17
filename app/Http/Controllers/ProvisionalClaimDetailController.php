<?php

namespace App\Http\Controllers;

use App\Fields\ProvisionalClaimDetailFields;
use App\ProvisionalClaimDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProvisionalClaimDetailController extends Controller
{
    public function post(Request $request){
        $params = $request->all();

        $indexTableId = Arr::get($params,'index_id');
        $status = Arr::get($params,ProvisionalClaimDetailFields::STATUS);
        $provisional_letter_date = Arr::get($params,ProvisionalClaimDetailFields::PROVISIONAL_LETTER_DATE);
        $claim_due = Arr::get($params,ProvisionalClaimDetailFields::CLAIM_DUE);
        $claim_status = Arr::get($params,ProvisionalClaimDetailFields::CLAIM_STATUS);
        $claim_received = Arr::get($params,ProvisionalClaimDetailFields::CLAIM_RECEIVED);
        $claim_date = Arr::get($params,ProvisionalClaimDetailFields::CLAIM_DATE);
        $reason = Arr::get($params,ProvisionalClaimDetailFields::REASON);
        $cfe_fee = Arr::get($params,ProvisionalClaimDetailFields::CFE_FEE);
        $recovery_from_student = Arr::get($params,ProvisionalClaimDetailFields::RECOVERY_FROM_STUDENT);

        if(!$indexTableId) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }
        else{
            $object = ProvisionalClaimDetail::where(ProvisionalClaimDetailFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$object){
                $object = new ProvisionalClaimDetail();
            }
        }

        $object->index_table_id = $indexTableId;
        $object->status = $status;
        $object->provisional_letter_date = $provisional_letter_date;
        $object->claim_due = $claim_due;
        $object->claim_status = $claim_status;
        $object->claim_received = $claim_received;
        $object->claim_date = $claim_date;
        $object->reason = $reason;
        $object->cfe_fee = $cfe_fee;
        $object->recovery_from_student = $recovery_from_student;
        $object->save();


        return response()->json([
            'message' => 'Saved Successfully',
            'object' => $object
        ],200);
    }
}
