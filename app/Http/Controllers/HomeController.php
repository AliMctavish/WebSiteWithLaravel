<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\MainCategory;
use App\Models\PageViews;
use App\Models\posts;
use App\Models\Segel;
use App\Models\WhoAreWe;
use Encore\Admin\Form\Field\Nullable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

  

    public function home()
    {
        $view = new PageViews();
        $view->save();
        $categories = MainCategory::all();
        $post1  = posts::where('category_id' , 42)->count() ;
        $postSlider = [];
        $sliderCounter = 42;
        for($i = 0 ; $i < 4 ; $i++)
        {
            $postSlider[$i] = posts::where('category_id' , $sliderCounter++)->take(3)->get();
        }      
        $postSlider[4] = posts::where('category_id' , 63)->take(3)->get();
        $post3 = posts::where('category_id' , 24)->take(1)->get();
        $post4 = posts::where('category_id' , 24)->take(2)->get();
        $post5 = posts::where('category_id' , 2)->take(4)->get();
        $post6 = posts::where('category_id' , 6)->take(3)->get();
        $postCount2 = MainCategory::where('parent_id' , 7)->get();
        $postCount3 = posts::where('category_id' , 0)->count();
        $post8 = [];
        $post7 = MainCategory::where('parent_id' , 7)->take(3)->get();
        $id = 54;
        for($i = 0 ; $i < $post7->count() ; $i++)
        {
            $post8[$i] = posts::where('category_id' , $id++)->take(1)->get();
        }
        $category1 = MainCategory::where('parent_id' , 3)->take(3)->get();
        $category2 = MainCategory::where('parent_id' , 3)->take(3)->get();
        $post9 = posts::where('category_id' , 8)->take(4)->get();
        $category3 = MainCategory::where('parent_id' , 5)->take(4)->get();
        $count = 0;
        foreach($category3 as $cat)
        {
        $post12[$count] = posts::where('category_id' , $cat->id)->take(2)->get();
        $count++;            
        }
        $post13 = posts::where('category_id' , 61)->take(5)->get();
        $post14 = posts::where('category_id' , 9)->take(6)->get();
        $category4 = MainCategory::where('parent_id' , 20)->take(4)->get();
        $post15 = posts::where('category_id' , 10)->take(3)->get();
        $post16 = posts::where('category_id' , 27)->take(3)->get();
        $post17 = posts::where('category_id' , 27)->take(3)->get();
        $post18 = posts::where('category_id' , 27)->take(3)->get();
        $post19 = posts::where('category_id' , 13)->take(3)->get();
        $post20 = posts::where('category_id' , 13)->take(3)->get();
        $post21 = posts::where('category_id' , 12)->take(2)->get();
        $post22 = posts::where('category_id' ,58)->take(4)->get();
        $post23 = posts::where('category_id' ,59)->take(4)->get();
        $post24 = posts::where('category_id' ,60)->take(4)->get();
        $post25 = posts::where('category_id' , 14)->take(4)->get();
        $post26 = [];
        $post26Counter = 15; 
        for($i = 0 ; $i < 3 ; $i++)
        {
            $post26[$i] = posts::where('category_id', $post26Counter)->take(3)->get(); 
            $post26Counter++;
        }


        $post27 = posts::where('category_id' , 18)->take(4)->get();
        $post28 = posts::where('category_id' , 20)->take(6)->get();


        


        $posts = posts::all()->sortByDesc('updated_at');



        $segel = Segel::findOrFail(1);
        
        return view('main' , ['categories' => $categories , 'posts' => $posts , 'post1' => $post1 ,'postSlider' => $postSlider ,'post3' => $post3 , 'post4' => $post4 , 'post5' => $post5  , 'post6' =>$post6  , 'post7' => $post7 , 'post8' => $post8 , 'postCount2' =>$postCount2 , 'postCount3' => $postCount3 , 'post9' => $post9 , 'category3' => $category3  ,  'post12' => $post12 , 'category1' => $category1 , 'category2' => $category2 , 'post13' => $post13 , 'post14' => $post14 , 'category4' => $category4 , 'post15' => $post15 , 'post16' => $post16 , 'post17' => $post17 , 'post18' => $post18 , 'post19' => $post19  , 'post20' => $post20 , 'post21' => $post21 , 'post22' => $post22 , 'post23' => $post23 , 'post24' => $post24 , 'post25' => $post25 , 'post26' => $post26  , 'post27' => $post27 , 'segel' => $segel, 'post28' => $post28] );    
    }
    public function Categories($id)
    {
        $categoryId = MainCategory::findOrFail($id);
        $categories = MainCategory::all();
        $categoryPost =  MainCategory::where('parent_id' , $categoryId->id)->get();
        $PostCount = posts::where('category_id' , $categoryId->id)->get();
        $posts = posts::where('category_id' , $id)->paginate(5);

        if(MainCategory::where('id' , '>' , $categoryId->id)->count() > 2 )
        {
            $sidePageCategory = MainCategory::where('id' , '>' , $categoryId->id)->take(3)->get();

        }else{
            $sidePageCategory =  MainCategory::where('id' , '<' , $categoryId->id)->take(3)->get();
        }


        $i = 0;
        $SidePosts = [];
        foreach($sidePageCategory as $postCat)
        {
            if(posts::where('category_id'  , $postCat->id)->count() < 1)
            {
                $SidePosts[$i] =  posts::where('category_id'  , $postCat->id)->take(2)->get();
                $i++;
            }
            else{
                $SidePosts[$i] =  posts::where('category_id'  , $postCat->id )->take(2)->get();
                $i++;
            }
        }
        $categoriesSelected =  MainCategory::where('parent_id' , $categoryId->parent_id)->get();

        $segel = Segel::findOrFail(1);
        
        return  view('category' , ['sidePageCategory' => $sidePageCategory,'SidePosts' => $SidePosts, 'categoryPost' => $categoryPost, 'PostCount' => $PostCount ,'segel' => $segel, 'categoryId' => $categoryId , 'categories' =>  $categories, 'posts' =>$posts, 'sidePageCategory' => $sidePageCategory  , 'categoriesSelected' => $categoriesSelected]);

    }
    public function SearchEngine(Request $request)
    {    
        $search = $request->Input('SearchValue');
        $segel = Segel::findOrFail(1);
        $data = posts::query()->where('title', 'LIKE' , "%{$search}%")->get();

        $categories = MainCategory::all();

        return view('SearchResult', ['segel' => $segel  , 'data' => $data , 'categories' => $categories]);
    }

    public function ContactUs()
    {
        $categories = MainCategory::all();
        $posts = posts::all();
        $segel = Segel::findOrFail(1);
        return view('ContactUs',  [ 'segel' => $segel, 'categories' =>  $categories, 'posts' =>$posts]);
    }
    public function SendContactUs(Request $request)
    {
        $send = new ContactUs();

        $send->fullname = $request->Input('name');
        $send->title = $request->Input('title');
        $send->subject = $request->Input('subject');

        $send->save();

        return redirect()->route('ContactUs')->with(["status" => "تم ارسال الرسالة بنجاح"]);
    }
    public function Images()
    {
        $categories = MainCategory::all();

        
            $posts = posts::orderBy('views' , 'ASC')->get();

            $sortByViews = 0;
            $sortByDownloads = 0;
         
            $segel = Segel::findOrFail(1);
         
        return  view('images' , ['segel' => $segel, 'categories' => $categories , 'posts' =>  $posts , 'sortByDownloads' => $sortByDownloads , 'sortByViews' => $sortByViews ]);

    }
    public function SortByViews($sortByViews)
    {
        $categories = MainCategory::all();
        $segel = Segel::findOrFail(1);
        if($sortByViews == 0)
        {
            $posts = posts::orderBy('views' , 'ASC')->get();
            return view('images' , ['segel' => $segel, 'categories' => $categories , 'posts' => $posts, 'sortByViews' => $sortByViews , 'sortByDownloads' => 0])->with(["status" => "تم الترتيب تصاعديا"] );
        }
        if($sortByViews == 1 )
        {
            $posts = posts::orderBy('views' , 'DESC')->get();
            return view('images' , ['segel' => $segel, 'categories' => $categories , 'posts' => $posts ,  'sortByViews' => $sortByViews ,'sortByDownloads' => 0])->with(["status" => "تم الترتيب تنازليا"] );
        }
    }
    public function SortByDownloads($sortByDownloads)
    {
        $categories = MainCategory::all();
        $segel = Segel::findOrFail(1);

        if($sortByDownloads == 0)
        {
            $posts = posts::orderBy('downloads' , 'ASC')->get();
          
            return view('images' , ['segel' => $segel, 'categories' => $categories , 'posts' => $posts,'sortByViews' => 0,'sortByDownloads' =>$sortByDownloads])->with(["status" => "تم الترتيب تصاعديا"] );
        }
        if($sortByDownloads == 1 )
        {
            $posts = posts::orderBy('downloads' , 'DESC')->get();
            return view('images' , ['segel' => $segel, 'categories' => $categories , 'posts' => $posts,'sortByViews' => 0 , 'sortByDownloads' =>$sortByDownloads])->with(["status" => "تم الترتيب تنازليا"] );
        }
    }
    public function ImagesDownloads($id)
    {
        $posts = posts::findOrFail($id);
        $posts->downloads++;
        $posts->save();
        return redirect()->route('images');
    }



    public function WhoAreWe()
    {
        $categories = MainCategory::all();        
       $data = WhoAreWe::findOrFail(1);
       $segel = Segel::findOrFail(1);
        return view('WhoAreWe' , [ 'segel' => $segel ,  'categories' =>  $categories , 'data' => $data]);
    }
    public function Videos()
    {
        $video = posts::where('category_id' , 61)->get();
        $categories = MainCategory::all();
        $segel = Segel::findOrFail(1);
        return view('Videos' , [ 'segel' => $segel, 'posts' => $video , 'categories' => $categories]);
    }
    public function  ShowVideo($id)
    {

        $posts = posts::all();

        $categories = MainCategory::all();

        $videoId = posts::findOrFail($id);

        $segel = Segel::findOrFail(1);

        return view('ShowVideo' , [ 'segel' => $segel , 'post' => $videoId , 'posts' => $posts , 'categories' => $categories]);

    }

    public function ShowPost($id, $catId , Request $request)
    {
        
        $categories = MainCategory::all();
        $postViews = posts::findOrfail($id);
        $postViews->views++;
        $postViews->save();
        $categoryId = MainCategory::findOrFail($catId);
        $posts = posts::all();
        
       
        $post = posts::findOrFail($id);
        $PostCount = posts::where('category_id' , $categoryId->id)->get();
        $segel = Segel::findOrFail(1);
        
        
        
        
        if(MainCategory::where('id' , '>' , $categoryId->id)->count() > 2)
        {
            $sidePageCategory = MainCategory::where('id' , '>' , $categoryId->id)->take(3)->get();
            $PostsOfIntrests = posts::where('id' , '>' , $postViews->id)->take(5)->get();
            $categoryPost =  MainCategory::where('id' , '>' , $categoryId->id + 3)->take(5)->get();

        }else{
            $sidePageCategory =  MainCategory::where('id' , '<' , $categoryId->id)->take(3)->get();
            $PostsOfIntrests = posts::where('id' , '<' , $posts->count())->take(5)->get();
            $categoryPost =  MainCategory::where('id' , '<' , $categoryId->id + 3)->take(5)->get();

        }


        
        $i = 0;
        $SidePosts = [];
        foreach($sidePageCategory as $postCat)
        {
            if(posts::where('category_id'  , $postCat->id)->count() < 1)
            {
                $SidePosts[$i] =  posts::where('category_id'  , $postCat->id)->take(2)->get();
                $i++;
            }
            else{
                $SidePosts[$i] =  posts::where('category_id'  , $postCat->id )->take(2)->get();
                $i++;
            }
        }
         
          
        
        
        return view('ShowPost' , [  'PostsOfIntrests' => $PostsOfIntrests , 'sidePageCategory' => $sidePageCategory,'SidePosts' => $SidePosts, 'categoryPost' => $categoryPost, 'PostCount' => $PostCount  , 'segel' => $segel , 'post' => $post , 'categories' =>  $categories , 'posts' => $posts , 'categoryId' => $categoryId]);
    }
}
