<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentAttachmentDetail extends Model
{
    public function indexTable(){
        return $this->belongsTo(IndexTable::class);
    }
}
