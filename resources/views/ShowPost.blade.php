@extends('welcome')



@section('content')




<div class="container p-5" >

    <div class="row">
            <div class="col-lg-8  ">
              <span><a id="card2" href="{{route('home')}}">الاسلام لماذا</a></span>
              <span>>></span>
                @foreach($categories as $cat)
                @if($cat->parent_id == 0 && $cat->id == $categoryId->parent_id )
                <span ><a id="card2" href="{{route('category' , $cat->id)}}"> {{$cat->name}}</a></span>
                <span>>></span>
                @endif
                @endforeach
         
                <span style=" font-weight:400"><a id="card2" href="{{route('category' , $categoryId->id)}}"> {{$categoryId->name}}</a></span>
                <span>>></span>
                <span style="font-size: 20px ; font-weight:700">{{$post->title}}</span>
                <br>
                <br>
                <span style="font-size: 40px ; font-weight:700">{{$post->name}}</span>
              <br>
             <style>
                  #cat a{
                    text-decoration: none;
                    color: rgb(117, 117, 117);
                    font-size: 20px;
                    transition: all 0.5s;
                  }
                  #cat a:hover{
                    cursor: pointer;
                    font-size: 30px;
                  }
                  #card2{
                    text-decoration: none;
                    color:rgba(0, 0, 0, 0.61);
                    transition: all 0.4s;
                    border:none;
                 }

                  #card2:hover{
                    text-decoration: underline
                 }
                </style>

                

                <h2>{{$post->title}}</h2>

                <p class="card-text" style="text-align: end"><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>

                <div >
                  @if($post->image)
                    <img style="height: 400px; width:800px" src="{{url('/Images' , $post->image)}}" class="img-fluid rounded-start" alt="...">
                  @endif
                  @if(!$post->image && !$post->VideoUrl)
                    <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100% " alt="">
                  @endif
                  @if(!$post->image && $post->VideoUrl)
                  <div class="col-md-12">
                    <iframe style="width:100%; height:400px;"  src="https://www.youtube.com/embed/{{$post->VideoUrl}}" title="{{$post->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  @endif
                    <br>
                    <br>
                    <h3 style="color:red">{{$post->title}}</h3>
                    <div id="editor" style="height: auto">
                     {!! isset($post->subject) ? $post->subject : '' !!}
                    </div>
                      
                    <hr>
                    <h4>مواضيع ذات صلة تتعلق ب___</h4>
                    <br>
                    <div class="container"> 
                      @foreach($categoryPost as $category)
                      @if($category->id != $categoryId->id)
                       <a id="goo" class="p-2 m-2  border" style="text-decoration:none;" href="{{route('category' , $category->id)}}"> {{$category->name}}</a>
                      @endif
                      @endforeach
                    </div>


                    <br>
                    <br>

                    <div class="border p-3">
                        <h4>قد يهمك ايضا___</h4>
                        <ul>
                            @foreach($PostsOfIntrests as $postOfIntrests)
                            <li id="list"><a href="{{route('ShowPost' , [$postOfIntrests->id, $categoryId->id] )}}">{{$postOfIntrests->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>




                  
                
            </div>
          
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            <div class="col-lg-4 col-md-8  col-sm-12  gx-5" >
              @foreach($sidePageCategory  as $postCat)
              <div class="row my-4  " style="background-color: #f4f5f6;"  >
                  <a href="{{route('category' , $postCat->id)}}" class="theme p-1" style="text-align:start;font-size:16px; font-weight:700; background-color:#464e51; width:150px; color:white  ;  border-radius: 0px 00px 0px 20px; margin-bottom:20px; text-decoration:unset;">{{$postCat->name}}</a>
    
                  @if($SidePosts)
                  @for($i = 0 ; $i < 3 ; $i++)
                  @foreach($SidePosts[$i] as $post)
                  @if($post->category_id == $postCat->id  )
                  <a id="card2" href="{{route('ShowPost' , [$post->id , $postCat->id])}}" id="card" class="card mb-3 " style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
                    <div class="row g-0">
                      @if($post->image)
                      <div class="col-md-4">
                        <img style="" src="{{url('/Images' , $post->image)}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      @endif
                      @if(!$post->image)
                      <div class="col-md-4">
                        <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
                      </div>
                      @endif
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$post->title}}</h5>
                           <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
                        </div>
                      </div>
                    </div>
                  </a>
                  @endif
                  @endforeach
                  @endfor
                  @else
                  <div class="container border text-muted">
                    لاتوجد منشورات في هذا القسم
                  </div>
                  @endif
                  {{-- @dd($hasNoPosts) --}}
                  @if($SidePosts[0]->where('category_id' , $postCat->id)->count() == 0 && $SidePosts[1]->where('category_id' , $postCat->id)->count() == 0 && $SidePosts[2]->where('category_id' , $postCat->id)->count() == 0 )
                    <div class="container border text-muted">
                      لاتوجد منشورات في هذا القسم
                    </div>
                  @endif
                  
                </div>
                  <div class="d-flex justify-content-end">
                    <a id="more" class="btn btn-dark" style="border-radius:0px; width:32%; padding:3px ; font-weight:600" href="{{route('category' , $postCat->id)}}" >المزيد</a>
                  </div>
                  @endforeach
                  
                  </div>
        
     


    </div>


</div>

<script>

var theme = document.getElementsByClassName("theme")

var writeColor =  localStorage.getItem("colorTheme");
var writeText =  localStorage.getItem("textColor");

for(let i = 0 ; i < theme.length ; i++)
    {
      theme[i].style.backgroundColor = writeText;
     

    }
</script>

<style scoped>
    #goo{
        color:black;
        transition: all 0.1s;
        border-radius: 7px;
    }
    #goo:hover{
        background-color: #464e51;
        color:white;
        
    }
    #list a{
        color:red;
        font-size: 20px;
        text-decoration: none;

    }
    #list a:hover{
        text-decoration: underline;
    }
    #card{
            text-decoration: none;
            color:black;
            transition: all 0.4s;
            border:none;
          }

          #card:hover{
            cursor: pointer;
            padding:10px;
          }
</style>



@endsection