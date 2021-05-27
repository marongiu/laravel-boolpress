<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = ['sport','web','cucina','amore','musica'];

      foreach ($categories as $category) {
        $category_obj = new Category();
        $category->name = $category;
        $category->slug = Str::slug($category, '-');

        $category->save();
      }
    }
}
