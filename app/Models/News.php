<?php

namespace App\Mpdels;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="news";
    public function getAll(): array
    {
        $query=\DB::select("Select id,Category,Category_description from categories");
        return $query;
    }

    public function getById(int $id)
    {
        return \DB::selectOne("Select id,Category,Category_description from categories where id = :id, ['id'=> $id]");
    }
}
