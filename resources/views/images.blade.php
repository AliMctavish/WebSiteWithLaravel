@extends('welcome')



@section('content')






<div class="container p-5" >



        
         
              <span><a id="card" href="{{route('home')}}">الاسلام لماذا..؟</a></span>
              <span>>></span>
        


              <span style="font-size: 20px ; font-weight:700">معرض الصور</span>
              <br>

              @if(session()->has('status'))
              <div class="container bg-success text-white p-2 h5">
                  {{session()->get('status')}} 
              </div>
              @endif

              <br>
              <div class="d-flex ">
                  <div  class="flex-grow-1" style="font-size: 30px ; font-weight:700; ">معرض الصور</div>
                @if($sortByViews == 1)
                <form action="{{route('SortByViews' , [ $sortByViews = 0 ])}}">
                  <button   class="p-2 mx-3 border btn-primary"  style="font-size: 20px ; font-weight:700;">الاعلى مشاهدة</button>
                </form>
                @else
                <form action="{{route('SortByViews' , [ $sortByViews = 1 ])}}">
                  <button   class="p-2 mx-3 border "  style="font-size: 20px ; font-weight:700;">الاعلى مشاهدة</button>
                </form>
                @endif
                @if($sortByDownloads == 1)
                <form action="{{route('SortByDownloads' , [ $sortByDownloads = 0 ])}}">
                  <button    class="p-2 mx-3 border btn-primary" style="font-size: 20px ; font-weight:700 ;">الاعلى تحميلا</button>
                </form>  
                @else
                <form action="{{route('SortByDownloads' , [ $sortByDownloads = 1 ])}}">
                  <button    class="p-2 mx-3 border" style="font-size: 20px ; font-weight:700 ;">الاعلى تحميلا</button>
                </form> 
                @endif

              </div>

              <br>
              <br>
              <br>
              <div class="container">

                <div class="row my-3  d-flex justify-content-center">
                  <div hidden>

                    {{$index = 0}}
                    {{$value = 0}}
                  </div>
                @foreach($posts as $post)
                <div hidden>
                  {{$index++}}
                </div>

                @if($post->image)
                  <div class="col-lg-3 col-md-8 col-sm-12 mt-2"  >
                      <div id="picHover" class="card" style="background-color: none; border:none; position:relative ; overflow:hidden">
                        <div id="hidden" class="text-muted bg-dark p-1"  >
                          <span class="text-muted mt-3 mx-1"><svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg> {{$post->views}}
                          <a href="{{route('imageDownload' , $post->id)}}" onclick="      
                            var img = document.getElementById('img{{$post->image}}').src;                                           
                            const link = document.createElement('a');
                            link.href = img;
                            link.setAttribute('download', img.split('_').pop()); 
                            document.body.appendChild(link);
                            link.click();
                         " >
                          <svg style="cursor: pointer;" class="mx-1 text-primary"  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                          </svg> {{$post->downloads}} </a></span>
                        </div>
                     
                        <img   type="button" class="images"  type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="card-img-fluid" src="{{url('/Images' , $post->image)}}" style="height:140px"  alt="...">
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"  id="exampleModal" style="background-color: unset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
                          <div class="modal-dialog" id="center" style="max-width:100%">
                            <div class="modal-content" >
                              <div class="modal-header">
                                <button type="button" onclick="let el= document.getElementsByClassName('carousel-item'); 
                                
                                for(let i = 0 ; i < el.length ; i++)
                                {
                                  el[i].className ='carousel-item'
                                }
                              
                             " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel">
                                  <div  class="carousel-inner ">
                                    @foreach($posts as $post)
                                    @if($post->image)
                                    <div  id="hell{{$post->id}}" class="carousel-item" style="overflow: hidden">
                                      <div class="d-flex justify-content-between p-2">
                                      

                                        <span class="modal-title text-center bg-light " style="font-size: 40px" id="staticBackdropLabel">{{$post->title}}</span>
                                        <span class="text-muted mt-3 mx-1"><svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg> {{$post->views}}
                                        <a href="{{route('imageDownload' , $post->id)}}" onclick="
                                                
                                          var img = document.getElementById('img{{$post->image}}').src;                                           
                                          const link = document.createElement('a');
                                          link.href = img;
                                          link.setAttribute('download', img.split('_').pop()); 
                                          document.body.appendChild(link);
                                          link.click();
                                       ">
                                        <svg style="cursor: pointer;" class="mx-1 text-primary" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg> {{$post->downloads}} </a></span>
                                      </div>
                                      <div class="d-flex justify-content-center">
                                        <img id="img{{$post->image}}" src="{{url('/Images' , $post->image)}}" class="d-block " style="width:1200px ;   height:600px  " alt="...">
                                      </div>
                                    </div> 
                                    @endif
                                    {{-- @if(!$post->image)
                                    <div id="hell{{$post->id}}" class="carousel-item">
                                      <img id="card2" class="e" src="/ICONS/makka.jpg"  style=" height:140px"  alt="">
                                    </div>
                                    @endif --}}
                                    <style>
                                        #hidden{
                                  position: absolute !important; color:black !important; left:0% !important; top:-30% !important;
                                  transition: 0.2s all;
                                }
                                #picHover:hover > #hidden {
                                  top:0% !important;
                                }
                                      #download{
                                        opacity:0.6;
                                        right:20%;
                                        top: 94%;
                                        transition: 0.2s all;
                                      }
                                      #download:hover{
                                        opacity:1;
                                        
                                      }
                                    </style>
                                    @endforeach

                                    <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                                      <span  id="prev" class="carousel-control-prev-icon"  aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                                      <span class="carousel-control-next-icon"  aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <style>
                                .carousel-control-next{
                                  height: 20px !important;
                                  background-color: rgba(0, 0, 0, 0.399) !important;
                                  width: auto !important;
                                  padding:30px !important;                                    
                                  transform: translateY(370px);
                                }
                                .carousel-control-prev{
                                  background-color: rgba(0, 0, 0, 0.399) !important;
                                  width: auto !important;
                                  padding:30px !important;                                    

                                  height: 20px !important;
                                  transform: translateY(370px);
                                }
                              
                              </style>
                              <div class="modal-footer">
                               
                                  
                                 
                                </a>
                                <button type="button" class="btn btn-secondary" onclick="let el= document.getElementsByClassName('carousel-item'); 

                                for(let i = 0 ; i < el.length ; i++)
                                {
                                  el[i].className ='carousel-item'
                                }
                              
                             " data-bs-dismiss="modal">اغلاق</button>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                     
                        
               
                        {{-- <div class="container">
                          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg>{{$post->views}}</p>
                        </div> --}}
                      </div>
                    </div>
                    @endif
                   



                    <style>


                      #{{$index}}{
                        text-decoration: none !important;
                        color:black !important;
                        transition: all 0.4s;
                        border:none;
                      }
                      
                      #{{$index}}:hover{
                        padding:5px;
                      }        

                      #center {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
                      </style>
                      {{--               
                        <div onclick="console.log(this) " class="col-3"  type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <div id="picHover" class="card" style="background-color: none; border:none">
                            @if($post->image)
                            <img id="card2"  class="card-img-fluid"  src="{{url('/Images' , $post->image)}}" style=" height:140px ; "  alt="...">
                            @endif
                      @if(!$post->image)
                      <img id="card2" src="/ICONS/makka.jpg" style=" height:140px"  alt="">
                      @endif
                    </div>
                  </div> --}}

                
                  {{-- @endif --}}
                    @endforeach
                  </div>


                  <script> 
         
                  

                    var images = document.getElementsByClassName('images')

                    console.log(images)

                    var elements = document.getElementsByClassName('carousel-item')
                    var modal = document.getElementsByClassName('modal')
                    let value = false;

                    for(let i = 0 ; i < images.length ; i++)
                    {
                      
                      images[i].addEventListener("click"  , () => {
                        console.log(images[i])
                        if(value == false)
                        {
                          elements[i].className =  'carousel-item active '
               
                       
                          value = true;
                        }

                        console.log(elements[i].className)

                      })

                      modal[i].addEventListener("click"  , () => {

                        if(value == true)
                        {
                          elements[i].className =  'carousel-item'
   
                          console.log(elements[i].className)
                          value = false
                        }
                      
                      
                    })
                    }
                   console.log(elements)

        

                    </script>








                <br>
                <style>
                  #picHover{
                      position: relative;
                      
                      overflow: hidden;

                  }
                  #picHover:hover > #text{
                   top:60%;   
                  }
               
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