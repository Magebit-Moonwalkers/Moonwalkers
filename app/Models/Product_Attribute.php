<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Attribute extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_attributes';

    /**
     * @var array
     */
    protected $fillable = [
        'product_attribute_id', 'product_id', 'attribute_id', 'attribute_value',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attributes()
    {
        return $this->belongsTo(Attribute::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
