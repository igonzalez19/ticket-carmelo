<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    
    protected $table = 'enterprise';
    
    protected $fillable = ['name', 'phone', 'contactperson', 'address', 'taxnumber'];
    
    public function tickets(){
        return $this->hasMany('App\Models\Ticekt');
    }
}
