@extends('AdminPanel.MainPanel')



@section('details')


<h1 style="font-size:70px; text-align:center; margin-top : 60px">تعديل منشور</h1>
    <div class="container p-5  d-flex justify-content-center" >

    <div class="container p-5  my-4" style="font-size: 30px ; background-color:white; color:black ; border-radius:30px ; box-shadow:1px 1px 8px 2px rgb(82, 82, 82)">

    <form id="form" method="post" action="{{route('UpdatePost' , [$data->id , $data->category_id])}}" class="row g-3" enctype="multipart/form-data" >
      @csrf 
      @method('PUT')
      
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">عنوان الخبر</label>
          <input type="text " class="form-control" placeholder="عنوان المنشور" id="inputEmail4" value="{{$data->title}}" name="title">
        </div>
        <div id="val4" class="col-md-6">
          <label for="inputEmail4" class="form-label">الكاتب</label>
          <input type="text " class="form-control" placeholder="الكاتب او الباحث" id="inputEmail4" name="writer">
        </div>


       
                         
                              <div class="form-group">
                                  <label><strong>الموضوع</strong></label>
                                  <textarea   class="ckeditor form-control "  name="subject" >{{$data->subject}}</textarea>
                              </div>
                      
                       
           



        <div class="col-12">
          <label for="inputAddress2" class="form-label">القسم</label>
          <select onclick="
          if (typeof(this.selectedIndex) != 'undefined')
        
          var val =document.getElementById('input')
            var val3 = document.getElementById('input2');
            var val4 = document.getElementById('val4');
          if(this.value == 61 )
          {
            val.hidden = true;
            val3.hidden = false;
          }else
          {
            val.hidden = false;
            val3.hidden = true;
          }
          if(this.value == 55 || this.value == 56 || this.value == 57)
          {
            val4.hidden = false;
          }else
          {
            val4.hidden = true;
          }
          "
            style="border-radius: 10px; border:solid rgb(29, 68, 114) 2px;" name="category_id"  >
            <option value="{{$data->category_id}}" hidden style="text-align:center"  selected>
              @foreach($categories as $category)
              @if($category->id == $data->category_id)
              {{$category->name}}
              @endif
              @endforeach
            </option>
          @foreach($categories as $category)
          @if($category->parent_id == 0)
            <option  style="font-size: 40px ; text-align:center; background-color:rgb(255, 255, 255);"  value="{{$category->id}}">{{$category->name}}</option>
            <option disabled style="font-size: 30px ;text-align:center ;background-color:rgb(59, 59, 59); color:rgb(255, 255, 255)">الاقسام الفرعية</option>
            @foreach($categories as $subCat)
            @if($category->id == $subCat->parent_id)
            <option id="test{{$subCat->id}}" onclick="console.log('okay')" style="background-color:rgb(255, 255, 255)" value="{{$subCat->id}}">{{$category->name}}  >> {{$subCat->name}}</option>
            @endif

            @endforeach


          @endif
          @endforeach  
          </select>
        </div>
        <div id="input" class="form-group border" >
          <label for="link">الصورة الحالية : {{ $data->image }}</label>
          <img src="{{url('/Images' , $data->image)}}" class="img-fluid" style="width:200px" alt="no image">
          <br>
          <label for="link" class="text-muted"> رفع صورة اخرى</label>
          <input type="file" placeholder="اختر صورة" name="image" class="form-control" id="inputCity">
      </div>

        <div  hidden id="input2" class="col-md-6">
          <label for="inputCity" id="inputCity1" class="form-label">رفع رابط الفيديو</label>
          <input type="text" placeholder="اختر رابط"  name="VideoUrl" class="form-control" id="inputCity">
        </div>
    
    
        <div class="col-12">
          <button type="submit" class="btn" style="background-color: rgb(43, 95, 129); color:white; font-size:20px; transform:translateY(40px)">نشر المنشور</button>
        </div>
      </form>

    </div>

</div>



<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>


<script>
  var value = document.getElementById("test29");
  var val3 = document.getElementById('input2');
  var val4 = document.getElementById('val4');

  

  val3.hidden = true;
  val4.hidden = true;
 
</script>


<style>

.row div input , textarea{
    background-color: rgb(231, 231, 231) !important;
    border-radius: 15px;
    border: solid rgb(34, 89, 134) 1px !important;
    font-size: 30px !important;
}


</style>



@endsection