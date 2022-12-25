@extends('AdminPanel.MainPanel')



@section('details')


@if(session()->has('status'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: green; font-size:20px; color:white" >{{session()->get('status')}}</p>

</div>
@endif
@if(session()->has('faild'))
<div class="container" style="position: relative " id="sus">

    <p class="bg-danger" style=" font-size:20px; color:white" >{{session()->get('faild')}}</p>

</div>

@endif
@if(session()->has('statusChange'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: rgb(0, 77, 128); font-size:20px; color:white" >{{session()->get('statusChange')}}</p>

</div>

@endif
<h2 class="text-white p-3 " style="background-color:#3a3f41;  margin-top : 60px">كل الاقسام</h2>
<br>
<div class="container d-flex justify-content-center">




       
    <div class="row d-flex justify-content-center" >
        <div class="row  d-flex justify-content-between bg-light">
                
            <div class="col"   style="font-size:40px; ">
                اسم القسم
            </div>
            <div  class="text-start col" style="font-size:40px">
                تاريخ انشاء القسم
            </div>


            <div  class="text-start col" style="font-size:40px">
                  تعديل على القسم
            </div>
       
            <div  class=" col" style="background-color: unset; color:black; font-size:40px"
            aria-expanded="true"  aria-controls="collapseExample2" data-bs-toggle="collapse">
                 الاقسام الفرعية
        </div> 
            <div  class="col-1" style="background-color: unset; color:black; font-size:40px"
            aria-expanded="true"  aria-controls="collapseExample2" data-bs-toggle="collapse">
                  الحالة
        </div> 
</div>

    @foreach($categories as $category)

          
       
          
           
           
            <div class="row   d-flex justify-content-between">
     
                            <div class="col-3"   style="font-size:30px; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"/>
                                  </svg>   {{$category->name}}
                            </div>
                            <div  class="text-start col" style="font-size:20px">
                                {{$category->created_at}}
                            </div>

                            <div class="col-3 my-3 " style="transform:translateX(-50px)">
                             
                                <a class="btn btn-primary "  href="{{route('ShowCategory',$category->id )}}"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg></a>
                            <a class="btn btn-success " href="{{route('ShowUpdateCategory' , $category->id)}}"> <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg></a>
                          
                            <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$category->id}}" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></a>
                        </div>
                            <div  class=" col-3 " style="background-color: unset; color:black ; transform:translate(-40px,10px);font-size:22px; cursor: pointer;"
                            aria-expanded="true"  aria-controls="collapseExample2" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample{{ $category->id }}"
                            ><svg style="color:black" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                              </svg>
                                عرض الاقسام الفرعية
                            </div> 
                            @if($category->isAllowed)
                           
                            <div  class=" col-1" style="background-color: unset; color:black ; transform:translate(10px);font-size:22px; cursor: pointer;">
                              <a href="{{route('NotAllowed' , $category->id)}}" class="btn btn-success"  style="font-size: 22px">
                                ظاهر
                              </a>
                            </div> 
                            @else
                            <div  class=" col-1" style="background-color: unset; color:black ; transform:translate(10px);font-size:22px; cursor: pointer;">
                              <a href="{{route('Allowed' , $category->id)}}" class="btn btn-danger"  style="font-size: 22px">
                                مخفي
                              </a>
                            </div> 
                            @endif
            </div>
         <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade " style="margin-top: 10%; " id="staticBackdrop{{$category->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="staticBackdropLabel">حذف القسم</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
              <h4>هل انت متاكد من حذف قسم <b>
                {{$category->name}}
            
            </b></h4>
           
         
        </div>
        <div class="modal-footer">
            <form class="col " method="DELETE" action="{{route('DeleteCategory' , $category->id)}}" style="transform: translateY(10px)">
                @csrf
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-danger">نعم</button>
        </form>
        </div>

      </div>
    </div>
  </div>
           
           

      
             
        
            <div class="collapse  px-5 " style="border: solid black 1px ;" id="collapseExample{{ $category->id }}">
                
                  
            
            
                @foreach($SubCategories as $Subcategory)
                    <div class="row  d-flex justify-content-between" >
                        @if($Subcategory->parent_id == $category->id)
                        <div class="border d-flex justify-content-between">

                      
                        <div class="col"   style="font-size:30px; ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                              </svg> {{$Subcategory->name}}
                        </div>
                        <div  class="text-start col" style="font-size:20px">
                            {{$category->created_at}}
                        </div>
                         

                        <div class="col my-2" >
                            @csrf
                         
                            <a class="btn btn-primary "  href="{{route('ShowCategory',$Subcategory->id )}}"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></a>
                        <a class="btn btn-success" href="{{route('ShowUpdateCategory' , $Subcategory->id)}}"> <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a>
                      
                        <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$Subcategory->id}}" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></a>
                        </div>
                      
                    </div>
                    <div class="modal fade " style="margin-top: 10%; " id="staticBackdrop{{$Subcategory->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog" >
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="modal-title" id="staticBackdropLabel">حذف القسم</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                             
                                <h4>هل انت متاكد من حذف قسم <b>
                                  {{$Subcategory->name}}
                              
                              </b></h4>
                             
                           
                          </div>
                          <div class="modal-footer">
                              <form class="col " method="DELETE" action="{{route('DeleteCategory' , $Subcategory->id)}}" style="transform: translateY(10px)">
                                  @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-danger">نعم</button>
                          </form>
                          </div>
                  
                        </div>
                      </div>
                    </div>
                        @endif
                    
                        
                        
                    </div>

                    @endforeach
            
            </div>
            <div class="collapse  px-5 " style="border: solid black 2px" id="collapseExample{{ $Subcategory->id }}">
                
                  
            
            
                @foreach($SubCategories as $Subcategory)
                    <div class="row  d-flex justify-content-between">
                        @if($Subcategory->parent_id == $category->id)
                        <div class="col"   style="font-size:30px; ">
                            {{$Subcategory->name}}
                        </div>
                        <div  class="text-start col" style="font-size:20px">
                            {{$category->created_at}}
                        </div>
                         

                        <form class="col" method="DELETE" action="{{route('DeleteCategory' , $Subcategory->id)}}" style="transform: translateY(10px)">
                            @csrf
                         
                            <a class="btn btn-primary mx-0"  href="{{route('ShowCategory',$Subcategory->id )}}"><svg class="my-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></a>
                        <a class="btn btn-success mx-2" href="{{route('ShowUpdateCategory' , $Subcategory->id)}}"> <svg class="my-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a>
                      
                        <button type="submit" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></button>
                        </form>
                        <div  class=" col" style="background-color: unset; color:black ; transform:translateY(10px);font-size:22px; cursor: pointer;"
                        aria-expanded="true"  aria-controls="collapseExample2" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample{{ $Subcategory->id }}"
                        ><svg style="color:black" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                          </svg>
                            عرض الاقسام الفرعية
                        </div> 
                        @endif
                    
                        
                        
                    </div>
                    @endforeach
            
            </div>
      
      
       
    @endforeach

 
</div>

</div>
<div class="pagination d-flex justify-content-center" >
    {{$categories->links()}}
</div>

<script>

let sus = document.getElementById('sus');
console.log(sus);

    
</script>




<style>

    .pagination .page-link{
        color:black !important;
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
   
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 1300px;
        }
        
        td, th {

         
         
          font-size: 30px;
        
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
      
</style>





@endsection