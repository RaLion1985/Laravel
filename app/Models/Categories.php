<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table="categories";
    protected $primaryKey="id";
    protected $fillable=['Category','Category_description'];
    public function news(){
        return $this->belongsToMany((News::class),'categories_has_news_table','category_id','news_id');
    }
    /*public function getAll()
    {
        //$query=\DB::select("Select id,Category,Category_description from categories");
        return Categories::all();
    }*/

    public function getById(int $id)
    {
      //return \DB::selectOne("Select id,Category,Category_description from categories where id = :id, ['id'=> $id]");
        return Categories::find($id);
    }
}
