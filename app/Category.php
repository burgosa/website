<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $connection = 'mysql2';
	protected $table = 'categories';

	public function subcategories()
    {   
        return $this->hasMany('App\Category');
    }

    public function scopeTop($query)
    {
        return $query->where('category_id', '=', 1);
    }

	

}
