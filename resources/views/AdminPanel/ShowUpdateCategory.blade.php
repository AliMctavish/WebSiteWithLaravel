@extends('AdminPanel.MainPanel')



@section('details')


<h1 style="font-size:70px; text-align:center; margin-top : 60px">تعديل القسم </h1>
    <div class="container p-5  d-flex justify-content-center">

    <div class="container p-5  my-4" style="font-size: 30px ; background-color:white; color:black ; border-radius:30px ; box-shadow:1px 1px 8px 2px rgb(82, 82, 82)">

  <form id="form" method="post" action="{{route('UpdateCategory' , $category->id)}}" class="row g-3" enctype="multipart/form-data" >
      @csrf  
      @method('PUT')
      
        <div class="col-6" >
          <label for="inputEmail4" class="form-label">عنوان القسم</label>
          <input type="text " class="form-control" placeholder="{{$category->name}}" id="inputEmail4" value="{{$category->name}}" name="name">
        </div>

     

        <div class="col-4 mt-4 mx-5">
          <label for="inputAddress2" class="form-label">القسم التابع له</label>
          <select  style="border-radius: 10px; border:solid rgb(29, 68, 114) 2px;" name="parent_id"  id="cars">
            @if($category->parent_id != 0)
            <option hidden style="text-align:center" disabled selected>{{$category->name}}</option>
            @endif
            <option  style="font-size: 30px ; text-align:center; background-color:rgb(255, 255, 255);" value="0">قسم رئيسي</option>
          @foreach($categories as $category)
          @if($category->parent_id == 0)
            <option  style="font-size: 30px ; text-align:center; background-color:rgb(255, 255, 255);" value="{{$category->id}}">{{$category->name}}</option>
          

          @endif
          @endforeach  
          </select>
        </div>
    
      
        <div class="col-4" style="transform: translate(-20px,20px)">
          <label for="inputAddress2" class="form-label">ترتيب القسم</label>
          <select  style="border-radius: 10px; border:solid rgb(29, 68, 114) 2px;" name="sort_category"  id="cars">
            @for($i = 1 ; $i < 12 ; $i++)
            <option  style="font-size: 30px ; text-align:center; background-color:rgb(255, 255, 255);" value="{{$i}}">{{$i}}</option>
            @endfor

          </select>
        </div>

    
        <div class="col-12">
          <button type="submit" class="btn btn-success" style=" color:white; font-size:20px; transform:translateY(40px)">تعديل القسم</button>
        </div>
      </form>

    </div>

</div>




<style>

.row div input , textarea{
    background-color: rgb(231, 231, 231) !important;
    border-radius: 15px;
    border: solid rgb(34, 89, 134) 1px !important;
    font-size: 30px !important;
}
textarea{
  font-size: 30px;
}


</style>



@endsection