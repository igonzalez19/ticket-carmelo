<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    
    protected $table = 'ticket';
    
    protected $fillable = ['identerprise', 'name', 'price', 'initialdate', 'finaldate', 'initialtime', 'finaltime', 'active', 'description'];
    
    protected $hidden = ['profit'];
    
    //protected $guarded = ['identerprise'];
    
    protected $attributes = ['prof' => 15.0];
    
    public function enterprise(){
        return $this->belongsTo('App\Models\Enterprise', 'identerprise');
    }
}
