<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('news')->insert($this->getData());
    }
    private function getData():array
    {
        $faker= Faker\Factory::create('ru_RU');
        $data=[];
        for ($i=0;$i<10;$i++)
        {
            $data[]=
                [
                    'title' =>$faker->sentence(mt_rand(6,10)),
                    'news'=>$faker->realText(mt_rand(30,100))
                ];

        }
        return $data;
    }
}
