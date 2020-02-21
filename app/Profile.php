<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = []; // Disable the mass assignment rule since we're already validating in the Profiles Controller.

    // Function that establishes 1-to-1 relationship of profile to user.
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
