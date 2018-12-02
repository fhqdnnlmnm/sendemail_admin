<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $parent_categories = factory(App\Models\Category::class,'parent')->times(3)->make();
        Category::insert($parent_categories->toArray());
        $children_categories=factory(App\Models\Category::class,'children')->times(3)->make();
        Category::insert($children_categories->toArray());
    }
}
