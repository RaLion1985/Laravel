<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="news";
    protected $fillable =['img','title','news'];
    public function getAll(): array
    {
        $query=\DB::select("Select id,Categories,Category_description from categories");
        return $query;
    }

    public function getById(int $id)
    {
        return \DB::selectOne("Select id,Categories,Category_description from categories where id = :id, ['id'=> $id]");
    }
}
