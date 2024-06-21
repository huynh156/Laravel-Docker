<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'Products';

    protected $fillable = ['ProductName', 'Brand','Category' ,'Price', 'Quantity','Description','Image'];

    protected static function boot()
    {
        parent::boot();

        // Tự động gán GUID khi tạo model mới
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
