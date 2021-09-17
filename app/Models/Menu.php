<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function hasParent()
    {
        return $this->hasOne(Menu::class, 'parent', 'id');
    }
    public function submenu()
    {
        return $this->hasMany(Menu::class, 'parent');
    }
}
