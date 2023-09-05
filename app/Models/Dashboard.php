<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage () {
        $imagePath = ($this->image) ? '/storage/' . $this->image : 'https://ui-avatars.com';
        return $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
