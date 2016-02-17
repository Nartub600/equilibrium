<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Tip extends Model {

    protected $table = 'tips';

    protected $fillable = ['content', 'start', 'end'];

    // protected $dates = ['start', 'end'];

    public function getStartAttribute($value) {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public function getEndAttribute($value) {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

}
