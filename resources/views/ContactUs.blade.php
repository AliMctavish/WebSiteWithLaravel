@extends('welcome')



@section('content')




<div class="container p-5" >
    <span><a id="card" href="{{route('home')}}">الاسلام لماذا..؟</a></span>
    <span>>></span>

   

    <span style="font-size: 18px ; font-weight:700">للاتصال بنا</span>
    <br>
    <br>
    <br>
    @if(session()->has('status'))
    <div class="container" style="position: relative " id="sus">
    
        <p style="background-color: green; font-size:20px; color:white" >{{session()->get('status')}}</p>
    
    </div>
    
    @endif

        <div  class="flex-grow-1" style="font-size: 23px ; font-weight:700; ">عناوين ادارة الموقع</div>


    <div class="row">
            <div class="col-lg-8 col-sm-12 " style="padding-left:40px">
               
                <div id="details" class="row text-muted">
                    <span class="col-lg-6 col-md-12 col-sm-12">مدير الموقع        </span>
                    <span class="col-lg-3 col-md-12 col-sm-12">078037146442       </span>
                    <span class="col-lg-2 col-md-12 col-sm-12">ahmed@gmail.com       </span>
                </div>
                <div id="details" class="row text-muted">
                    <span class="col-lg-6 col-md-12 col-sm-12">صفحة مقالات        </span>
                    <span class="col-lg-3 col-md-12 col-sm-12">078037146442       </span>
                    <span class="col-lg-2 col-md-12 col-sm-12">ahmed@gmail.com       </span>
                </div>
                <div id="details" class="row text-muted">
                    <span class="col-lg-6 col-md-12 col-sm-12">مدير التحرير</span>
                    <span class="col-lg-3 col-md-12 col-sm-12">078037146442       </span>
                    <span class="col-lg-2 col-md-12 col-sm-12">ahmed@gmail.com       </span>
                </div>
                <div id="details" class="row text-muted">
                    <span class="col-lg-6 col-md-12 col-sm-12">مدير منصات التواصل الاجتماعي</span>
                    <span class="col-lg-3 col-md-12 col-sm-12">078037146442       </span>
                    <span class="col-lg-2 col-md-12 col-sm-12">ahmed@gmail.com       </span>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>

                <div  class="flex-grow-1" style="font-size: 23px ; font-weight:700; ">صفحاتنا على منصات التواصل الاجتماعي</div>

                <div id="lol" class="container p-4">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg></span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg></span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg></span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg></span>
                  

                </div>


                <br>
                <br>
                <br>
                <br>
                <div  class="flex-grow-1" style="font-size: 23px ; font-weight:700; ">ارسل رسالة</div>


                <form class="p-3" action="{{route('SendContactUs')}}" method="POST">
                    @csrf
                    
                <div class="row my-2 align-items-center ">
                    <div class="col-3 ">
                        <label for="inputPassword6" style="font-weight: 600 ; font-size:20px" class="col-form-label">الاسم</label>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <input type="text" id="inputPassword6" name="name" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" style="font-weight: 600 ; font-size:20px" class="col-form-label">عنوان الرسالة</label>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <input type="text" id="inputPassword6" name="title" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" style="font-weight: 600 ; font-size:20px" class="col-form-label">نص الرسالة</label>
                    </div>
                    <div class="col-lg-9 col-md-5">
                        <textarea style="width:100%; height:300px" name="subject" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn btn-success px-5 ">ارسال</button>
                </div>
                </form>
                
                
                    
<style>
    #details{
        font-size: 23px;
        
    }
    #lol span svg{
        margin-inline: 30px;
        font-size: 50px;
        color:blue;
    }
   
</style>
           
               
                  
                
            </div>
          
        
        <style>
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
          #card2{
            text-decoration: none !important;
            color:black !important;
            transition: all 0.4s;
            border:none;
          }

          #card2:hover{
            padding:10px;
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="col-lg-4 col-md-8  col-sm-12  gx-5" >
          @foreach($categories->take(3) as $postCat)
          <div class="row my-4  " style="background-color: #f4f5f6;"  >
              <a href="{{route('category' , $postCat->id)}}" class="theme p-1" style="text-align:start;font-size:16px; font-weight:700; background-color:#464e51; width:130px; color:white  ;  border-radius: 0px 00px 0px 20px; margin-bottom:20px; text-decoration:unset;">{{$postCat->name}}</a>
              @foreach($posts->where('category_id' , $postCat->id)->take(2) as $post)
              @if($post->category_id == $postCat->id  )
              <a href="{{route('ShowPost' , [$post->id , $postCat->id])}}" id="card" class="card mb-3 " style="max-width: 420px; background-color:#f4f5f600; border:none; position: relative;">
                <div class="row g-0">
                  @if($post->image)
                  <div class="col-md-4">
                    <img style="" src="{{url('/Images' , $post->image)}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  @endif
                  @if(!$post->image)
                  <div class="col-md-4">
                    <img src="/ICONS/makka.jpg" style="border-radius: 10px; max-width:100%; "  alt="">
                  </div>
                  @endif
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>

                       <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
                    </div>
                  </div>
                </div>
              </a>
              
              
              @endif

            

              @endforeach
    
              @if($posts->where('category_id' , $postCat->id)->count() == 0)
                <div class="container border text-muted">
                  لاتوجد منشورات في هذا الفسم
                </div>
              @endif
              
            </div>
            <div class="d-flex justify-content-end">
              <a id="more" class="btn btn-dark" style="border-radius:0px; width:32%; padding:3px ; font-weight:600" href="{{route('category' , $postCat->id)}}" >المزيد</a>
            </div>
            @endforeach
            
            </div>


    </div>


</div>


<script>

  var theme = document.getElementsByClassName("theme")
  
  var writeColor =  localStorage.getItem("colorTheme");
  var writeText =  localStorage.getItem("textColor");
  
  for(let i = 0 ; i < theme.length ; i++)
      {
        theme[i].style.backgroundColor = writeText;
       
  
      }
  </script>


<style>
  #more{

  }
</style>



@endsection