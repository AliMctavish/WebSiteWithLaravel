@extends('welcome')





@section('content')




  <br>
  <br>
  <br>
  
  
  <div class="container">
    
        <h4 style="background-color:rgb(194, 194, 194) ; padding:10px ; font-size:30px">
          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
          </svg>
             من نحن ؟  
         </h4>
         <div class="d-flex justify-content-center">
          <img src="{{url('/ICONS/logo.png')}}" class="img-fluid" style="max-width:80%;" alt="">
        </div>
         
         <br>
       
         <div class="row d-flex justify-content-center ">

          
          <p  style="">
            {!! $data->subject !!}
          </p>
          
          
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









