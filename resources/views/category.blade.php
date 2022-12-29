@extends('welcome')



@section('content')




<div class="container p-5" >

    <div class="row">

        
            <div class="col-lg-8 col-sm-12">
              <span><a id="card" href="{{route('home')}}">الاسلام لماذا..؟</a></span>
              <span>>></span>
              @foreach($categories as $cat)
              @if($cat->parent_id == 0 && $cat->id == $categoryId->parent_id )
              <span><a id="card" href="{{route('category' , $cat->id)}}">{{$cat->name}}</a></span>
              <span>>></span>
              @endif
              @endforeach

              <span style="font-size: 20px ; font-weight:700">{{$categoryId->name}}</span>
              <br>
              <br>
              <span style="font-size: 40px ; font-weight:700">{{$categoryId->name}}</span>
              @if($categoryId->parent_id != 0 )
                @foreach($categoriesSelected as $category)
                @if($categoryId->id != $category->id)
                <span  style="margin-right:30px"> 
                 <a id="card" href="{{route('category' , $category->id)}}">{{$category->name}}</a> 
                </span>
                @endif
                @endforeach
              @endif
              @if($categoryId->parent_id == 0 )
                @foreach($categoryPost as $category)
                @if($category->id != $categoryId->id  )
                <span style="margin-right:30px"> 
                 <a  id="card" href="{{route('category' , $category->id)}}">{{$category->name}}</a> 
                </span>
                @endif
                @endforeach
              @endif
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
                </style>
                <br>
            
                @if($PostCount->count())
                  @foreach($posts as $post)
                  @if($post->category_id == $categoryId->id)
                  <a id="card2" href="{{route('ShowPost' ,[$post->id , $categoryId->id])}}" class="card mb-3" style="max-width: 740px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        @if(!$post->image)
                       <img src="/ICONS/makka.jpg"  style="height:150px; width:250px" class="img-fluid rounded-start" alt="...">
                        @endif
                        @if($post->image)
                        <img  src="{{url('/Images' , $post->image)}}"  style="height:150px; width:250px" class="img-fluid rounded-start" alt="...">
                        @endif
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title " style="font-weight: 700; font-size:30px;margin-top:40px ">{{$post->title}}</h5>
                        </div>
                      </div>
                    </div>
                  </a>
                  <hr style="border:dotted 1px black; ">
                    @endif
                  @endforeach
                @endif
                @if(!$PostCount->count())
                <div class="container text-center text-muted mt-5 ">
                  <h1 >لا توجد منشورات في هذا القسم</h1>
                </div>
                @endif
                  

            </div>
          
        
        <style>
          #card{
            text-decoration: none;
            color:rgba(0, 0, 0, 0.582);
            transition: all 0.4s;
            border:none;
            font-size: 18px;
            
          }

          #card:hover{
            text-decoration: underline;
          }
          #card2{
            text-decoration: none !important;
            color:black !important;
            transition: all 0.4s;
            border:none;
          }

          #card2:hover{
            padding:5px;
          }
        </style>
        
        
        
        
        
        
        
        <div class="col-lg-4 col-md-8  col-sm-12  gx-5" >
          @foreach($sidePageCategory  as $postCat)
          <div class="row my-4  " style="background-color: #f4f5f6;"  >
              <a href="{{route('category' , $postCat->id)}}" class="theme p-1" style="text-align:start;font-size:16px; font-weight:700; background-color:#464e51; width:150px; color:white  ;  border-radius: 0px 00px 0px 20px; margin-bottom:20px; text-decoration:unset;">{{$postCat->name}}</a>

              @if($SidePosts)
              @for($i = 0 ; $i < 3 ; $i++)
              @foreach($SidePosts[$i] as $post)
              @if($post->category_id == $postCat->id  )
              <a href="{{route('ShowPost' , [$post->id , $postCat->id])}}" id="card" class="card mb-3 " style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
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

<style>
  #more{

  }
</style>



@endsection