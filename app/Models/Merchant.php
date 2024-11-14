<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'contact', 'description'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
