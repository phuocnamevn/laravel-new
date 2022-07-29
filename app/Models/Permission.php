<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionGroup;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $fillable = ['name', 'key', 'permission_group_id'];

    // public function permissiongroup()
    // {
    //     return $this->belongsTo(PermissionGroups::class, 'permission_group_id', 'id');
    // }
}
