<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function access()
    {
        return $this->belongsToMany(Menu::class);
    }
}
