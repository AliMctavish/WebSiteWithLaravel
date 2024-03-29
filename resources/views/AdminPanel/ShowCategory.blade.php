@extends('AdminPanel.MainPanel')



@section('details')


@if(session()->has('status'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: green; font-size:20px; color:white" >{{session()->get('status')}}</p>

</div>

@endif
@if(session()->has('statusChange'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: rgb(0, 128, 26); font-size:20px; color:white" >{{session()->get('statusChange')}}</p>

</div>

@endif
<div class="rounded text-white " style=" background-color:#3a3f41; margin-top : 60px">
    <div class="d-flex justify-content-between p-3">

        <h3 class=" text-white my-2">
            منشورات قسم <b>{{$category->name}}</b> 
        </h3>  <div class="d-flex justify-content-center" >
            <a class="btn btn-success p-2" style="height:45px ; "  href="{{route('ShowCreatePostCategory' , $category->id)}}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg></a>
        </div>
        
    </div>
    
            
    </div>

 @if($posts->count() > 0)
 <div class=" mt-4 ">
    
    <div class="row d-flex justify-content-around" >
    @foreach($posts as $post)
    <div id="vid" class="col-2 p-0 m-2 border" style="width: 18rem;">
        @if(!$post->image)
            <img src="https://picsum.photos/300/150" class="card-img-top" alt="">
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
      
    </div>
    @endforeach
</div>
</div>
@else
<div class="container text-center">
    <h1 class="mt-5 text-muted">لا توجد منشورات في هذا القسم</h1>
</div>
@endif






<script>

let sus = document.getElementById('sus');
console.log(sus);

    
</script>




<style>
    #hoverOnBtns .text-primary{
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