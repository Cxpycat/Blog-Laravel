<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'comments';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getUserNameTmpAttribute()
    {
        return User::all()->where('id', '=', $this->user_id)->first();
    }
    public function getDateAsCarbonAttribute()
    {
        return Carbon::parse($this->created_at);
    }
}
