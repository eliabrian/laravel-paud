<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function submenus()
    {
        return $this->hasMany(Submenu::class);
    }

    public function accesses()
    {
        return $this->belongsToMany(Role::class)->withPivot('id');
    }
}
