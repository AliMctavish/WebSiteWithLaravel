@extends('welcome')



@section('content')




<div class="container p-5" >



        
         
              <span><a id="card" href="{{route('home')}}">الاسلام لماذا..؟</a></span>
              <span>>></span>
        


              <span style="font-size: 20px ; font-weight:700">مكتبة الفيديو</span>
              <br>
              <br>
              <br>
              
              <div class="d-flex ">
                  <div  class="flex-grow-1" style="font-size: 30px ; font-weight:700; ">مكتبة الفيديو</div>
    


              </div>

              <br>
              <br>
              <br>
              <div class="container">
         
                <div class="row my-3 ">
                    @if($posts->count() > 0)
                    @foreach($posts as $post)
                    <div onclick="console.log(this)" class="col m-4" type="button" class="btn" >
                        <div id="picHover" class="card" style="background-color: none; border:none ; width:500px">
                          <h3>
                        <a style="text-decoration: none; color:black" href="{{route('ShowVideo' , $post->id)}}">
                            {{$post->title}}
                            </a> 
                        </h3>
                            <iframe width="540"  height="315" src="https://www.youtube.com/embed/{{$post->VideoUrl}}" title="{{$post->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                         </div>
                    </div>
                    @endforeach
                    @endif
                    @if($posts->count() == 0)
                    <div  class="flex-grow-1 text-muted text-center p-5" style="font-size: 30px ; font-weight:500; ">لا توجد منشورات في هذا القسم</div>
                    @endif
                </div>
             


             

                  
                  </div>









                <br>
                <style>
                  #picHover{
                      position: relative;
                      
                      overflow: hidden;

                  }
                  #picHover:hover > #text{
                   top:60%;   
                  }
               
                  #  a{
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
              
                  
                
            </div>
          
        
        <style>
          #exampleModal{
            transform: translateY(20%);
          }
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
         
        </style>
        
        
        



    </div>


</div>



<style>
  #more{

  }
</style>



@endsection