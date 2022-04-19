<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Events\EventType;

class Event extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'event_type_id',
        'profile_id',
        'image',
        'date',
    ];

    public function event_type()
    {
        return $this->hasOne(EventType::class);
    }

    public function profile()
    {
        return $this->hasOne(Profle::class);
    }

}
