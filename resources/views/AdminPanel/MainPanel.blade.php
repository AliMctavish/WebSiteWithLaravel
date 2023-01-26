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
    <title>www.notLoL.com</title>
    <link rel="stylesheet" href="\index\resources\css\style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Core build with no theme, formatting, non-essential modules -->


</head>

<body style="width:100%">



    <nav class=" navbar-expand-lg navbar-light" style="height:45px;background-color:#3b3b3b;">
        <div class="container">
        <div class="row">
            <div class="col-3" style="right:100%">

                <button hidden id="butt" class="nav-item"
                >
                    click me
                </button>
            </div>
        </div>

    </div>

    </nav>


        
      <script>
            let butt= document.getElementById('butt');
            let opened = false;
            var element = document.getElementById('sidebar'); 
           
                butt.addEventListener("click" , () => {
                 if(!opened)
                {        console.log(opened);
                    element.style.transform = 'translateX(0px)'
                    opened = true;
            
                }else  
                element.style.transform = 'translateX(100px)'
                console.log(opened);
                })
 

      </script>

   
     
  
<link rel="stylesheet" href="\index\resources\css\panel.css">



<div class="wrapper" id="wrapper">
    <!-- Sidebar -->
 
    <div id="sidebar"  >
      
        <div class="sidebar-header"  >
        
            <span class="col-2" style="margin-top: 0px" >
                <img src="{{url('/ICONS/logo.png')}}" style="max-width:170px; " alt="">
            </span>
      



            
            
        </div>

        <ul class="navbar-nav list-unstyled components" >

            <li>
            <a href="{{route('AdminPanel')}}" >الرئيسية</a>
            </li>
            <li>
                <a href="{{route('AdminContactUs')}}">رسائل الصفحة </a>
            </li>
            <li>
                <a href="{{route('segel')}}">سجل الايام</a>
            </li>
           
            <li>
                <a href="{{route('aboutUs')}}">من نحن ؟</a>
            </li>
            <li>
                <a href="{{route('home')}}">الذهاب الى الصفحة</a>
            </li>
     
        </ul>

        <ul class="list-unstyled components">           
                  <ul>
                    <li><a class="dropdown-item" href="{{route('ShowCreatePost')}}">اضافة منشور جديد</a></li>
                      <li><a class="dropdown-item" href="{{route('ShowAllPosts')}}">عرض كل المنشورات</a></li>
                      <li><a class="dropdown-item" href="{{route('ShowAllCategories')}}">عرض كل الاقسام</a></li>
                      <li><a class="dropdown-item" href="{{route('ShowCreateCategory')}}">اضافة قسم</a></li>
                  </ul>      
        </ul> 
        <ul class="list-unstyled components">           
            <div class="dropdown mx-3" > 
                <button class="btn" style="color:white; font-size:20px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin:5px" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>{{Auth::user()->name}}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="">تفاصيل الحساب</a></li>
                  <li> 
      
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         تسجيل خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
               
          
                </ul>
              </div> 
    
        </ul>

   
   

    </div>

        <div id="src" class="container">
            @yield('details')
        </div>






</div>




<style>

    #src{
        margin-right:100px;
    }


    @media screen and (max-width:1500px)
    {
        #src{
        margin-right:10px;
        }
     
 
 
    }
    @media screen and (max-width:767px)
    {
        #src{
        margin-right:100px;
        }
        #butt{
           visibility:visible;
        }
      
    }
    @media screen and (max-width:622px)
    {
        #src{
        margin-right:0px;
        }
    }


    .list-unstyled li a{
        font-size:20px !important;
    }
    ul .dropdown-menu{
        background-color: rgba(77, 77, 77, 0.568);
        font-size: 15px;
    }
    .top-container {
        background-color: #2a2a2a;
        padding: 30px;
        text-align: center;
    }

    





  .dropdown-toggle{

        margin-right:30px;

    }

    body {
        font-family: 'Poppins', sans-serif;
        background: white;


    }

    #minecraft {
        background-color: #970584;
        color: #a2bc8e
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        padding: 10px;

        color: rgb(0, 0, 0);
    }

    #con {
        transition: all 2s;

        border-radius: 10px;

        background-color: rgb(255, 255, 255);
        padding-left: 20px;
        margin: 10px;


    }


    #posts {

        padding: 60px;






    }




    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
     

    }
 

    #sidebar {
        background: #262626;
        color: #fff;
        transition: all 0.3s;


    }
    @media screen and (max-width:760px)
    {
        #sidebar {
            background: #000000;
            color: #fff;
            transition: all 0.3s;
            transform:translateX(300px);
            position: absolute;
        }

    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #151515;
    }

    #sidebar ul.components {
        padding: 20px;
        border-bottom: 1px solid #618297;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        position: rtl;
    }

    #sidebar ul li a:hover {
        color: #f6f8f4;
        background: rgb(23, 28, 31);
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #47a44c;
    }

    ul ul a {
        font-size: 0.9em !important;
       
        background-color: rgba(255, 255, 255, 0);
    }

    .wrapper {
        display: flex;

        align-items: stretch;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;

    }

    #sidebar.active {
        margin-left: -250px;
    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    @media screen and (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }

        #sidebar.active {
            margin-left: 0;
        }
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        min-height: 100vh;
    }






    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky+.content {
        padding-top: 102px;
    }
</style>








</div>

<div class="content">

</div>

<script>
    window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
</script>

  
 

 

    

          
    <footer style=" background-color:#323232; height: 40px; color:white; ">
        <div class="container" style="">
            <div class="row" style="margin:auto ;">

    
    



<style>



    .row .col-3{
        padding:0px !important;
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
  
    .nav-link , a{
        transition: 0.5s all;
        color: white !important;
        margin-right:16px !important;
 
        font-size: 18px !important;

    }
    .nav-link{
    
        margin-top: 18px
    }











    body{
  height:auto !important;

  display: inline-block;
    }




    @media  screen and (max-width: 1400px)
    {
    .nav-link , a{
        transition: 0.5s all;
        color: white !important;
        margin-right:0px;
        font-size: 13px !important;
    }
    }
    @media  screen and (max-width: 1200px)
    {
    .nav-link , a{
        transition: 0.5s all;
        color: white !important;
        margin-right:0px;
        font-size: 13px !important;
    }
    }

    @media  screen and (max-width: 1000px)
    {
    nav div .col-2 svg 
     {
      margin-right:-5px;
     }

    }

 

    




    .navbar {
       
        background:#2d2d2d;
        padding:0px !important;
    }
</style>





</html>
