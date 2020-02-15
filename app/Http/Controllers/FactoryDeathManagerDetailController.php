<?php

namespace App\Http\Controllers;

use App\FactoryDeathManagerDetail;
use App\Fields\FactoryDeathManagerFields;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FactoryDeathManagerDetailController extends Controller
{
    public function post(Request $request){
        $params = $request->all();

        $indexTableId = Arr::get($params,'index_id');
        $deathDateOfWorker = Arr::get($params,FactoryDeathManagerFields::DEATH_DATE_OF_WORKER);
        $deathGrantClaimed = Arr::get($params,FactoryDeathManagerFields::DEATH_GRANT_CLAIMED);
        $retirementDateOfWorker = Arr::get($params,FactoryDeathManagerFields::RETIREMENT_DATE_OF_WORKER);
        $factoryManagerName = Arr::get($params,FactoryDeathManagerFields::FACTORY_MANAGER_NAME);
        $factoryManagerDesignation = Arr::get($params,FactoryDeathManagerFields::FACTORY_MANAGER_DESIGNATION);
        $factoryManagerContactNo = Arr::get($params,FactoryDeathManagerFields::FACTORY_MANAGER_CONTACT_NO);
        $factoryManagerEmail = Arr::get($params,FactoryDeathManagerFields::FACTORY_MANAGER_EMAIL);
        $formAttestedByManagerSign = Arr::get($params,FactoryDeathManagerFields::FORM_ATTESTED_BY_MANAGER_SIGN);
        $formAttestedByManagerStamp = Arr::get($params,FactoryDeathManagerFields::FORM_ATTESTED_BY_MANAGER_STAMP);
        $formAttestedByDOLSign = Arr::get($params,FactoryDeathManagerFields::FORM_ATTESTED_BY_DOL_SIGN);
        $formAttestedByDOLStamp = Arr::get($params,FactoryDeathManagerFields::FORM_ATTESTED_BY_DOL_STAMP);

        if(!$indexTableId) {
            return response()->json([
                'message' => 'Index Table Id Not Found'
            ],500);
        }
        else{
            $object = FactoryDeathManagerDetail::where(FactoryDeathManagerFields::INDEX_TABLE_ID,$indexTableId)->first();
            if(!$object){
                $object = new FactoryDeathManagerDetail();
            }
        }

        $object->index_table_id = $indexTableId;
        $object->death_date_of_worker = $deathDateOfWorker;
        $object->death_grant_claimed = $deathGrantClaimed;
        $object->retirement_date_of_worker = $retirementDateOfWorker;
        $object->factory_manager_name = $factoryManagerName;
        $object->factory_manager_designation = $factoryManagerDesignation;
        $object->factory_manager_contact_no = $factoryManagerContactNo;
        $object->factory_manager_email = $factoryManagerEmail;
        $object->form_attested_by_manager_sign = $formAttestedByManagerSign;
        $object->form_attested_by_manager_stamp = $formAttestedByManagerStamp;
        $object->form_attested_by_dol_sign = $formAttestedByDOLSign;
        $object->form_attested_by_dol_stamp = $formAttestedByDOLStamp;
        $object->save();


        return response()->json([
            'message' => 'Saved Successfully',
            'object' => $object
        ],200);
    }
}
