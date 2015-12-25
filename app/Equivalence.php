<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equivalence extends Model {

    protected $table = 'equivalences';

    protected $fillable = ['product_id', 'name', 'amount'];

}
