<?php

namespace App\Models;

use App\Enums\FileTypeEnum;
use App\Enums\ProductStatusEnum;
use App\Enums\ProductTypeEnum;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    /** @use HasFactory<UserFactory> */
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

    protected $casts = [
        'type' => ProductTypeEnum::class,
        'status' => ProductStatusEnum::class,
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
     return $this->belongsTo(Category::class);
    }
}
