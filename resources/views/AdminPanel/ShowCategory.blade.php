@extends('AdminPanel.MainPanel')



@section('details')


@if(session()->has('status'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: green; font-size:20px; color:white" >{{session()->get('status')}}</p>

</div>

@endif
@if(session()->has('statusChange'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: rgb(128, 115, 0); font-size:20px; color:white" >{{session()->get('statusChange')}}</p>

</div>

@endif
<h1 style="font-size:50px; text-align:center; margin-top : 60px">منشورات قسم {{$category->name}}  </h1>
@if($posts->count() == 0)
<div class="container text-center">

    <h2 class="text-muted">لا توجد منشورات في هذا القسم</h2>
    <a href="{{route('ShowCreatePostCategory' , $category->id)}}" class="btn btn-success" style="font-size: 30px; ">
        اضغط هنا لاضافة منشور جديد <svg class="my-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></a>
    
</div>
@else
<div class="d-flex mx-4">
    <a  href="{{route('ShowCreatePostCategory' , $category->id)}}" class="btn btn-success mx-5" style="font-size: 30px; ">
        اضغط هنا لاضافة منشور جديد <svg class="my-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></a>
</div>
@endif
@if($posts->count() > 0)
<div class="container mt-4 ">
    
    <div class="row d-flex justify-content-center" >
    @foreach($posts as $post)
    <div id="vid" class="col-2 p-3" style="width: 18rem;">
        @if(!$post->image)
            <img src="https://picsum.photos/300/100" class="card-img-top" alt="">
        @else
        <img src="{{url('/Images' , $post->image)}}" class="card-img-top" style="height:100px" alt="no image">
        @endif 
        <div class="card-body" style="background-color:#606161">
          <h5 class="card-title" >{{$post->title}}</h5>
          <form method="DELETE" action="{{route('DeletePost' , $post->id)}}" class="d-flex justify-content-center">
            @csrf
          <button type="submit" class="btn btn-outline-danger" style="color:white; font-size:18px">حذف المنشور</button>
            
        <a class="btn btn-outline-success" href="{{route('ShowUpdatePosts' , $post->id)}}"> تعديل المنشور</a>
        <a class="btn btn-outline-primary" href="{{route('ShowPost' , [$post->id, $post->category_id ])}}"> مشاهدة المنشور</a>
        </form>
        </div>
      
    </div>
    @endforeach
</div>
</div>
@endif






<script>

let sus = document.getElementById('sus');
console.log(sus);

    
</script>




<style>
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