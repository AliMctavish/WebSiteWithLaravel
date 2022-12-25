@extends('AdminPanel.MainPanel')




@section('details')
@if(session()->has('statusChange'))
<div class="container" style="position: relative " id="sus">

    <p style="background-color: rgb(26, 128, 0); font-size:20px; color:white" >{{session()->get('statusChange')}}</p>

</div>

@endif

<form action="{{route('segelUpdate' , $segel->id)}}" method="POST" >
    @csrf
    @method('POST')

    <div class="form-group mt-5"  >
        <label><h1>تعديل سجل الايام</h1></label>
       <h3 class="text-muted">هنا يتم كتابة المناسبات في داخل السجل</h3>
        <input type="text"  class="ckeditor form-control " name="segel" value="{{$segel->segel}}" placeholder="{{$segel->segel}}"  name="subject" style="height: 30px" >
    </div>
    

    <button class="btn my-2 btn-success text-end">تعديل</button>
</form>




<style>
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
@endsection