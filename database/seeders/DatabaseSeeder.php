<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MainCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $categories = [
           
       [
        
        'name' => 'لماذا',
        'parent_id' => 0,

       ],
       [
        'name' => 'نبي الاسلام',
        'parent_id' => 0,
   
       ],
       [
        'name' => 'كتاب المسلمين',
        'parent_id' => 0,

       ],
       [
        'name' => 'العقيدة الاسلامية',
        'parent_id' => 0,
       ],
       [
        'name' => 'الاسلام حياة',
        'parent_id' => 0,
       ],
       [
        'name' => 'ريحانة حياة',
        'parent_id' => 0,
       ],
       [
        'name' => 'رؤى ومقالات',
        'parent_id' => 0,
       ],
       [
        'name' => 'فنون اسلامية',
        'parent_id' => 0,
       ],
       [
        'name' => 'ادب اسلامي',
        'parent_id' => 0,
       ],
       [
        'name' => 'الحقوق في الاسلام',
        'parent_id' => 0,
       ],
       [
        'name' => 'النبي محمد',
        'parent_id' => 60,
       ],
       [
        'name' => 'ديموغرافيا الاسلام',
        'parent_id' => 0,
       ],
       [
        'name' => 'اهل البيت',
        'parent_id' => 60,
       ],
       [
        'name' => 'شعائر',
        'parent_id' => 0,
       ],
       [
        'name' => 'قواعد السلوك',
        'parent_id' => 0,
       ],
       [
        'name' => 'اخلاقيات الاسلام',
        'parent_id' => 0,
       ],
       [
        'name' => 'منبر',
        'parent_id' => 0,
       ],
       [
        'name' => 'استطلاعات',
        'parent_id' => 0,
       ],
       [
        'name' => 'مكتبة الصور',
        'parent_id' => 62,
       ],
       [
        'name' => 'ابواب وتصنيفات الكتب',
        'parent_id' => 0,
       ],
       [
        'name' => 'سياسة',
        'parent_id' => 20,
       ],
       [
        'name' => 'قانون',
        'parent_id' => 20,
       ],
       [
        'name' => 'تاريخ',
        'parent_id' => 20,
       ],
       [
        'name' => 'علوم',
        'parent_id' => 20,
       ],
       [
        'name' => 'السياسة في الاسلام',
        'parent_id' => 5,
       ],
       [
        'name' => 'الاقتصاد الاسلامي',
        'parent_id' => 5,
       ],
       [
        'name' => 'احكام مجتمعية',
        'parent_id' => 5,
       ],
       [
        'name' => 'تاريخ الاسلام',
        'parent_id' => 5,
       ],
       [
        'name' => 'لماذا الدين؟',
        'parent_id' => 1,
       ],
       [
        'name' => 'لماذا الدين الاسلامي',
        'parent_id' => 1,
       ],
       [
        'name' => 'محمد قبل النبوة',
        'parent_id' => 2,
       ],
       [
        'name' => 'محمد قائدا',
        'parent_id' => 2,
       ],
       [
        'name' => 'محمد نبيا',
        'parent_id' => 2,
       ],
       [
        'name' => 'محمد شهيدا',
        'parent_id' => 2,
       ],
       [
        'name' => 'قادة محمديون',
        'parent_id' => 2,
       ],
       [
        'name' => 'النص القراني',
        'parent_id' => 3,
       ],
       [
        'name' => 'خرافة تحريف القران',
        'parent_id' => 3,
       ],
       [
        'name' => 'ترجمان القران',
        'parent_id' => 3,
       ],
       [
        'name' => 'قصص قرانية',
        'parent_id' => 3,
       ],
       [
        'name' => 'معاجز قرانية',
        'parent_id' => 3,
       ],
       [
        'name' => 'مقالات في القران الكريم',
        'parent_id' => 3,
       ],
       [
        'name' => 'التوحيد',
        'parent_id' => 4,
       ],
       [
        'name' => 'العدل',
        'parent_id' => 4,
       ],
       [
        'name' => 'النبوة',
        'parent_id' => 4,
       ],
       [
        'name' => 'الامامة',
        'parent_id' => 4,
       ],
       [
        'name' => 'العلاقة مع الله سبحانه وتعالى',
        'parent_id' => 6,
       ],
       [
        'name' => 'العلاقة مع النفس (الرياضة النفسية)',
        'parent_id' => 6,
       ],
       [
        'name' => 'العلاقة مع الاخر (الامر بالمعروف والنهي عن المنكر)',
        'parent_id' => 6,
       ],
       [
        'name' => 'تجديد العهد مع الله (الحج)',
        'parent_id' => 6,
       ],
       [
        'name' => 'التكافل الاجتماعي (حق الفقراء من اموال الاغنياء)',
        'parent_id' => 6,
       ],
       [
        'name' => 'الموالاة البراة',
        'parent_id' => 6,
       ],
       [
        'name' => 'حقوق الانسان',
        'parent_id' => 10,
       ],
       [
        'name' => 'حقوق الحيوان',
        'parent_id' => 10,
       ],
       [
        'name' => 'حقوق البيئة والطبيعة',
        'parent_id' => 10,
       ],
       [
        'name' => 'مقالات',
        'parent_id' => 7,
       ],
       [
        'name' => 'دراسات',
        'parent_id' => 7,
       ],
       [
        'name' => 'افكار ونظريات',
        'parent_id' => 7,
       ],
       [
        'name' => 'اطلس اسلامي',
        'parent_id' => 9,
       ],
       [
        'name' => 'شواهد اسلامية',
        'parent_id' => 9,
       ],
       [
        'name' => 'شخصيات اسلامية',
        'parent_id' => 9,
       ],
       [
        'name' => 'مكتبة الفيديو',
        'parent_id' => 62,
       ],
       
       [
        'name' => 'مكتبة الصور والفيديو',
        'parent_id' => 0,
       ],


       [
        'name' => 'المعاد',
        'parent_id' => 4,
       ],
    
       
       

       ];

       foreach ($categories as $category) {
           MainCategory::create($category);
       }

       \App\Models\MainCategory::factory(40)->create();

       \App\Models\User::factory(1)->create();
       \App\Models\WhoAreWe::factory(1)->create();

       \App\Models\posts::factory(400)->create();
       \App\Models\PageViews::factory(400)->create();
       \App\Models\Segel::factory(1)->create();

  

    //    \App\Models\posts::where('category_id', 42)->factory(5)->create();
    //    \App\Models\posts::where('category_id', 43)->factory(5)->create();
    //    \App\Models\posts::where('category_id', 44)->factory(5)->create();


    //    \App\Models\posts::where('category_id', 56)->factory(5)->create();
    //    \App\Models\posts::where('category_id', 57)->factory(5)->create();
    //    \App\Models\posts::where('category_id', 58)->factory(5)->create();

    //    \App\Models\posts::where('category_id', 61)->factory(5)->create();

    //    \App\Models\posts::where('category_id', 19)->factory(5)->create();


  
    }
}
