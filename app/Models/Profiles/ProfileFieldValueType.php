<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profiles\ProfileField;

class ProfileFieldValueType extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function profile_field()
    {
        return $this->hasOne(ProfileField::class);
    }

}
