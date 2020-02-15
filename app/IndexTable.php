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
}
