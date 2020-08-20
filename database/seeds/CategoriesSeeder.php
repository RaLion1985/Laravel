<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }
    private function getData():array
    {
        $faker= Faker\Factory::create('ru_RU');
        $data=[];
        for ($i=0;$i<10;$i++)
        {
            $data[]=
                [
                    'Categories' =>$faker->sentence(mt_rand(6,10)),
                     'Category_description'=>$faker->realText(mt_rand(30,100))
                ];

        }
        return $data;
    }
}
