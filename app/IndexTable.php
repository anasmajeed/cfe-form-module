<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexTable extends Model
{
    public function workerFamilyMemberDetail(){
        return $this->hasMany(WorkerFamilyMemberDetail::class);
    }

    public function workerPersonalDetail(){
        return $this->hasOne(WorkerPersonalDetail::class);
    }

    public function workerBankSecurityDetail(){
        return $this->hasOne(WorkerBankSecurityDetail::class);
    }

    public function serviceDetail(){
        return $this->hasMany(ServiceDetail::class);
    }

    public function factoryDetail(){
        return $this->hasOne(FactoryDetail::class);
    }

    public function factoryDeathManagerDetail(){
        return $this->hasOne(FactoryDeathManagerDetail::class);
    }

    public function studentPersonalDetail(){
        return $this->hasOne(StudentPersonalDetail::class);
    }

    public function educationalWingCfe(){
        return $this->hasOne(EducationalWingCfe::class);
    }

    public function afDetail(){
        return $this->hasOne(AfDetail::class);
    }

    public function biseDetail(){
        return $this->hasOne(BiseDetail::class);
    }

    public function imsDetail(){
        return $this->hasOne(ImsDetail::class);
    }

    public function vtiDetail(){
        return $this->hasOne(VtiDetail::class);
    }

    public function dualCourseDetail(){
        return $this->hasOne(DualCourseDetail::class);
    }

    public function transportHotelDetail(){
        return $this->hasOne(TransportHostelDetail::class);
    }

    public function documentAttachmentDetail(){
        return $this->hasOne(DocumentAttachmentDetail::class);
    }

    public function provisionalClaimDetail(){
        return $this->hasOne(ProvisionalClaimDetail::class);
    }

    public function firstAnnualDetail(){
        return $this->hasOne(FirstAnnualDetail::class);
    }
}
