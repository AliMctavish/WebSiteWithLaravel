














<html lang="en" dir="rtl">

<head>
    <link href="//cdn.quilljs.com/1.2.3/quill.core.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.2.3/quill.core.js"></script>

    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.2.3/quill.js"></script>
    <script src="//cdn.quilljs.com/1.2.3/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.2.3/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.2.3/quill.bubble.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>www.lol.com</title>
    <link rel="stylesheet" href="\index\resources\css\style3.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Core build with no theme, formatting, non-essential modules -->


</head>
<body>




    <nav id="nav" class=" navbar-expand-lg navbar-light" style="background-color:#3a3f41;">
        <div class="container" >
      
          
        <div class="row"  style="">

            <div class=" col-2 mt-2"  style="margin-top: 0px" >
              <img src="{{url('/ICONS/logo.png')}}" style="width:180px;" alt="">
            </div>
            
        <div class="col-6 gx-0" style="margin-top:70px">


          <div>
            <p    class="hide"  style="margin: 0px ; font-weight:600; ; color:rgb(165, 165, 165)">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
              </svg> الأربعاء - 07 رجب 1443 ● 27 شباط 2022 
              {{now()}}
            </p>
            <hr class="hide" style="margin:0px">
            <div class="hide"  >
              <span id ="segel" style="color:white; font-size:15px; font-weight:700">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>  سجل الايام  
              </span>
              <span id="segel2" style="color :#93ece8; font-weight:600; margin-right:3px">
                {{$segel->segel}}
              </span>
              
            </div>
          </div>


        </div>

        <div class="col-4  " id="iconsDetails" >
          <div  class="translator d-flex justify-content-center collapse navbar-collapse
          " id="translator" 
           >
            <div class="px-3">
              <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 7px" width="36" height="36" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
              </svg>
            </div>
            <div class="d-flex" style="margin-top:10px; padding-left: 5px "> 
              <div style="width:10px;margin-top:10px; height:10px ; background-color:gray " class="mx-1"></div>
              <a id="who" href="{{route('WhoAreWe')}}" style="color:white; text-decoration:none; font-size:17px; font-weight:700">من نحن</a>
             
            </div>

            <div class="d-flex" style="margin-top:10px; padding-left: 5px;">
              <div style="width:10px; height:10px ; margin-top:10px;  background-color:gray" class="mx-1"> </div>
              <a id="who2" href="{{route('ContactUs')}}" style="color:white; text-decoration:none ;font-size:17px; font-weight:700">اتصل بنا</a>
            </div>
            </div>

          <div id="icons"  class="icons   d-flex justify-content-center" >
            <div id="themeText" style="font-size:20px; font-weight:600; color:#b8b7b7; margin-left:10px">اختيار الوان الموقع</div>
              <div class="color " id="color" style="
              margin-top:6px; border:solid #b8b7b7 1px; ;background-color: red;cursor:pointer"></div>
              <div id="color" class="color"  style="
              margin-top:6px; border:solid #b8b7b7 1px; ;background-color: #4c8885;cursor:pointer"></div>
              <div id="color" class="color"  style="
              margin-top:6px; border:solid #b8b7b7 1px; ;background-color: orange;cursor:pointer"></div>
              <div id="color" class="color"  style="
              margin-top:6px; border:solid #b8b7b7 1px; ;background-color: gray;cursor:pointer"></div>
           </div>
            <div style="font-size:20px"></div>

              <div id="theme" >
                <svg id="sun" class="mx-1" style="cursor:pointer"  xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                  <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                </svg>

                <svg id="moon" class="mx-1" style="cursor:pointer" xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                  <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                </svg>
              </div>
          </div>



       
         


        </div>
    

        </div>
    </div>
    </div>
    </nav>

     
   
        
        <nav id="navBar" class="navbar  navbar-expand-lg navbar-light header">
        
          <div  class="container" style="padding: 0px; ">
            <form id="formResultForMobile" class="bg-light border" style="border-radius: 20px; ; "  action="{{route('SearchEngine')}}"  >
                          
              <input style="; border:unset; background-color:unset; margin-right:30px" class="p-1 "  placeholder="بحث" name="SearchValue"type="search">
              <button style="position: absolute ; left:88% ; top:4%; border-radius:50%; width:30px; background-color:rgb(225, 225, 225);border:unset; color:#007392"  type="submit"  class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" style="transform: translateX(6px)" width="20" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </button>
              <label style="color: #00729285 ;transform: translate(6px, -1px); " for="searchBar"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></label>
            </form>

     


            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <hr style="padding:1px;">
                 
            <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent" style="border-block-start: solid rgba(0, 0, 0, 0.141) 0.5px; ">
                <ul class="navbar-nav">
                  <form id="formResult" class="bg-light border" style="border-radius: 20px; ; "  action="{{route('SearchEngine')}}"  >
                          
                    <input style="; border:unset; background-color:unset; margin-right:30px" class="p-1 "  placeholder="بحث" name="SearchValue"type="search">
                    <button style="position: absolute ; left:88% ; top:4%; border-radius:50%; width:30px; background-color:rgb(225, 225, 225);border:unset; color:#007392"  type="submit"  class="btn btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" style="transform: translateX(6px)" width="20" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                    </button>
                    <label style="color: #00729285 ;transform: translate(6px, -1px); " for="searchBar"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></label>
                  </form>
                
                  <a  class="nav-link" style="padding-left: 10px;" href="{{route('home')}}" aria-current="page">الرئيسية</a>
                @foreach($categories as $navCat)  
                  @if($navCat->parent_id == 0 && $navCat->isAllowed == 1 )
                    <li class="nav-item dropdown"  style="list-style:unset ; padding-left: 10px; " role="button"   aria-expanded="false">
                      <a id="onHov" class="nav-link dropdown-toggle" style=" margin-right:2px; " href="{{route('category' , $navCat->id)}}" role="button" aria-expanded="false">
                        {{$navCat->name}}
                      </a>
                    
                      @endif    
                      <ul id="hoverd" class="dropdown-menu dropdown-menu-light">
                        @foreach($categories as $subCat)
                        @if($navCat->id == $subCat->parent_id)
                        <a  class="dropdown-item" style="color:white" href="{{route('category' , $subCat->id)}}" type="button"> {{$subCat->name}}</a>
                        @endif
                        @endforeach 
                      </ul>
                    </li> 
                    @endforeach 


                    <li class="nav-item dropend my-2 "  style="list-style:unset ; " role="button"   aria-expanded="false">
                      <a  id="onHov2" class="nav-link dropdown-toggle" style=" margin-right:2px; " href="{{route('category' , $navCat->id)}}" role="button" aria-expanded="false">
                        <ul id="hoverd2" class="dropdown-menu dropdown-menu-light  mx-1 px-1">
                          الاقسام الاخرى                          
                          @foreach($categories as $subCat)
                          @if($subCat->isAllowed != true && $subCat->parent_id == 0)
                          <a  class="dropdown-item" style="color:white" href="{{route('category' , $subCat->id)}}" type="button"> {{$subCat->name}}</a>
                          @endif
                          @endforeach 
                        </ul>
                      </a>
                      </li>

                 
                    
             

                 
                 {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle  " style="border-right: 1px white solid; margin-right:2px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    اقسام اخرى
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach($categories as $navCat)
                    @if($navCat->parent_id == null && $navCat->id > 11)
                    <li class="dropdown-item" type="button">Action</li>
                    @endif     
                 @endforeach 
                  </ul>
                </li> --}}

                <script>
                  var nav = document.getElementById('nav')
                  var getColors = document.getElementsByClassName('color');
                  var navBar = document.getElementById('navBar');
                  var sun = document.getElementById('sun');
                  var moon = document.getElementById('moon');
                  var segel = document.getElementById('segel');
                  var segel2 = document.getElementById('segel2');
                  var translator = document.getElementById('translator');
                  var who = document.getElementById('who');
                  var who2 = document.getElementById('who2');
                 
                  sun.addEventListener("click" ,() => {
                    let setColor = 'white';
                      let setText = '#4c8885';
                      let setTextColor = 'black';
                      let textTrans = 'red';
                      let translator = 'f2f6f8'
                      let who = 'black'
                      localStorage.setItem("colorTheme", setColor);
                      localStorage.setItem("textColor", setText);
                      localStorage.setItem("text", setTextColor);
                      localStorage.setItem("textTrans", textTrans);
                      localStorage.setItem("translator", translator);
                      localStorage.setItem("who", who);
                      
                   
                      location.reload();

                  })
                  moon.addEventListener("click" ,() => {
                    var setColor = '#3a3f41';
                  
                     let translator = 'rgb(95, 95, 95)';
                    let setTextColor = 'white';
                    let TextColor = 'white';
                    let textTrans = '#007392"';
                    let who = 'white'
                      localStorage.setItem("colorTheme", setColor);
                      localStorage.setItem("textColor", textColor);
                      localStorage.setItem("textTrans", textTrans);
                      localStorage.setItem("text", setTextColor);
                      localStorage.setItem("translator", translator);
                      localStorage.setItem("who", who);
                      location.reload();


                  })
                  
                
            
                
            
                  localStorage.getItem("lastname");
                  var colors = ['red', 'skyblue', 'orange' , 'white' , '#3a3f41']
                  var textColor = ['red', '#4c8885', 'orange' , 'gray', '#3a3f41']
                  var text = ['#3a3f41', 'gray', 'black' , 'black', 'red']
                  
            
                  for(let i = 0 ; i < 4 ; i++)
                  {
                    getColors[i].addEventListener("click" ,() => {
            
                     
                      var setText = textColor[i];
                      var setTextColor = text[i];
              
                   
                      localStorage.setItem("textColor", setText);
                      localStorage.setItem("text", setTextColor); 
                
                     
                   
                   
                      location.reload();
            
            
                    })
                  }
                 
                  var writeColor =  localStorage.getItem("colorTheme");
                  var writeText =  localStorage.getItem("textColor");
                  var writeTextColor =  localStorage.getItem("text");
                  var trans =  localStorage.getItem("textTrans");
                  var whos=  localStorage.getItem("who");
                  let translate =  localStorage.getItem("translator");
                  nav.style.backgroundColor =  writeColor;
                  navBar.style.backgroundColor = writeText;
                  segel.style.color = trans;
                  segel2.style.color = trans;
                  translator.style.backgroundColor = translate
        
                  who.style.color = whos
                  who2.style.color = whos
                  console.log(who)
            
                  console.log(navBar)
                  
            
               
            
                  
            
                 
                    </script>
                <style>
                      /* width */
                      ::-webkit-scrollbar {
                      width: 5px;
                      height:10px;
                    }
                    
                    /* Track */
                    ::-webkit-scrollbar-track {
                      box-shadow: inset 0 0 5px grey; 
                      border-radius: 10px;
                    }
                     
                    /* Handle */
                    ::-webkit-scrollbar-thumb {
                      background: gray; 
                      border-radius: 10px;
                    }
                    
                    /* Handle on hover */
                    ::-webkit-scrollbar-thumb:hover {
                      background: #6d6c6c; 
                    }
                  
                  
                  #onHov:hover ~ #hoverd{
                    display: flex !important;
                    transform: translateX(40%) !important;
                    background-color: #71747a !important;
                    border: none !important;
                  }


                  #onHov2:hover ~ #hoverd2{
                    display: block !important;
                    height:200px; 
                    overflow-y:scroll;
                    transform: translateX(70%) !important;
                    background-color: #71747a !important;
                    border: none !important;
                  }
               
                  #hoverd2:hover{
                    display:block !important;
                    background-color: #3a3f41 !important;
                    height:200px; 
                    overflow-y:scroll;
                    transform: translateX(70%) !important;
                    background-color: #71747a !important;
                    border: none !important;
                  }
                  
                  #onHov:hover{
                    display: flex !important;
                    background-color: #71747a ;
                    border-radius: 10px 10px 0px 0px !important;
                    background:linear-gradient(0deg, #71747a, #71747a 0%, #71747a) !important;
                    border: none !important;                        
                  }
                  .dropdown-item:hover{
                    background-color: rgba(0, 0, 0, 0.176) !important;
                  }
                  #onHov{
                    border-radius: 10px 10px 0px 0px !important;                        
                  }
                  
                  #hoverd:hover{
                    display:flex !important;
                    transform: translate(40%) !important;
                    background-color: #71747a !important; 
                  }
                  #hoverd{
                    transition: 1s all;
                  }
              
                
               
                  @media screen and (max-width:980px)
                  {
                    #hoverd:hover{
                    display:block !important;
                    transform: translateX(0%) !important;
           
                  }
                  #hoverd a{
                    font-size: 18px !important;

                  }
                  #onHov:hover ~ #hoverd{
                    display: block !important;
                    transform: translateX(0%) !important;
                  }
                  #onHov2:hover ~ #hoverd2{
                    display: block !important;
                    transform: translateX(0%) !important;
                  }
                  #hoverd2:hover{
                    display:block !important;
                    background-color: #ffffff !important;
                    height:200px; 
                    overflow-y:scroll;
                    transform: translateX(0%) !important;
                    background-color: #71747a !important;
                    border: none !important;
                  }
                  }

                

                  /* @keyframes mov {
                    0%{
                     
                    }
                    100%{
                      transform: translateY(20px)
                    }
                  } */
                </style>
             
                        {{-- <form id="formResult"  class="mt-4" >
                          
                           <label onclick="document.getElementById('SearchBtn').disabled = false" id="searchLabel" for="searchBar"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                           </svg></label>
                          <input placeholder="بحث عام" name="SearchValue" id="searchBar" type="search">
                          <button disabled id="SearchBtn" type="submit"  class="btn btn-primary">بحث</button>
                        </form> --}}
                 
 
                  
               

                </ul>
                <!-- <button class="btn btn-outline-primary mx-1" type="submit">تعديل</button> -->

            </div>
            
        </div>

      </nav>


    <div class="">
     
    @yield('content')
  
 
 
  
    
          
    <footer style="  color:white; ">
        <div class="mx-4" style="padding-top: 200px; ">
            <div class="row"  >

              @foreach($categories->take(8) as $category)
              @if($category->parent_id == 0)
              <div class="col" style="border-left: dotted rgb(66, 66, 66) 2px  ; ">
                <h4 style=" width:140px; font-size:20px ; font-weight:400"><a style="color: skyblue;" id="footCat" href="{{route('category' , $category->id)}}">{{$category->name}}</a></h4>
                @foreach($categories as $subCat)
                @if($subCat->parent_id == $category->id)
                <a id="footCat" class="row m-2" style="color:white;  ; " href="{{route('category' , $subCat->id)}}">{{$subCat->name}}</a>
                @endif
                @endforeach
              @endif
              </div>
              @endforeach
              <style>
                #footCat{
                  text-decoration: unset
                }
                #footCat:hover{
                  text-decoration: underline
                }
              </style>

            </div>

            <div class="container " style="transform: translateY(-50px)">
              <div class="d-flex justify-content-center "  style="margin-top: 200px;" >
                <img src="/ICONS/logo.png" style="max-width:230px; " alt="">
                
              </div>
              <div class="text-center ">
                <a  class="text-center" style="color: rgb(182, 182, 182); font-size:20px; ">للاطلاع على العناوين وطرق الاتصال يرجى زيارة <a   style=" font-size:20px;color:#007392; text-decoration:unset; font-weight:700" href="{{route('ContactUs')}}">اتصل بنا</a></a>
                <h3 class="text-center mt-3" style="color: rgb(182, 182, 182); font-size:20px ; margin:0px; ">حقوق النشر محفوظة لموقع الاسلام لماذا</h3>
              </div>
            </div>



          </div>
    </footer>

</body>




<style>

  

  

.dropdown-menu.show{
 display: flex !important; 
}

footer{
  background-image: url('/ICONS/footerbackground.jpg');
  height: auto;
}
#formResult{
  position: absolute;
  z-index: 1;
  right:72%;
  bottom: -150%;
}

#theme{
  position: absolute;
  right:82%;
  top: 70%;
  color:rgb(207, 207, 207);
}

#color{
  width:20px;
  height: 20px;
  border-radius: 50%;
}

  #iconsDetails{

    position: relative;
  }

  .icons{
    color: aliceblue;
    position: absolute;
    top: 69%;
   
  }

  .translator{
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    background-color: rgb(95, 95, 95);
    width:auto;
    padding-inline: 10px;
    height: 50px;
    font-size: 20px;
    float: left;
  }


  /* *{
    border: solid black 1px;
  } */


    #ff .row .col-3{
        padding:20px !important;
    }


    a{
        cursor: pointer;
    }
 
    nav div .col  {
        color:white;
   
        margin-top: 10px
    }
    nav div .col-2  {
        color:white;
   
        margin-top: 10px
    }
    nav div .col-2 svg  {
      margin-right:5px;
    }
    footer div .col  {
        color:white;
   
        margin-top: 10px
    }
    footer div .col-2  {
        color:white;
   
        margin-top: 10px
    }
    footer div .col-2 svg  {
      margin-right:5px;
    }
  
    #nav1  svg {
      
        color:white;
        margin-top: 15px
    }
    
    .nav-link {
        transition: 0.5s all;
        color: white !important;


        margin-right: 19px;
        padding-right: 0px !important;
        font-weight: 600;
        font-size: 16.5px !important;

    }

    .navbar-nav{
          max-width:1800px;

    } 
    .nav-link{  
    }
    body{
  height:auto !important;
    }
    /* .hide{
    visibility:collapse;
  } */


  #theme{
  position: absolute;
  top: 70%;
  color:rgb(207, 207, 207);
  }


    @media  screen and (max-width: 1400px)
    {
  
    .nav-link {
        transition: 0.5s all;
        color: white !important;
        font-size: 13px !important;
    }
    #moon{
      position: absolute;
    }
    }
  
    @media  screen and (max-width: 1200px)
    {
    .nav-link  a{
        transition: 0.5s all;
        color: white !important;

        font-size: 13px !important;
    }
    .translator{
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    background-color: rgb(95, 95, 95);
    max-width:500px;
    padding-inline: 10px;
    height: 50px;
    font-size: 20px;
    position: absolute;
    right: -100%;
    }
    .translator div{
      transform: translateY(-10px);
    }
    #hoverd .dropdown-item 
    {
             font-size: 12px;
    }

 

    .nav-link {
        transition: 0.5s all;
        color: white !important;
        font-size: 11px !important;
    }
    .hide {
      font-size: 14px !important;
    }
   
    #sun{

    }


    }



    
#formResultForMobile{
  visibility: hidden;
  display:none;
  z-index: 1;
  position: static;
}
    @media  screen and (max-width: 700px){
      .hide{
        display: none;
      }
      #formResult{
        display:none;
      }

      
#formResultForMobile{
  visibility:visible;
  display: inline;
  position: absolute;
  z-index: 1;
  right:20%;
  bottom: -30%;
}
  
  
  .icons{
    right:10%;
  }


  #theme{
  position: absolute;
  right:-50%;
  top: 70%;
  color:rgb(207, 207, 207);
  }
    }

    @media  screen and (max-width: 1000px)
    {
    nav div .col-2 svg 
     {
      margin-right:-5px;
     }
     
     #themeText{
    visibility: hidden;
    display: none;
    
  }


  .hide{
    display: none;
    visibility: hidden;
  }
    #hoverd .dropdown-item 
    {
             font-size: 12px;
    }

     
    .nav-link {
        transition: 0.5s all;
        color: white !important;
        font-size: 18px !important;
    }

  

   
 
    }
  

    

    .nav-link:hover {
        background: linear-gradient(180deg, rgba(118, 187, 219, 0.267) 40%, rgba(255, 255, 255, 0.404) 100%);

        text-decoration: none;
     
        border-radius: 10px;

    }


#searchBar{
  width:0px;
  transform:translateX(-80px);
  margin-right:20px;
  transition: all 1s ;
  border-radius: 10px;
  border: #007392 solid 1px !important;
}
/* #searchBar:hover{
  width:100px;
} */
#searchBar:focus{
  width:200px;
  height:39px;
  padding-right:20px;
  transform: translate(-100px,-4.5px);
  border-width: none !important;
   
}

#searchLabel{
  position: absolute;
  background-color: white;
  padding:10px;
  border-radius: 40%;
  color:black;
  z-index: 1;
  transition: all 0.2s;
  transform: translate(-90px , -6px);
}
#searchLabel:hover{
  background-color: rgb(28, 104, 134);
  cursor: pointer;
}
#SearchBtn{
  position: absolute;
  transform: translate(-100px, -4px);
  background-color:#3a3f41 !important;
}
#searchLabel svg{
width:20px 
}
#searchLabel svg:focus{
  transform: translate(-90px);
}


.container{
  
}



.navbar {
        position: relative;       
        background-color:#3a3f41;
        padding:0px !important;
 

}


#color{
  margin-inline: 1px;
}
</style>





</html>
