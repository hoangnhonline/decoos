<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';

	 /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name_vi',
        'name_en',
        'alias_vi',
        'alias_en',
        'slug_vi',
        'slug_en',
        'description_vi',
        'description_en',
        'content_vi',
        'thumbnail_id',
        'content_en',
        'loai_id',
        'cate_id',
        'is_hot',
        'is_sale',
        'price',
        'price_sale',
        'views',
        'display_order',
        'sale_percent',
        'status',
        'meta_id',
        'created_user',
        'updated_user'
        ];
    
}
