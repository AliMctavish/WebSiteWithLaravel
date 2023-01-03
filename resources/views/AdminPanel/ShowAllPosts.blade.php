@extends('AdminPanel.MainPanel')



@section('details')


@if(session()->has('status'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: green; font-size:20px; color:white" >{{session()->get('status')}}</p>

</div>

@endif
@if(session()->has('statusChange'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: rgb(0, 68, 128); font-size:20px; color:white" >{{session()->get('statusChange')}}</p>

</div>

@endif
<h1 class=" text-white h2 p-3" style="background-color:#3a3f41;  margin-top : 60px "> <svg xmlns="http://www.w3.org/2000/svg"  class="text-white mx-2"  width="36" height="36" class="mx-3" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
    <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
  </svg>منشورات كل الاقسام</h1>
  <div class="container  mt-4">

@if($posts->count() > 0)
<div class=" mt-4 ">
    
    <div class="row d-flex justify-content-around" >


    @foreach($posts as $post)
    <div  class="col-2 " style="width: 18rem; position:relative ; overflow:hidden; padding:0px">
    @foreach($categories as $category)
    @if($post->category_id == $category->id)
       <div class="text-center" style="position: absolute;  top:0%; left:0%;background-color:#3a3f41; ;width:150px; color:white; font-size:20px">
        <a href="{{route('ShowCategory' , $category->id)}}">
            {{$category->name}}
        </a>
       </div>
    @endif
    @endforeach
   
    <div id="vid" class="col-2 p-0 m-2 border" style="width: 18rem;">
        @if(!$post->image)
            <img src="https://picsum.photos/300/150" class="card-img-top"  alt="">
        @else
        <img src="{{url('/Images' , $post->image)}}" class="card-img-top" style="height:150px" alt="no image">
        @endif 
        <div class="card-body " id="hoverOnBtns" style="background-color:white">
          <h5 class="card-title " >{{$post->title}}</h5>
          <hr>
          <form method="DELETE"  action="{{route('DeletePost' , $post->id)}}" class="d-flex justify-content-center">
            @csrf
            
            <a class="btn  text-primary m-0 p-2  mx-2" href="{{route('ShowPost' , [$post->id, $post->category_id ])}}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
            </a>
            <a class="btn text-success p-2  mx-2" href="{{route('ShowUpdatePosts' , $post->id)}}"> 
                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
            </a>
            
            
            
            <a href="" >
                <button type="submit" class="btn text-danger p-2" style="color:white; font-size:18px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                 </button>

            </a>
             
        </form>
        <hr>
        </div>
      
    </div>  </div>  
    @endforeach
</div>
</div>
@endif

 
</div>
<div class="pagination d-flex justify-content-center" >
    {{$posts->links()}}
</div>








<style>
       .pagination .page-link{
        color:black !important;
        border-radius: 20% !important;
        font-size: 20px !important;
    }
    #sus{
        animation: susMove 0.5s ;
        
    }
       .pagination .page-item:disabled{
        font-size: 20px !important;
        background-color: red !important;
    }
    @keyframes susMove{
        0%{
            transform: translateX(2000px)
        }
        100%{
            transform: translateX(0px);
        }
    }    #hoverOnBtns .text-primary{
  color: black !important;
  background-color:#f0f0f0;
transition: all 0.4s;
  border-radius: 50%;

}
#hoverOnBtns .text-primary:hover{
    color: white !important;
    background-color: rgb(0, 89, 255) ;

    
}
#hoverOnBtns .text-success{
    background-color:#f0f0f0;
  margin-right:13px  !important; 
  border-radius: 50%;
  color: black !important;
}
#hoverOnBtns .text-success:hover{
    color: white !important;
    background-color: rgb(26, 140, 0);
}
#hoverOnBtns .text-danger{
    background-color:#f0f0f0;
  border-radius: 50%;
  color: black !important;
}
#hoverOnBtns .text-danger:hover{
    color: white !important;
    background-color: rgb(255, 47, 0)  !important;
}

    #sus{
        animation: susMove 0.5s ;
        
    }

    @keyframes susMove{
        0%{
            transform: translateX(2000px)
        }
        100%{
            transform: translateX(0px);
        }
    }


</style>





@endsection