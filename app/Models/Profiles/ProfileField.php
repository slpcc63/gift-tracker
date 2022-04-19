<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Profiles\ProfileFieldValueType;

class ProfileField extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'field_name',
        'field_value_type',
    ];

    public function profile_field_value_type()
    {
        return $this->belongsTo(ProfileFieldValueType::class);
    }

}
