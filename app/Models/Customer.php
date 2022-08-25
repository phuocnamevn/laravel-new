<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', "sex", "address", "birthday", "phone", "email", "type", "id_user_create"];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'id_user_create', 'id');
    }
}
