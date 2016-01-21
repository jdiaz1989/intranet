<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Access extends Model
{


	protected $table = 'access';
    protected $fillable = ['server','port','username','password','url','type', 'client_id'];

     public function client()
    {
        return $this->belongsTo('App\Client');
    }




}
