<?php

namespace App;

use App\Fields\FourthSemesterResultStatusDetailFields;
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

    public function firstAnnualResultStatusDetail(){
        return $this->hasMany(FirstAnnualResultStatusDetail::class);
    }

    public function secondAnnualPartDetail(){
        return $this->hasOne(SecondAnnualPartDetail::class);
    }

    public function secondAnnualPartResultStatusDetail(){
        return $this->hasMany(SecondAnnualPartResultStatusDetail::class);
    }

    public function firstSemesterDetail(){
        return $this->hasOne(FirstSemesterDetail::class);
    }

    public function firstSemesterResultStatusDetail(){
        return $this->hasMany(FirstSemesterResultStatusDetail::class);
    }

    public function secondSemesterDetail(){
        return $this->hasOne(SecondSemesterDetail::class);
    }

    public function secondSemesterResultStatusDetail(){
        return $this->hasMany(SecondSemesterResultStatusDetail::class);
    }

    public function thirdSemesterDetail(){
        return $this->hasOne(ThirdSemesterDetail::class);
    }

    public function thirdSemesterResultStatusDetail(){
        return $this->hasMany(ThirdSemesterResultStatusDetail::class);
    }

    public function fourthSemesterDetail(){
        return $this->hasOne(FourthSemesterDetail::class);
    }

    public function fourthSemesterResultStatusDetail(){
        return $this->hasMany(FourthSemesterResultStatusDetail::class);
    }

    public function fifthSemesterDetail(){
        return $this->hasOne(FifthSemesterDetail::class);
    }

    public function fifthSemesterResultStatusDetail(){
        return $this->hasMany(FifthSemesterResultStatusDetail::class);
    }

    public function sixthSemesterDetail(){
        return $this->hasOne(SixthSemesterDetail::class);
    }

    public function sixthSemesterResultStatusDetail(){
        return $this->hasMany(SixthSemesterResultStatusDetail::class);
    }

    public function seventhSemesterDetail(){
        return $this->hasOne(SeventhSemesterDetail::class);
    }

    public function seventhSemesterResultStatusDetail(){
        return $this->hasMany(SeventhSemesterResultStatusDetail::class);
    }

    public function eighthSemesterDetail(){
        return $this->hasOne(EighthSemesterDetail::class);
    }

    public function eighthSemesterResultStatusDetail(){
        return $this->hasMany(EighthSemesterResultStatusDetail::class);
    }
}
