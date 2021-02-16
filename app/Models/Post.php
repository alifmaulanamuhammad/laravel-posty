<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\like;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body'];

    public  function user()
    {
        return $this->BelongsTo(User::class);
    }
    public  function likes()
    {
        return $this->HasMany(like::class);
    }
    public function LikedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
