@extends('welcome')



@section('content')




<div class="container p-5" >

    <div class="row">
            <div class="col-lg-8  ">
              <span><a id="card2" href="{{route('home')}}">الاسلام لماذا</a></span>
              <span>>></span>
                @foreach($categories as $cat)
              
                @endforeach
         
              
                <span>>></span>
                <span><a id="card2" href="{{route('Videos')}}">معرض الفيديو</a></span>
              
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

                <p class="card-text" style="text-align: end"><small class="text-muted">{{$post->updated_at->diffForHumans()}}</small></p>

                <div>
                    <div class="container">
                        <iframe style="width:100%"  height="315" src="https://www.youtube.com/embed/{{$post->VideoUrl}}" title="{{$post->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      

                    </div>

               
                 
                    <br>
                    <br>
                    <h3 style="color:red">{{$post->title}}</h3>
                    <div id="editor" style="height: auto">
                     {!! isset($post->subject) ? $post->subject : '' !!}
                    </div>
                      
                    <hr>
                    <h4>مواضيع ذات صلة تتعلق ب___</h4>
                    <br>
                    @foreach($categories->take(5) as $cat)
                    <a id="goo" class="p-2 m-2 border" style="text-decoration:none; " href="{{route('category' , $cat->id)}}"> {{$cat->name}}</a>
                    @endforeach
                        <br>
                        <br>

                

                </div>




                  
                
            </div>
          
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="col-lg-4 col-md-6  col-sm-12 gx-5" >
                <h3 style="text-align: center; font-weight:700">الاسلام حياة</h3>
                <div  class="row p-1 " style="background-color: #f4f5f6;">
                  @foreach($categories->take(3) as $postCat)
                  <h5 style="text-align:start;font-size:0.8vw; font-weight:400; background-color:#464e51; width:auto; color:white;  padding:10px;  border-radius: 40px 10px 10px 40px; margin-top:10px">{{$postCat->name}}</h5>
                  @foreach($posts as $post)
                  @if($post->category_id == $postCat->id )
                  <a id="card" class="card mb-3 " href="{{route('ShowPost' , [$post->id , $postCat->id ])}}" style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="https://picsum.photos/500/300" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$post->title}}</h5>

                           <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
                        </div>
                      </div>
                    </div>
                </a>
                  <hr>
                  
                  @endif
                  @endforeach
                  <div class="d-flex justify-content-end">
                    <a id="more" class="btn btn-dark w-25 " href="{{route('category' , $postCat->id)}}" >المزيد</a>
                  </div>
                  @endforeach
        
                </div>
        
            </div>
     


    </div>


</div>


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