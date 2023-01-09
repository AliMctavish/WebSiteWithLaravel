@extends('welcome')



@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div id="cor" class="carousel-inner">
   @foreach ($posts->take(5) as $post)
   @if($loop->first)
   <div id="item"  class="carousel-item active">
   @else
   <div id="item"  class="carousel-item ">
   @endif
   @if($post->image)
   <img  class="d-block w-100" src="{{url('/Images' , $post->image)}}">
   @else
   <img  class="d-block w-100" src="/ICONS/makka.jpg">
   @endif
     <div class="mx-5" id="coverNews" style="background-color: #464e51">
      <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="text-white">
        {{$post->title}}
      </a>
    </div>
  </div>
  @endforeach
   
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <br>
  <br>
  <br>
  

  <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="true">
    @if($post1 != 0)
    <div class="container">
    <div class="row">
    <div id="indicators" class="carousel-indicators col-lg-1 col-sm-12 col-md-2">

      {{-- <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
   
          <p style="text-align: center; font-weight:700; font-size:20px ; width:20px">
            العقيدة الاسلامية
            <img src="/ICONS/last.png" style="box-shadow: 0px 11px 21px -16px rgba(0,0,0,0.75) " alt="">
            <a  style="text-align: center; font-weight:700; font-size:20px;; background-color:unset  margin:2px" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
              التوحيد 
           
            </a>
            <a  style="text-align: center; font-weight:700; font-size:20px ; background-color:unset ;  ; margin:0px" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"  aria-current="true" aria-label="Slide 2">
              العدل 
              
            </a>
            <a  style="text-align: center; font-weight:700; font-size:20px ; background-color:unset  ; margin:0px"  data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"  aria-current="true" aria-label="Slide 3">
              النبوة 
              
            </a>
            <a  style="text-align: center; font-weight:700; font-size:20px ; background-color:unset ; margin:0px"  data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3"  aria-current="true" aria-label="Slide 4">
              الامامة 
              
            </a>
            <a  style="text-align: center; font-weight:700; font-size:20px ; background-color:unset ; margin:0px"  data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4"  aria-current="true" aria-label="Slide 5">
              المعاد
            </a>
            
          </p>
    
      </div>
      <div id="inner"  class="carousel-inner col-lg-11 col-md-10 col-sm-12">

        @for($i =  0 ; $i < 5 ; $i++)
        @if($i == 0)
        <div id="carousel" class="carousel-item  active  card-group" style="">
          @foreach($postSlider[0] as $post)
          <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" id="culture"  style="border: none" class="card">
            @if($post->image)
            <img  style="border-radius: 10px; width:22rem;" id="changeHeight" class="img-fluid" src="{{url('/Images' , $post->image)}}">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg"  style="border-radius: 10px; width:22rem;" id="changeHeight" class="img-fluid"  alt="">
            @endif
            <div class="card-body">
              <div class="card-text" >{{$post->title}}</div>
            </div>
          </a>
          @endforeach
          </div>
          @else
        <div id="carousel" class="carousel-item  card-group  col-sm-12" style="">
          @foreach($postSlider[$i] as $post)
          <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" id="culture"  style="border: none" class="card">
            @if($post->image)
            <img style="border-radius: 10px; width:22rem;" id="changeHeight" class="img-fluid" src="{{url('/Images' , $post->image)}}">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg"  style="border-radius: 10px; width:22rem;" id="changeHeight" class="img-fluid"  alt="">
            @endif
            <div class="card-body">
              <div class="card-text" >{{$post->title}}</div>
            </div>
          </a>
          @endforeach
          </div>
          @endif
          @if($i == 5)
          <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" id="culture"  style="border: none" class="card">
            @if($post->image)
            <img style="border-radius: 10px; width:22rem;" id="changeHeight" class="img-fluid" src="{{url('/Images' , $post->image)}}">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
            @endif
            <div class="card-body">
              <div class="card-text" >{{$post->title}}</div>
            </div>
          </a>
          
          @endif

          @endfor
         
    </div>
        
        {{-- @if($posts->where('category_id' , 42)->count() == 0)
        <div class="container d-flex justify-content-center" style="font-size: 30px ; margin-block: 100px">
          لاتوجد منشورات في هذا القسم 
        </div>
        @endif --}}

       
     
    </div>
    @endif
    </div>
    <button hidden class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button hidden class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <style>





    #inner{
      width:unset !important;
      position: unset !important;
      transition: all 0.01s  !important;
      box-shadow: 0px 11px 21px -16px rgba(0,0,0,0.75) !important;
    }
    #indicators{
      margin-right: unset !important;
      display: flex !important;
      justify-content:unset !important;
      position: relative !important;
      margin-left: unset !important;
    }
    #indicators .active{
      color:black !important;
      font-size: 25px !important;
    }
     .carousel-item-start , .carousel-item-end ,  #inner .carousel-item.active{
      display: flex !important;
      justify-content: center !important;

    }
    
    #inner .carousel-item-start ,#inner .carousel-item-end {
      width:inherit !important;
    }

     .carousel-item-next,  .carousel-item-prev {
      margin-right: none !important;
      display: flex !important;
      justify-content:unset !important;
      position: absolute !important;
      margin-left: none !important;
    }
    
  </style>
  

  <br>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-lg-5 my-5 col-md-12  " style="border-radius: 16px ;  border: 1px solid rgba(0, 0, 0, 0.245);
      border-bottom: none;">
     
            <div class="container "  style="position: relative;">
             
              <h5  id="divCon2" onclick="clicked(1)" class="my-4">لماذا الدين ؟</h4>
              <h4  id="divCon3" onclick="clicked(2)" class="my-4">لماذا الدين الاسلامي ؟</h4>
              <div id="card1" class="row" >
                <div  class="col-7 pt-5">
                    @foreach($post3 as $post)
                    @if($loop->first)
                    <a id="card" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="" style="border:unset">
                      @if($post->image)
                      <img style="border-radius: 5px; max-width:350px; height:150px"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
                      @endif
                      @if(!$post->image)
                      <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:90%; "  alt="">
                      @endif
                      <div class="card-body">
                        <p class="card-text">{{$post->title}}</p>
                        <small class="text-muted"><svg class="mb-1 mx-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar-minus" viewBox="0 0 16 16">
                          <path d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>{{$post->created_at}}</small>
                        <p class="card-text">{{$post->subject}}</p>
                      </div>
           
                    </a>
                    @endif
                    @endforeach
                  </div>
                  <div class="col-5 pt-4 " > 
                    @foreach($post3 as $post)
                    @if(!$loop->first)
                    <a  id="culture" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="" style="border:unset">
                      @if($post->image)
                      <img  style="border-radius: 5px; max-width:100% ; height:80px; "  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
                      @endif
                      @if(!$post->image)
                      <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:70%; margin-right:30px "  alt="">
                      @endif
                      <div class="card-body">
                        <p class="card-title text-center m-0">{{$post->title}}</p>
                      </div>
                    </a>
                    @endif
                    @endforeach
                    <div class="bg-dark mt-3 text-center p-1 " style="color:white; ; font-size:14px; width:140px; margin:auto ;font-weight:500  ">
                      <a class="text-white " href="{{route('category' , $post->category_id)}}">
                        المزيد
                      </a>
                    </div>

                  </div>
                  

           
              </div>
              <div id="card2" class="row" >
                <div  class="col-7 pt-5">
                    @foreach($post4 as $post)
                    @if($loop->first)
                    <a id="card" href="{{route('ShowPost' , [$post->id , $post->category_id])}}"  style="border:unset">
                      @if($post->image)
                      <img style="border-radius: 5px; max-width:350px; height:150px"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
                      @endif
                      @if(!$post->image)
                      <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:90%; "  alt="">
                      @endif
                      <div class="card-body">
                        <p class="card-text">{{$post->title}}</p>
                        <small class="text-muted"><svg class="mb-1 mx-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar-minus" viewBox="0 0 16 16">
                          <path d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>{{$post->created_at}}</small>
                        <p class="card-text">{{$post->subject}}</p>
                      </div>
           
                    </a>
                    @endif
                    @endforeach
                  </div>
                  <div class="col-5 pt-4 " > 
                    @foreach($post4 as $post)
                    @if(!$loop->first)
                    <a  id="culture" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="" style="border:unset">
                      @if($post->image)
                      <img  style="border-radius: 5px; max-width:100% ; height:80px; "  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
                      @endif
                      @if(!$post->image)
                      <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:70%; margin-right:30px "  alt="">
                      @endif
                      <div class="card-body">
                        <p class="card-title text-center m-0">{{$post->title}}</p>
                      </div>
                    </a>
                    @endif
                    @endforeach
                    <div class="bg-dark text-center p-1" style="color:white; ; font-size:14px;  width:140px; margin:auto ;  font-weight:500">
                      <a class="text-white"  href="{{route('category' , $post->category_id)}}">
                        المزيد
                      </a>
                    </div>

                  </div>
                  

           
              </div>
          </div>
      </div>
      <style>
        #card1{
            transform: translateX(0px);
        }
        #card2{
          display: none;
            transform: translateX(0px);
        }

      </style>
      <script>
        let divCon2 = document.getElementById("divCon2");
        let divCon3 = document.getElementById("divCon3");
        let card1 = document.getElementById("card1");
        let card2 = document.getElementById("card2");

        card2.style.display = "none";



        let isClicked = false;
        divCon2.style.transition = "all 0.5s";
        card1.style.transition = "all 0.5s";
        card2.style.transition = "all 0.5s";

        function clicked(num){
          if(num == 1)
          {
            divCon2.style.backgroundColor = "white"
            divCon2.style.color = "black";
            divCon3.style.color = "white"
            divCon3.style.backgroundColor = "#464e51"
            card1.style.display = "flex";
            card2.style.display = "none";

            
          }
          if(num == 2)
          {
            divCon2.style.backgroundColor = "#464e51";
            divCon2.style.color = "white";
            card1.style.display = "none";
            card2.style.display = "flex"
            divCon3.style.backgroundColor = "white";
            divCon3.style.color = "black";
          }
        }


      </script>
      <div class="col-lg-7 col-md-12 pb-5">
        <h3 style="text-align: center; font-weight:700">نبي الاسلام</h3>
        <div class="container" id="prophetMohammed" >
          <div class="row p-5"  style=" max-width:730px">
            <div class="col-2">  
            </div>
            <div class="col-lg-10 col-sm-12">
              <div class="row row-cols-1 row-cols-md-2   g-4">
                @foreach($post5 as $post)
                <div  class="col">
                    <div id="picHover" class="card" style="background-color: none">
                      @if($post->image)
                      <img  class="card-img-fluid"  src="{{url('/Images' , $post->image)}}" style="border-radius: 20px; height:140px"  alt="...">
                      @endif
                      @if(!$post->image)
                      <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%;  "  alt="">
                      @endif
                      <a id="text" href="{{route('ShowPost', [$post->id , $post->category_id] )}}" class="card-text">
                          {{$post->title}}
                      </a>
                    </div>
                </div>
                @endforeach
                <style>
                  #picHover{
                      position: relative;
                      color:white;
                      overflow: hidden;

                  }
                  #picHover:hover > #text{
                   top:60%;   
                  }
                  #text{
                    text-align: center;
                    width: 100%;
                    padding: 20px;
                    transition: all 0.5s;
                    position:absolute;
                    top:100%;
                    background-color: rgba(0, 0, 0, 0.31);
                  }
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>


  

  <div class="container">
    <div class="row">

      <div class="col-lg-8 col-md-12 col-sm-12 gx-5">
        <h4 style="text-align:start; font-weight:700; padding:10px " class="my-2">ريحانة وليست قهرمانة</h4>
        <div class="row">
          <div class="card-group pb-5" style="box-shadow: 0px 11px 21px -16px rgba(0,0,0,0.75);
       ">
            @foreach($post6 as $post)
            <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" id="culture" class="card" style="border: none">
              @if($post->image)
              <img  src="{{url('/Images' , $post->image)}}" style="height:170px ; border ;border-radius: 10px" class="card-img-top " alt="...">
              @else
              <img src="https://c0.wallpaperflare.com/preview/346/950/560/canada-vancouver-forest-girls.jpg" class="card-img-top " style="border-radius: 10px" alt="...">              
              @endif
              <div class="card-body p-0">
                <h5 class="card-title">{{$post->title}}</h5>
                <div class="d-flex justify-content-between">
                  <small class="text-muted"><svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar-minus" viewBox="0 0 16 16">
                    <path d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>                
                  {{$post->updated_at}}</small>
                  <small class="text-muted"> {{$post->views}} 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                      <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                    </svg></small>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
        <br>
        <div class="row">

          <div class="col-lg-5 col-sm-12"  >
            <h5 style="text-align:start; font-weight:900; font-size:28px">رؤى وقضايا</h5>
            <div style="border-left: solid 1px ">
              <div hidden>
                {{$cate = 54}}
              </div>
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              @if($postCount2 != null ||$postCount3 != null )
              @foreach($categories->where('parent_id' , 7)->take(3); as $category)
              <div hidden>
                {{$cate++ }}
              </div>
              @foreach($posts->where('category_id' , $cate)->take(1); as $post)
              <a id="stuff" href="{{route('ShowPost' , [$post->id , $post->category_id])}}"  class="card mb-2" >
                <div id="stuffMade">
                  <p class="stuff{{$post->id}}" id="textMade">
                    {{$category->name}}
                  </p>
                </div>
                <div class="row g-0 ">
                  <div class="col-md-7" style="position: relative";>
                    <img src="https://img.freepik.com/premium-photo/happy-man-sitting-sofa-talking-his-friend-holding-mobile-hand_23-2148160191.jpg?w=2000" style="border-radius: 20px; height:100% ; width:100%" class="img-fluid" alt="...">
                
                  </div>
                  <div class="col-md-5">
                    <div class="p-1" >
                      <h5 class=" my-3" style="font-size:18px ; font-weight:700">{{$post->title}}</h5>
                      
                      <div class="d-flex flex-reverse" style="color:black; font-size:14px ; margin:0px">
                        <div class="my-2 mx-1" style="width:6px; height:6px ; background-color:#0e90bf " ></div>
                      {{$post->writer}}  
                      </div>
                      
                      <p class="card-text p-0 m-0" style="font-size: 15px ; position: relative;"><small class="text-muted">{{$post->updated_at}}</small>   
                      </p>
                    
                      <div  class="d-flex flex-row-reverse  text-muted" style="font-size: 15px" ><div href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="text-muted" style="color:black ; font-weight:700">المزيد</div>
                        <div style="width:7px;height:7px ; background-color:#0e90bf " class="mx-1 my-2"></div>   
                      </div>               
                    </div>
                  </div>
                 
                </div>
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              {{-- fix soon as possiable --}}
              </a>
              <style>
                .stuff404{
                  transform: rotate(-45deg) translate(-35px , -24px) !important;
                }
              </style>
              @endforeach
              @endforeach
              @else
              <p class="text-muted">لا توجد منشورات في هذا القسم </p>
              @endif
            </div>
          </div>
          
          <div class="col-lg-7 col-md-12 col-sm-12">
            <h4  style="text-align:start; font-weight:700 ;">كتاب المسلمين المقدس</h4>

            <div class="card bg-light m-0">
              <h5 style="text-align: center; font-size:26px; font-weight:800">القران الكريم</h5>
              <div class="d-flex justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Qur%27an_and_Rehal.jpg"  style="border-radius:5%;  ;max-width:70%" alt="">
              </div>
              <div class="row p-3" style="margin-inline: 10px">
                <div class="col-lg-5 col-sm-5 col-md-5 card-text g-0" style="margin-right:50px">
                  @foreach($category1 as $cat)
                              <div  class="d-flex   text-muted mt-3" style="font-size: 16px" >
                                <div style="width:6px;margin-top:10px; height:6px ; background-color:#0e90bf " class="mx-1"></div>
                                <a href="{{route('category' , $cat->id)}}">{{$cat->name}}</a>
                              </div>
                  @endforeach
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 card-text  g-0">
                  @foreach($category2 as $cat)
                  <div  class="d-flex   text-muted mt-3" style="font-size: 16px" >
                    <div style="width:6px;margin-top:10px; height:6px ; background-color:#0e90bf " class="mx-1"></div>
                    <a href="{{route('category' , $cat->id)}}">{{$cat->name}}</a>
                  </div>
                  @endforeach
                </div>
             
        
              </div>
              
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div id="arts" class="container  p-3" style="border-radius: 20px ; background-color:rgba(0, 0, 0, 0.695)">
            <h4 style="text-align: start; font-size:25px; font-weight:600; color:white">فنون اسلامية</h4>
            <div class="row row-cols-2 bg-light" style="border-radius: 0px 0px 20px 20px; transform:translateY(10px)">
             @foreach($post9 as $post)
             @if ($loop->first)
              <div class="col-12  my-4">
              </div>   
             @endif
              <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
              <a  href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="card mb-3 " style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
                <div id="culture" class="row g-0">
                  <div class="col-md-4 ">
                    @if($post->image)
                    <img  src="{{url('/Images' , $post->image)}}" class="img-fluid rounded-start" alt="...">
                    @endif
                    @if(!$post->image)
                    <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%;"  alt="">
                    @endif
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text"><small class="text-muted"><svg class=" mx-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar-minus" viewBox="0 0 16 16">
                        <path d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                      </svg>{{$post->updated_at}}</small></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
              @endforeach
            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 col-sm-12 gx-5  " >
        <h4 style="text-align: center; font-weight:700 " class="my-3">الاسلام حياة</h4>
        <div class="row p-1 py-3 " style="background-color: #f4f5f6;">
          <?php $i = 0 ?>
          @foreach($category3 as $cat)
          @if($loop->first)
          @endif
          
          <a  class="IslamLife" id="IslamLife" href="{{route('category' , $cat->id)}}" >
          {{$cat->name}}</a>
          <style>
            #hoverthing{
              text-decoration: none;
            }
            #hoverthing:hover{
              text-decoration: underline;
            }
            



  </style>
          @foreach($post12[$i] as $post)

          <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" id="culture"  style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
            <div class="row g-0">
              <div class="col-md-4">
                @if($post->image)
                <img  src="{{url('/Images' , $post->image)}}" style="height:70px;width:120px; max-width:100%; " class="img-fluid "  alt="...">
                @endif
                @if(!$post->image)
                <img src="/ICONS/makka.jpg" style="height:70px;width:120px; max-width:100%; "  alt="">
                @endif
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text"><small class="text-muted"><svg class=" mx-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar-minus" viewBox="0 0 16 16">
                    <path d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>{{$post->updated_at}}</small></p>
                </div>
              </div>
            </div>
          </a>
          @if($loop->first)
          <hr style=" border-top: 2px dashed gray; background-color:unset ; margin-buttom:10px ">
          @endif
          @endforeach
          <div id="textList" class="d-flex flex-row-reverse  text-muted" style="font-size: 15px" ><a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="text-muted" style="color:black ; font-weight:700">المزيد</a>
            <div style="width:7px;margin-top:10px; height:7px ; background-color:#0e90bf " class="mx-1"></div>

          </div>
          <?php $i++ ?>
          @endforeach

        </div>

      </div>

    </div>

  </div>
<style>
li::marker{margin: 0px !important;}
#textList:hover{text-decoration: underline !important}
</style>
  
  <br>
  <br>
  <br>
 
  <div class="container">
    <div class="row" >
      <div class="col-lg-6 col-md-12 col-sm-12 ">
      <a  href="{{route('Videos')}}"   class="p-2 " style="text-align: start; font-weight:700 ; font-size:30px; ">مكتبة الفيديو</a>
      @foreach($post13 as $post)
      @if($loop->first)
        <iframe style="width:100%; height:380px "   src="https://www.youtube.com/embed/{{$post->VideoUrl}}"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      @endif
      @endforeach
      <div class="row row-cols-2">
      @foreach($post13 as $post)
      @if(!$loop->first)
          <div class="col">
            <div class="card  mx-0 my-3" style="max-width: 520px; height:90px; background-color:#f4f5f600;  position: relative;  ">
              <a href="{{route('ShowPost' , [$post->id, $post->category_id])}}" class="row g-0">
                <div  class="col-md-4"  >
                  <iframe style="width:120px; height:90px ; padding:10px"   src="https://www.youtube.com/embed/{{$post->VideoUrl}}" title="{{$post->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <p class="card-title">{{$post->title}}</p>      
                  </div>
                </div>
              </a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
       </div> 

      <div id="divCon5" class="col-lg-6 col-md-12 col-sm-12"  style="border-radius:10px; background-color:#464e51;height:auto">
        <div class="container"  style="position: relative">
         
          <div class="row" >
            

            <h4 id="divCon" class="my-4" >قرانا لك </h4>
            <div class="card-group">
            @foreach($post28 as $post)
            <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="col-4">
              <div class="card" style="border: none; background-color:unset; color:white; ">
                <img id="card"  style="border-radius: 8px; height:100px" src="https://socialeurope.eu/wp-content/uploads/2022/01/shutterstock_433319491.jpg">
                <div class="card-body">
                  <p class="card-text">{{$post->title}}</p>
                </div>
              </div>
            </a>
            @endforeach
          </div>
          <div class="row mt-4 p-2">
            <h4 style="color:white">ابواب وتصنيفات الكتب</h4>
            @foreach($category4 as $catego)
            <div class="col mt-2" id="gates">
             <h4><a href="{{route('category' , $catego->id)}}">{{$catego->name}}</a></h4> 
            </div>
            @endforeach
            <div  class=" d-flex flex-row-reverse  text-muted" style="font-size: 15px" ><a href="{{route('category' , $catego->id)}}" class="" style="color:white ; font-weight:700">المزيد</a>
              <div style="width:7px;height:7px ; background-color:#0e90bf ; " class="mx-1 my-2"></div>   
            </div>   
          </div>
          </div>
        </div>



      </div>
    </div>
 
  


  <br>
  <br>
  


  <div class="py-3 "  style="background-color:#f5f5f5 ">
    <div class=" container row "  >


      <div class="col-lg-6 col-md-12 col-sm-12">
        <h3 class="text-center my-2">الحقوق في الاسلام</h3>
        <div class="row"  style="border:solid rgba(110, 110, 110, 0.39) 2px; border-radius:20px; background-color:white; padding:3px">
          @foreach($post15 as $post)
          <div class="col-lg-4 col-sm-12 card"  style="border: none ; margin-inline:unset; position:relative; background-color:unset">
            <h5 class="card-title text-center">{{$post->title}}</h5>
            @if($post->image)
            <img style="border-radius: 10px; "  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
            @endif
            <div class="card-body">
              <p class="card-text p-0 m-0">{{Str::limit($post->subject, 20, '...')}}</p>
              <p class="card-text p-0 m-0"><small class="text-muted">{{$post->updated_at}}</small></p>
              <div class="d-flex flex-row-reverse" id="culture"  >
                
                <a  href="{{route('ShowPost' , [$post->id , $post->category_id])}}" style="color:black; font-weight:700" class="text-muted">المزيد
                </a>
                <div style="width:6px;margin-top:10px; height:7px ; background-color:#0e90bf " class="mx-1"></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>



      <div id="hideInfographic" class="col-lg-6 col-md-12 col-sm-12 ">
        <h3 class="text-center my-2">انفوغرافيك</h3>
        <div id="carouselExampleControls"   class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner px-5 my-5"  >
            <div class="carousel-item active" >
              <div class="row"  >
                @foreach($post16 as $post)
                <a  href="{{route('ShowPost' , [$post->id , $post->category_id] )}}" id="backgroundinfographic" class="col-4 card" >
                  <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtT3dGrPUoFQHfV-3zzzhISStJfWlFjlwgrQ&usqp=CAU">
                  <div class="card-body">
                  <div  class="card-text">{{$post->title}}</div>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                @foreach($post17 as $post)
                <a  href="{{route('ShowPost' , [$post->id , $post->category_id] )}}" id="backgroundinfographic" class="col-4 card" >
                  <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtT3dGrPUoFQHfV-3zzzhISStJfWlFjlwgrQ&usqp=CAU">
                  <div class="card-body">
                  <div  class="card-text">{{$post->title}}</div>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                @foreach($post18 as $post)
                <a  href="{{route('ShowPost' , [$post->id , $post->category_id] )}}" id="backgroundinfographic" class="col-4 card" >
                  <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtT3dGrPUoFQHfV-3zzzhISStJfWlFjlwgrQ&usqp=CAU">
                  <div class="card-body">
                  <div id="moveInfoText" class="card-text">{{$post->title}}</div>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
          </div>


          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>



      </div>

    </div>

  </div>

<br>
<br>

<div class="container">


<div class="row">
  <div class="col-lg-7 col-md-7 col-sm-12 border " style="border-radius: 30px;">
    <h3 class="text-center my-3">ادب اسلامي</h3>
   

      <div class="row">
        
        @foreach($post14 as $post )
        <div class="col-lg-6 col-sm-12 d-flex ">   
        <a id="adab" href="{{route('ShowPost' ,[$post->id , $post->category_id])}}" class="card mb-3 " >
          <div class="row g-0">
            <div class="col-md-4">
              @if($post->image)
              <img style="border-radius: 5px; max-width:350px; height:150px"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
              @endif
              @if(!$post->image)
              <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/robert-pattinson-attends-the-go-campaigns-13th-annual-go-news-photo-1594309671.jpg" style="height:150px; width:150px" class="img-fluid rounded-start" alt="...">
              @endif
            </div>
            <div class="col-md-8">
              <div id="adabDiv" class="card-body">
                <h5 class="card-title my-2">{{$post->title}}</h5>
                <div class="d-flex flex-reverse" style="color:black; font-size:14px ; margin:0px">
                  <div class="mt-2 mx-1" style="width:6px; height:6px ; background-color:#0e90bf " ></div>
                د.احمد حمود طاهر 
                </div>
                <p class="card-text"><small class="text-muted"><svg class=" mx-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar-minus" viewBox="0 0 16 16">
                  <path d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>{{$post->updated_at}}</small></p>
              </div>
            </div>
          </div>
        </a>
      </div>
        @endforeach   
    </div>
    
  </div>
  <div class="col-lg-5 col-md-5 col-sm-12 bg-light  border "  style="border-radius: 30px">
    <h3 class="text-center my-3">ديموغرافيا الاسلام</h3>
    <div class="row d-flex justify-content-center my-5">
      @foreach($post21 as $post)
      <a href="{{route('ShowPost' , [$post->id , $post->category_id])}}" id="card" class="col-lg-4 col-sm-12 card " style="border: none; background-color:unset" >
        <img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtT3dGrPUoFQHfV-3zzzhISStJfWlFjlwgrQ&usqp=CAU">
        <div class="card-body">
          <p class="card-text">{{$post->title}}</p>
        </div>
      </a>
      @endforeach
    </div>
    <div class="row mx-3">

      <li> <a href="{{route('category' , 58 )}}" style="color:black; font-weight:700; font-size:20px"> الاطلس الاسلامي </a></li>
      <div class="d-flex ">
        @foreach($post22 as $post)
        @if($post22->count() != 0)
        <li> <a  href="{{route('ShowPost' , [$post->id , 58])}}" style="color:black; font-weight:500; font-size:16px; margin-inline: 10px">{{$post->title}}</a></li>
        @endif
    
        @endforeach
      </div>
      <br>
      <br>
      <hr class="mx-3">
      <li> <a href="{{route('category' , 59 )}}" style="color:black; font-weight:700; font-size:20px"> شواهد اسلامية </a></li>
      <div class="d-flex">
        @foreach($post23 as $post)
        <li> <span style="color:black; font-weight:500; font-size:16px; margin-inline: 10px">{{$post->title}}</span></li>
        @endforeach
      </div>
      <br>
      <br>
      <hr class="mx-3">
      <li> <a href="{{route('category' , 60 )}}" style="color:black; font-weight:700; font-size:20px"> شخصيات اسلامية </a></li>
      <div class="d-flex ">
        @foreach($post24 as $post)
        <li> <span style="color:black; font-weight:500; font-size:16px; margin-inline: 10px">{{$post->title}}</span></li>
        @endforeach
      </div>
      
    </div>
      
  </div>
</div>
</div>



<br>

<br>

<div class="container" id="backKaaba">
  <h4 class="text-center my-3 " style="font-weight: 700">شعائر</h4>
  <div class="row d-flex justify-content-center">
    @foreach($post25 as $post)
    <a id="culture"  style="max-width:500px"; href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="col-sm-6 col-lg-3 ">
      <h5 class="card-title text-center">{{$post->title}}</h5>
      @if($post->image)
      <img style="border-radius: 10px; height:200px"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
      @endif
      @if(!$post->image)
      <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
      @endif
      <div class="card-body">
        <p class="card-text">{!! Str::limit($post->subject , 100 , '...') !!}</p>
      </div>
    </a>
    @endforeach

  </div>
</div>






<div class="container" style="box-shadow: 0px 11px 21px -16px rgba(0,0,0,0.75);">
<div class="row py-5" >
  <div class="col-lg-4 col-sm-12" >
    <h4 class=" my-3 " style="font-weight: 700">قواعد السلوك</h4>
    <div class="row" style="border-inline: solid black 1px  ">
      @foreach($post26[0] as $post )
      <a id="card" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="my-1" style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative; margin-inline=0px">
        <div class="row g-0">
          <div class="col-md-5">
            @if($post->image)
            <img  src="{{url('/Images' , $post->image)}}" style="height:100px" class="img-fluid rounded-start" alt="...">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
            @endif
          </div>
          <div class="col-md-7">
            <div class="card-body my-4">
              <h6 class="card-title p-0 m-0">{{$post->title}}</h6>
              <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  <div class="col-lg-4 col-sm-12" >
    <h4 class=" my-3 " style="font-weight: 700">اخلاقيات الاسلام</h4>
    <div class="row" style="border-left: solid black 1px ">
      @foreach($post26[1] as $post )
      <a id="card" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="my-1" style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
        <div class="row g-0">
          <div class="col-md-5">
            @if($post->image)
            <img  src="{{url('/Images' , $post->image)}}" style="height:100px" class="img-fluid rounded-start" alt="...">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
            @endif
          </div>
          <div class="col-md-7">
            <div class="card-body my-4">
              <h6 class="card-title p-0 m-0">{{$post->title}}</h6>
              <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  <div class="col-lg-4 col-sm-12" >
    <h4 class=" my-3 " style="font-weight: 700"><a href="{{route('category' , 17)}}">منبر</a> </h4>
    <div class="row">
      @foreach($post26[2] as $post)
      <a id="card" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="my-1" style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
        <div class="row g-0">
          <div class="col-md-5">
            @if($post->image)
            <img  src="{{url('/Images' , $post->image)}}" style="height:100px" class="img-fluid rounded-start" alt="...">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
            @endif
          </div>
          <div class="col-md-7">
            <div class="card-body my-4">
              <h6 class="card-title p-0 m-0">{{$post->title}}</h6>
              <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>

</div>
</div>



<br>
<br>
<br>
<br>
<br>

 <div class="container">
  <div class="row">
    <h3 class=" my-3 text-center " style="font-weight: 700">استطلاعات</h3>
    <div class="card-group" style="box-shadow: 0px 11px 21px -16px rgba(0,0,0,0.75);">
          @foreach($post27 as $post)
          <a id="culture" href="{{route('ShowPost' , [$post->id , $post->category_id])}}" class="card">
            @if($post->image)" style="border: unset">
            <img style="border-radius: 10px; max-width:100%"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
            @endif
            <div class="card-body">
              <p class="card-text">{{str::limit($post->subject , 60 , '...')}}</p>
            </div>
          </a>
          @endforeach
          </div>
        </div>
  </div>
 </div>

 <br>
 <br>
 <br>
 <br>








 <h3 class=" my-3 text-center "  style="font-weight: 700"><a href="{{route('images')}}"> مكتبة الصور</a></h3>
<div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner"  style="background-image:none;">
      <div class="carousel-item active " id="ff">
        <div class="row">
          @foreach($posts->take(4) as $post)
                <div class="col-3 ">
                  @if($post->image)
                  <img style="border-radius: 10px; max-width:400px; height:200px"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
                  @endif
                  @if(!$post->image)
                  <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:400px; height:200px "  alt="">
                  @endif
                </div>
          @endforeach
             
        </div>
      </div>
      <div class="carousel-item  " id="ff">
        <div class="row">
          @foreach($posts->take(4) as $post)
          <div class="col-3 ">
            @if($post->image)
            <img style="border-radius: 10px;max-width:400px; height:200px"  src="{{url('/Images' , $post->image)}}" class="card-img-top" alt="https://modo3.com/thumbs/fit630x300/126802/1641363367/%D9%85%D8%A7_%D9%87%D9%8A_%D8%B9%D9%84%D8%A7%D9%85%D8%A7%D8%AA_%D8%BA%D8%B6%D8%A8_%D8%A7%D9%84%D9%84%D9%87_%D8%B9%D9%84%D9%89_%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86.jpg">
            @endif
            @if(!$post->image)
            <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:400px; height:200px "  alt="">
            @endif
          </div>
        @endforeach
        </div>
    
   

  
 
    </div>
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">

    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
 
    </button>
  </div>


  <br>
  <br>
  <br>
  <br>



  <script>
    var text = document.getElementsByClassName('IslamLife');
    var arts = document.getElementById('arts');
    var divCon = document.getElementById('divCon');
    var coverNews = document.getElementById('coverNews');
    var divCon5 = document.getElementById('divCon5');
    var writeColor =  localStorage.getItem("colorTheme");
    var writeText =  localStorage.getItem("textColor");

    for(let i = 0 ; i < text.length ; i++)
    {
      text[i].style.backgroundColor = writeText;
    }
    divCon.style.backgroundColor = writeText;
    divCon5.style.backgroundColor = writeText;
    coverNews.style.backgroundColor = writeText;
    arts.style.backgroundColor = writeText;
    
  </script>

  <style>
      
        .row .col-3 .d-block{
            border-radius: 30px;
        }

/* *{
  border:solid 1px black;
} */

.carousel-indicators button{
  border-radius: 50%;
  width:3px !important;
  padding: 3px !important;
  transform: translateY(50px) !important;
  background-color:white !important;
  border: black solid 0.5px !important;
}

carousel-indicators .active{
  opacity: 1 !important;
  background-color: black !important;
}
#IslamLife{
 text-align:start;
 
 font-weight:400;
 background-color:#464e51; 
 width:150px; 
 color:white; 
 padding:7px;  
 border-radius: 40px 0px 0px 40px; 
 margin-block:10px;
}





#adab{
  max-width: 420px;
   background-color:#f4f5f600;
    border:none; 
    position: relative; 
}

#changeHeight{
  height:250px;
}

#adab:hover  #adabDiv{
  transition: all 0.3s;
  padding-right:20px;
}


#prophetMohammed{
  background-image: url('/ICONS/0011.png');
background-repeat: no-repeat;
background-size: cover;
height:auto;
}


#culture:hover{
text-decoration: underline;
}



#divCon{
  color: white;
   padding-block:15px;
    background-color:#464e51;
    width:170px;
    border-radius: 200px 100px 0px 100px;

    transform: translate(24px,-59px);
    text-align:center; 
    font-size:27px;
}
#divCon2{
  color: black;
   padding-block:5px;
    background-color:white;
    width:170px;
    box-shadow: rgb(143, 143, 143) -1px -1px 0px 0.1px;
    position: absolute;
    font-weight: 500;
    border-radius: 200px 100px 0px 100px;
    transform: translate(34px,-60px);
    text-align:center; 
    font-size:23px;
    z-index: 1;
}

#divCon2{
    cursor: pointer;
}

#divCon3{
  color: white;
  background-color: #464e51;
   padding-block:5px;
   font-weight: 500;
    width:270px;
    box-shadow: rgb(143, 143, 143) -1px -1px 0px 0.1px;
    position: absolute;
    border-radius: 200px 100px 0px 100px;
    transform: translate(-118px,-60px);
    text-align:center; 
    font-size:23px;
    z-index: 0;
}
#divCon3:hover{
  cursor: pointer;
}



#gates{
  background-image:url('/ICONS/pic.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  padding:20px;
  border-radius: 20px;
}



#decor{
  position: absolute;
  width:500px;
  transform: skew(-25deg);
  height:100px;
  right:22%;
  bottom:94%;
  border-radius:30px;
  background-color: white;
}




#backkaaba{
  background-image: url('/ICONS/background.jpg');
  border-radius: 50px;
  padding:20px;
}


#backgroundinfographic{
  background-color:unset !important;
  border: none ;
   margin-inline:unset;
    position:relative;
    text-align: center;
    transition: all 0.4s;

}
#backgroundinfographic img{
  border-radius: 50%;
  height:170px; 
  width:170px;
  margin:auto;
  border:solid 1px black;


}
#backgroundinfographic:hover  #moveInfoText{
  font-size: 20px;
}
.carousel-control-prev-icon{
  color: black !important;
  background-image: url('/ICONS/arrow.png') !important;


}
.carousel-control-next-icon{
  color:black !important;
  background-image: url('/ICONS/arrow.png') !important;
  transform: scaleX(-1);
}

a{
 text-decoration: unset;
  color:black;
}

a:hover{
  text-decoration: inherit;
  color:unset;
}

li{
margin:0px !important;
list-style: square; 
color:rgb(61, 176, 221);
}

.card {
  margin-inline: 20px; 
}
.card .card-text {
  font-weight: 700
}

#card{
text-decoration: none;
color:black;
transition: all 0.4s;
border:none;
}
#card:hover{
padding:10px;
}

        
#support:hover{


padding:5px!important;

}
#support{
transition: 0.2s all;


}





#cor{
/* background-image: url('/ICONS/makka.jpg');
background-repeat: no-repeat;
background-size: cover;
background-position: 0px -400px; */
height: 600px;
width: auto;
}
#cor #item img{

    height: 600px;
  object-fit: cover;
  position: relative;

}


#coverNews{
  background-color: red;
  position: absolute;
  top:81%;
  right:40%;
  padding:10px;
  color:white;
  font-size: 25px;
  font-weight: 600;
}
              #stuff{
                  max-width: 520px; 
                  background-color:#f4f5f600;
                  border:none; 
                  position: relative; 
                  overflow: hidden;
                  margin-inline: 0px !important;
           
                }
                #stuffMade{
                  position: absolute; 
                  background-color:#1abbb3;
                  padding:30px;
                  left:83%;
                  top:50%; 
                  z-index: 1;
                  height:120px;
                  text-align: end;
                  font-weight:700; 
                  transition: all 0.3s;
                  transform:rotate(45deg);
                }
                #textMade{
                  transform: rotate(-45deg) translate(-37px , -18px) ;
                  color: white;
                  text-align: start;
                }
               
              

                @media screen and (max-width:1500px)
                {
                  
    #changeHeight{
      height:

    }
                  #stuff{
                  max-width: 520px; 
                  background-color:#f4f5f600;
                  border:none; 
                  position: relative; 
           
                }
                #stuffMade{
           padding: 3000px
                }
              
                #stuffMade:hover ~  #textMade
                {
                  transform: rotate(-45deg) translate(-35px , -10px) ;
                  color: white;
                  text-align: start;
                left:65%;
                }
           
                /* #textMade{
                  transform: rotate(-45deg) translate(-35px , -10px) ;
                  color: white;
                  text-align: start;
                } */
                }
                /* #stuff:hover > #stuffMade {
                  left:65%;
                } */
                @media screen and (max-width:700px)
                {
                  #changeHeight{
                    height: 110px;
                  }
                  #hideInfographic{
                   visibility: hidden; 
                  }
                }


  </style>



@endsection