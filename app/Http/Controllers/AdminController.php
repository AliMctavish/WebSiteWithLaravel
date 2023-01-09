<?php

namespace App\Http\Controllers;



use App\Models\ContactUs;
use App\Models\MainCategory;
use App\Models\PageViews;
use App\Models\posts;
use App\Models\Segel;
use App\Models\WhoAreWe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function userDetails()
    {
        return view('AdminPanel.userDetails');
    }






    public function MainPanel()
    {
        $post = posts::all();

        $segel = Segel::findOrFail(1);

        $contacts = ContactUs::all();
        
        $categories  = MainCategory::all(); 
        
        $pageViews = PageViews::all();

        return view('AdminPanel.Details' , ['posts' => $post , 'categories' => $categories, 'contacts' => $contacts, 'views' => $pageViews , 'segel' => $segel]);
    }

    public function AdminPosts()
    {
        return view('AdminPanel.AdminPosts');
    }

    public function ContactUs()
    {
        $sent = ContactUs::all()->sortByDesc('updated_at');
        $categories = MainCategory::all();
        return view('AdminPanel.ContactUs' , ['sent' => $sent , 'categories' => $categories]);
    }
    public function ContactUsDelete($id , Request $request)
    {
        $sent = ContactUs::findOrfail($id);
        $sent->delete();
        $request->session()->flash('status' , 'تم حذف الرسالة بنجاح');
        return Redirect()->route('AdminContactUs');
    }
    public function ShowPosts()
    { 
        $data = posts::all()->sortByDesc('updated_at');
        return view('AdminPanel.ShowPosts' , ['posts' => $data]);
    }
    

    public function ShowCategory($id)
    { 
        $data = MainCategory::findOrFail($id);
        $categories = MainCategory::all();
        $posts = posts::all()->where('category_id' , $id);
        return view('AdminPanel.ShowCategory' , ['category' => $data , 'posts'  => $posts , 'categories' => $categories]);
    }
    public function ShowAllPosts()
    { 
        $posts = posts::orderBy('updated_at', 'DESC')->paginate(12);
        $categories =  MainCategory::all()->sortByDesc('updated_at');
        return view('AdminPanel.ShowAllPosts' , ['posts' => $posts , 'categories' => $categories ]);
    }
   
  

    public function DeletePost(Request $request, $id)
    {
    $data = posts::findOrFail($id);

        $data->delete();

        $request->session()->flash('status','تم حذف المنشور بنجاح !');

        return redirect()->route('ShowCategory' , $data->category_id);
    }


    public function DeleteCategory(Request $request, $id)
    {
        $data = MainCategory::findOrFail($id);

        $data->delete();

        $request->session()->flash('status','تم حذف القسم مع منشوراته بنجاح !');

        return redirect()->route('ShowAllCategories');
    }

 
    public function ShowCreatePost()
    {
        $categories = MainCategory::all();
        return view('AdminPanel.ShowCreatePost' , ['categories' =>$categories ] );
    }


    public function ShowCreatePostCategory($id)
    {
        $category =  MainCategory::findOrFail($id);
        $categories = MainCategory::all();
        return view('AdminPanel.ShowCreatePostCategory' , ['category' => $category , 'categories' => $categories]);
    }




    public function ShowCreateCategory()
    {
        $categories = MainCategory::all();




        return view('AdminPanel.ShowCreateCategory' , ['categories' =>$categories ] );
    }
    public function ShowAllCategories()
    {
        $categories = MainCategory::orderBy( 'sort_category' , 'DESC')->where('parent_id' , 0)->paginate(12);
       $SubCategories = MainCategory::all();            
        return view('AdminPanel.ShowAllCategories' , ['categories' =>$categories  , 'SubCategories' => $SubCategories] );
    }
    public function AboutUs(Request $request)
    {
        $data = WhoAreWe::findOrFail(1);

        return view('AdminPanel.aboutUs' , ['data' => $data]);
    }
    public function Segel()
    {
        $segel = Segel::findOrFail(1);

        return view('adminPanel.Segel' , ['segel' => $segel]);
    }
    public function SegelUpdate(Request $request )
    {   
        $segel = Segel::findOrFail(1);
        $segel->segel =  $request->Input("segel");
        $segel->save();

        return redirect()->route("segel")->with(["statusChange" => "تم تغيير سجل الايام"]);
    }
    public function CreateAboutUs(Request $request)
    {
        $data = WhoAreWe::findOrFail(1);

        $data->subject  = $request->Input('subject');

        $data->save();

      
        return redirect()->route('AdminPanel');
    }
    
    public function ShowUpdateCategory($id)
    {

        $categories = MainCategory::all();
        $cat = MainCategory::findOrfail($id);






        return view('AdminPanel.ShowUpdateCategory' , ['categories' =>$categories  , 'category' => $cat] );
    }


    public function CreateCategory(Request $request)
    {
       
    
            $data = new MainCategory();
            
            $request->validate([
                'name' => 'required' 
            ]);


            $data->name = $request->Input('name');
            $data->parent_id= $request->Input('parent_id');
            
         
    
    
            $data->save();
            if($request->Input('parent_id'))
            {
                $request->session()->flash('statusChange' , "    تم انشاء قسم فرعي باسم {$data->name}     ! ");

            }
            if(!$request->Input('parent_id'))
            {
                $request->session()->flash('statusChange' , "    تم انشاء قسم رئيسي باسم {$data->name}     ! ");
            }


        
    
            return redirect()->route('ShowCategory' , $data->id);
        
    }
 

    public function Allowed($id)
    {
        $categories = MainCategory::where('isAllowed' , true)->count();
        $category  = MainCategory::findOrFail($id);
        if($categories >= 11 )
        {
            return redirect()->route('ShowAllCategories')->with(["faild" => "يجب ان يكون عدد الاقسام الظاهرة ليس اكثر من 11"]);
        }
        $category->isAllowed = true;
        $category->save();
        return redirect()->route('ShowAllCategories');
    }
    public function NotAllowed($id)
    {
        $category  = MainCategory::findOrFail($id);
        $category->isAllowed = false;
        $category->save();
        return redirect()->route('ShowAllCategories');
    }

    public function CreatePost(Request $request)
    {
       
    
            $data = new Posts();
    
            
            $request->validate([
                'title' => 'required|max:255',
                'subject' => 'required',
                'category_id' => 'required',
            ]);
            
            $data->title = $request->Input('title');
            $data->subject= $request->Input('subject');
            $data->category_id = $request->Input('category_id');
            $data->image = $request->file('image');
            $data->VideoUrl = $request->Input('VideoUrl');
            $data->writer = $request->Input('writer');
            
         
    
            if($request->file('image'))
            {
               $file = $request->file('image');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file->move(public_path('/Images'), $filename);
               $data['image'] = $filename;
             
            }
    
            $data->save();
    
            $request->session()->flash('statusChange' , "  تم نشر منشور بعنوان {$data->title} ! ");
        
    
            return redirect()->route('ShowAllPosts');
        
    }




    public function ShowUpdatePosts($id)
    {
        $data = posts::findOrFail($id);
        $categories = MainCategory::all();

        return view('AdminPanel.ShowUpdatePosts' , ['data' => $data, 'categories' => $categories]);
    }

 
    public function UpdatePosts(Request $request, $id , )
    {

        $data = posts::find($id);

        
        $data->title = $request->Input('title');
         $data->subject= $request->Input('subject');
      
         $data->category_id = $request->Input('category_id');

         
         $data->writer = $request->Input('writer');
     
     

        if($request->file('image'))
        {
           $file = $request->file('image');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('/Images'), $filename);
           $data['image'] = $filename;
         
        }

        if($request->Input('VideoUrl'))
        {
            $data->VideoUrl = $request->Input('VideoUrl');
        }

        $data->save();

        $request->session()->flash('statusChange' , 'تم التعديل على المنشور ! ');
    

        return redirect()->route('ShowAllPosts');
    }
  
    public function UpdateCategory(Request $request, $id)
    {

        $data = MainCategory::find($id);
        
        $data->name = $request->Input('name');
         $data->parent_id= $request->Input('parent_id');
         $data->sort_category= $request->Input('sort_category');

        $data->save();

        $request->session()->flash('statusChange' , 'تم التعديل على القسم ! ');
    

        return redirect()->route('ShowAllCategories');
    }
  



    







}
