@extends('welcome')





@section('content')


<div class="goal">
    <div class="first d-flex justify-content-center">
        <img src="../resources/ICON/coverPhoto.jpg" alt="">
</div>

  <br>
  <br>
  <br>

   
    <div class="container">

        <h4 style="background-color:rgb(194, 194, 194) ; padding:20px">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>  نتائج البحث 
         </h4>

         
         <br>
       
         <div class="row d-flex justify-content-center">

          @foreach($data as $data)
                <div id="vid" class="col-3  col-md-2 col-sm-6 m-3 card" style="width: 18rem;">
                    @foreach($categories as $category)
                    @if($data->category_id == $category->id)
                       <div class="text-center" style="position: absolute;  top:0%; right:0%;background-color:#3a3f41; ;width:150px; color:white;font-size:17px">
                        <div href="{{route('ShowCategory' , $category->id)}}">
                            {{$category->name}}
                        </div>
                       </div>
                    @endif
                    @endforeach
                    @if(!$data->image)
                    <img src="https://picsum.photos/500/300?image={{ 5 + 5}}" class="card-img-top" alt="https://c8.alamy.com/comp/2B9EEJ7/conceptual-image-of-a-neural-network-in-the-human-brain-2B9EEJ7.jpg">
                    @endif
                    @if($data->image)
                    <img src="{{url('/Images' , $data->image) }}" alt="">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title">{{$data->title}}</h5>
                      {{-- <p class="card-text">{!! Str::limit($data->subject,30, '...') !!}</p> --}}
                      <a id="test" href="{{route('ShowPost', [$data->id , $data->category_id])}}"> اقرا المزيد >></a> 
                    </div>
                </div>
          @endforeach

          
          
        </div>
        <br>
        
        
       

    </div>




    <br>
    <br>
    
    <br>
    <br>
    



  





</div>





<style>


.goal{
    background-image: url('../resources/ICON/goals.png');
    z-index: 0;
position: relative;
background-attachment: fixed;
overflow: hidden;
height:auto;

}
.goal p {
    


    font-size: 22px;
}



.goal .container{

height:auto;

}



.col-3{

padding:10px;

}


.first img{
width:100%;
height:500px;   
 z-index: -1;

position: absolute;
transform: translateY(-270px);

}




.goal h1{

text-align: center ;
margin-top : 94px;
color:white;
font-size: 40px;
}



#vid a p {
    text-align: center;
}
#test {
   margin-right:30% !important;
   border: none;
   background-color: white;
   color: #1D2FA4 !important;
   font-weight: 600;
}








</style>






@endsection









