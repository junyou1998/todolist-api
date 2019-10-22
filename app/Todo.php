<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['job_name','start_time','end_time','job_label','job_status'];
}
