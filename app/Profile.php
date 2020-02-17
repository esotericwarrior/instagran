<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Function that establishes 1-to-1 relationship of profile to user.
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
