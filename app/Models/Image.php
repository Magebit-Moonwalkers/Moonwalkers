<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * @var array
     */
    protected $fillable = [
        'image_id', 'src', 'product_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
