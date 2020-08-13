<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
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
