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
    <div class="row  d-flex justify-content-center" >

    @foreach($posts as $post)
    
    <div  class="col-2 m-2" style="width: 18rem; position:relative ; overflow:hidden; padding:0px">
        @foreach($categories as $category)
        @if($post->category_id == $category->id)
           <div class="text-center" style="position: absolute;  top:0%; right:0%;background-color:#3a3f41; ;width:150px; color:white; font-size:20px">
            <a href="{{route('ShowCategory' , $category->id)}}">
                {{$category->name}}
            </a>
           </div>
        @endif
        @endforeach
        @if(!$post->image)
            <img src="https://picsum.photos/300/100" class="card-img-top" alt="">
        @else
        <img src="{{url('/Images' , $post->image)}}" class="card-img-top" style="height:100px" alt="no image">
        @endif 
    
        <div class="card-body" style="background-color:#606161">
          <h5 class="card-title" > {{$post->title}}</h5>
     
          <form class="d-flex justify-content-center" method="DELETE" action="{{route('DeletePost' , $post->id)}}" >
            @csrf
            <button type="submit" class="btn btn-outline-danger" style="color:white; font-size:18px">حذف المنشور</button>
             <a class="btn btn-outline-success" href="{{route('ShowUpdatePosts' , $post->id)}}"> تعديل المنشور</a>
             <a class="btn btn-outline-primary" href="{{route('ShowPost' , [$post->id , $post->category_id])}}"> مشاهدة المنشور</a>
       
       
             
        </form>
        </div>
     
    </div>
    @endforeach

</div>

 
</div>
<div class="pagination d-flex justify-content-center" >
    {{$posts->links()}}
</div>



<script>

let sus = document.getElementById('sus');
console.log(sus);


let els =  document.getElementsByClassName("page-item")

console.log(els)
for(let i=0 ; i< els.length; i++)
{
   console.log(els[i]);
   els[i].style.backgroundColor ="red !important";
   els[i].className = "page-item disabled !important";
   els[i].classList.add('disabled');
}

els.forEach(el => {
    console.log(el);
});
    
</script>




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
    }

</style>





@endsection