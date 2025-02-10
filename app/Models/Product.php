<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'type',
        'status',
        'creator_user_id',
        'acceptor_user_id',
        'category_id',
        'reject_reason',
        'data',
        'accpeted_at',
    ];

    public function category()
    {
     return $this->belongsTo(Category::class);
    }
}
