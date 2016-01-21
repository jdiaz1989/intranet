<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model {

    protected $table = 'equipments';
    protected $fillable = ['brand', 'model', 'owner', 'first_name', 'last_name', 'status', 'deliver_date', 'serial_number'];

}
