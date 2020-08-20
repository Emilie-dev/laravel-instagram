<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {

        $imagePath = ($this->image) ?  $this->image : 'profile/tCufCVt08u794Kidx493y7ipsicd7ghvBYlGN1Yt.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {

        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
