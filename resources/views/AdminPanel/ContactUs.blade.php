@extends('AdminPanel.MainPanel')




@section('details')
<div class="p-3 mt-4 container" style="background-color:rgb(255, 255, 255); max-width:1400px; ">
    

      <div class="p-2  text-white " style="background-color:#3a3f41" style="">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg"  width="36" height="36" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
        الرسائل في موقع الاسلام لماذا؟        
      </h2>
      
      
      
      
    </div>
    @if($sent->count())
    @foreach ($sent as $sents)
    
    <div class="container p-0" style="margin-bottom: 200px">
        
        <div class="bg-light border">
            <div class="container">
                @if((new Carbon\Carbon())->diffInMinutes($sents->created_at) < 5) @endif </div>
                    <b style="font-size: 30px">

                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            style="margin:10px; color: rgb(53, 53, 53)" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>رسالة من {{ $sents->fullname }}
                        في تاريخ : {{ $sents->created_at }}
                    </b>

                    <div class="collapse" id="collapseExample{{ $sents->id }}">
                        <div class="card card-body">
                            <b> الرسالة :</b>


                            <div class="border p-3">
                                <p style="color :rgb(73, 73, 73); font-weight:500; font-size:18px">
                                    {{ $sents->subject }}
                                <p style="color :rgb(100, 100, 100); font-weight:200; font-size:15px">
                                    تم الارسال قبل : {{ $sents->created_at->diffForHumans() }}
                                    في تاريخ : {{ $sents->created_at }}
                                <p>
                                    ايميل المرسل : {{ $sents->email }}
                                </p>
                                </p>


                            </div>

                        </div>

                    </div>
                    <form action="{{ route('ContactUsDelete', $sents->id) }}" >
                        <a href="" class="btn btn-success "
                            aria-expanded="true" style="background-color:rgb(40, 40, 40); " aria-controls="collapseExample2" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample{{ $sents->id }}"
                            style="box-shadow:black 2px 4px 10px 0.5px">اظهار
                            الرسالة</a>
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger m-2" style="box-shadow:black 2px 4px 10px 0.5px ; " type="submit"
                            value="حذف الرسالة">

                    </form>
        
                 
                    @endforeach
                    @else
                    <div class="container text-muted border">
                        <h2>
                            لا توجد رسائل حاليا
                        </h2>
                    </div>
                    @endif
               
             


                 

            </div>
        </div>
    </div>
</div>


    @if (session()->has('status'))
    <p id="change" class="border border-dark p-2">
        {{ session()->get('status') }}
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"   class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>
    </p>
    @endif



    <style>
        #change {
            color: white;
            direction: rtl;
            font-size: 20px;
            animation: move 5s;
            border-radius: 5px;
            /* background:linear-gradient(90deg, white 5%,green 100%);  */
            background: rgb(28, 28, 28);
            /* box-shadow:green 1px 1px 1px 1px;   */
            width: 300px;
        
            transform: translate(-150%, 0%);
            position: fixed;
            display: block;
            top: 40;
            left: 0;
            /* height: 100vh;

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 100vw; */
        }

        #lol:hover {
            background-color: black
        }

        @keyframes move {
            0% {}

            50% {
                transform: translateX(-20px)
            }

            80% {
                transform: translateX(-20px)
            }

            90% {
                transform: translateX(-20px)
            }

        }
    </style>
    @endsection