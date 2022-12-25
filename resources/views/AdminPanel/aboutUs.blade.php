@extends('AdminPanel.MainPanel')




@section('details')


<form action="{{route('CreateAboutUs')}}" method="POST" >
    @csrf
    @method('POST')

    <div class="form-group" >
        <label><h1>من نحن ؟</h1></label>
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