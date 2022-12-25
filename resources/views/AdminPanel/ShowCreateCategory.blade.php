@extends('AdminPanel.MainPanel')



@section('details')


<h2 class="text-white p-3  rounded" style=" background-color:#3a3f41; margin-top : 60px">انشاء قسم جديد</h2>
    <div class="d-flex justify-content-center">

    <div class="container p-5  my-2" style="font-size: 30px ; background-color:white; color:black ; border-radius:0px ; box-shadow:1px 1px 8px 2px rgb(82, 82, 82)">

    <form id="form" method="post" action="{{route('CreateCategory')}}" class="row g-3" enctype="multipart/form-data" >
      @csrf  
      
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">عنوان القسم</label>
          <input type="text " class="form-control  @error('name') is-invalid @enderror" placeholder="عنوان القسم" id="inputEmail4" name="name">
          @error('name')
          <div class="bg-danger m-2 px-2 text-light" style="font-size: 20px">
              يجب اختيار عنوان القسم
          </div>
      @enderror
        </div>


   

        <div class="col-md-6">
          <label for="inputAddress2" class="form-label">القسم التابع له</label>
          <select  style="border-radius: 10px; border:solid rgb(29, 68, 114) 2px; ;padding:3px ; max-width:500px" name="parent_id"  >
            <option hidden style="text-align:center" value="0" selected>القسم الرئيسي</option>
          @foreach($categories as $category)
        
            <option  style="font-size: 30px ; text-align:center; background-color:rgb(255, 255, 255);" value="{{$category->id}}">{{$category->name}}</option>
         
          @endforeach  
          </select>
        </div>
    
        <div class="col-12">
          <button type="submit" class="btn" style="background-color: rgb(43, 95, 129); color:white; font-size:20px; transform:translateY(40px)">انشاء القسم</button>
        </div>
      </form>

    </div>

</div>




<style>

.row div input , textarea{
    background-color: rgb(231, 231, 231) !important;
    border-radius: 15px;
    border: solid rgb(34, 89, 134) 1px !important;
    font-size: 20px !important;
}
textarea{
  font-size: 30px;
}


</style>



@endsection