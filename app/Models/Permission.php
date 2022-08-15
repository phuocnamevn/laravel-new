<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $fillable = ['name', 'key', 'permission_group_id'];

    public function Permissiongroup()
    {
        return $this->belongsTo(PermissionGroup::class, 'permission_group_id', 'id');
    }
}
