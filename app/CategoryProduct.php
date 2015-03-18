<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model {	

	protected $connection = 'mysql2';

	protected $table = 'categories_products';
    
    protected $fillable = array('category_id','product_id');

}
