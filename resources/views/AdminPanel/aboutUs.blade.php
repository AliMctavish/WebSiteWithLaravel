@extends('AdminPanel.MainPanel')




@section('details')


<form action="{{route('CreateAboutUs')}}" method="POST" >
    @csrf
    @method('POST')

    <div class="form-group" >
        <div class="  p-2 mt-5 text-white " style="background-color:#3a3f41"><h2>من نحن ؟</h2></div>
        <textarea  class="ckeditor form-control "  name="subject" style="height: 6700px"  >{{$data->subject}}</textarea>
    </div>
    
    <button class="btn my-2 btn-success text-end">تعديل</button>

</form>






<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection