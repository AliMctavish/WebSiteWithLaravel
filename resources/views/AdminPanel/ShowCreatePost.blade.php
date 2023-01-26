@extends('AdminPanel.MainPanel')



@section('details')


<h2 class="text-white p-3 rounded" style="background-color:#3a3f41;  margin-top : 60px "> <svg xmlns="http://www.w3.org/2000/svg"  style="color:rgb(186, 186, 186)" width="36" height="36" fill="currentColor" class="bi bi-postcard-fill" viewBox="0 0 16 16">
  <path d="M11 8h2V6h-2v2Z"/>
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm8.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5ZM2.5 7a.5.5 0 0 0 0 1H6a.5.5 0 0 0 0-1H2.5ZM2 9.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5Zm8-4v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5Z"/>
</svg>
 اضافة منشور جديد</h2>
    <div class="   d-flex justify-content-center" >

    <div class="container p-5  my-4" style="font-size: 26px ; background-color:white; color:black ; border-radius:20px ; box-shadow:1px 1px 8px 2px rgb(82, 82, 82)">

    <form id="form" method="post" action="{{route('CreatePost')}}" class="row g-3 " enctype="multipart/form-data" >

      @csrf 
      
        <div class="col-md-6" >
          <label for="inputEmail4" class="form-label">عنوان المنشور</label>
          <input  type="text " class="form-control @error('title') is-invalid @enderror"  placeholder="عنوان المنشور" id="inputEmail4" name="title">
        </div>
        @error('title')
        <div  type="text " class="form-control bg-danger text-white" id="inputEmail4" name="title">
          اكتب عنوان المنشور
        </div>
        @enderror
        
        <div id="val4" class="col-md-6">
          <label for="inputEmail4" class="form-label">الكاتب</label>
          <input type="text " class="form-control" placeholder="الكاتب او الباحث" id="inputEmail4" name="writer">
        </div>





       
                         
      <div class="form-group" >
        <label><strong>الموضوع</strong></label>
        <textarea id=editor  class="ckeditor form-control @error('subject') is-invalid @enderror"  name="subject"></textarea>
      </div>
                      
      @error('subject')
      <div  type="text " class="form-control bg-danger text-white" id="inputEmail4" name="title">
        اكتب موضوع المنشور
      </div>        
      @enderror 
           

     


        <div class="@error('category') is-invalid @enderror" class="col-12">
          <label for="inputAddress2" class="form-label">القسم</label>
          <select  id="select" onclick="if(typeof(this.selectedIndex) != 'undefined')
          console.log(this.selectedIndex)
          var val =document.getElementById('input')
            var val3 = document.getElementById('input2');
            var val4 = document.getElementById('val4');
          if(this.value== 61)
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
          
          "  style="border-radius: 10px; border:solid rgb(29, 68, 114) 2px;" name="category_id"  >
            <option hidden style="text-align:center" disabled selected>اختر القسم او القسم الفرعي</option>
          @foreach($categories as $category)
          @if($category->parent_id == 0)
            <option  style="font-size: 40px ; text-align:center; background-color:rgb(110, 110, 110);" value="{{$category->id}}">{{$category->name}}</option>
            <option disabled style="font-size: 30px ;text-align:center ;background-color:rgb(61, 61, 61)rgb(255, 255, 255)or:beige">الاقسام الفرعية</option>
            @foreach($categories as $subCat)
            @if($category->id == $subCat->parent_id)
            <option id="test{{$subCat->id}}" style="background-color:rgb(255, 255, 255)" value="{{$subCat->id}}"> {{$subCat->id}} {{$category->name}}  >> {{$subCat->name}}</option>
            @endif

            @endforeach


          @endif
          @endforeach  
          </select>
        </div>
        @error('category')
        <div  type="text " class="form-control bg-danger text-white" id="inputEmail4" name="title">
           يجب كتابة القسم التابع له
        </div>
        @enderror 
        <label for="inputCity"  class="form-label">رفع صورة</label>
        <div  id="input" class="col-md-8 d-flex " style="height:  60px">
          <input type="file" id="pictureUploader"  placeholder="اختر صورة" name="image" class="form-control" id="inputCity">
        </div>
        @if
        <img id="imageSrc" style="width: 300px "  class="p-2" alt="">
        <div  hidden id="input2" class="col-md-6">
          <label for="inputCity" id="inputCity1" class="form-label">رفع رابط الفيديو</label>
          <input type="text" placeholder="اختر رابط" name="VideoUrl" class="form-control" id="inputCity">
        </div>
    
        <div class="col-12">
          <button type="submit" class="btn" style="background-color: rgb(43, 95, 129); color:white; font-size:20px; transform:translateY(40px)">نشر المنشور</button>
        </div>
      </form>

    </div>

</div>


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
  var pictureUploader = document.getElementById("pictureUploader")
  var imageSrc = document.getElementById("imageSrc");


  console.log(pictureUploader.value);


  pictureUploader.addEventListener('change' , (event) => {
    const file = event.target.files[0];
    const fileReader = new FileReader();
    console.log(pictureUploader.innerHTML)
    
    fileReader.addEventListener('load' , (event) => 
  {
      imageSrc.src = event.target.result;
  })

  fileReader.readAsDataURL(file);


  })


  
  
  
 






  var value = document.getElementById("test29");
  var val3 = document.getElementById('input2');
  var val4 = document.getElementById('val4');

  console.log(val4);

  val3.hidden = true;
  val4.hidden = true;
 
</script>
<script type="text/javascript">
  $(document).ready(function() {
     $('.ckeditor').ckeditor();
  });



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