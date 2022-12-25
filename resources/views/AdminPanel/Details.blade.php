@extends('AdminPanel.MainPanel')



@section('details')
    

        <div class="d-flex justify-content-between py-3 " style="margin-left:30px" >
            {{-- @for($i = 0 ; $i < 4 ; $i++) --}}
    
                <div class="row "  style="background-color:rgb(255, 255, 255); ">

                    <div class="col-5 p-4 "  style="margin-left:30px;background-color: rgb(64, 209, 161); color:white ;   ">
                        <svg   xmlns="http://www.w3.org/2000/svg" width=76" height="76" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
                          </svg>
                    </div>
                    <div class="col-6 p-1 my-3 text-center text-muted " style="font-size:30px; width:120px ; font-weight:500; transform:translateY(10px) ">
                    {{$posts->count()}}  
                    <p class="text-center text-muted my-1 " style="font-size: 20px; margin:0px; transform:translateY(-20px); padding:0px">
                        عدد المنشورات         
                        </p>           
                    </div>

                </div>
    
                <div class="row"  style="background-color:rgb(255, 255, 255)">

                    <div class="col-5 p-4 "  style="margin-left:30px;background-color: rgb(197, 61, 61); color:white ;   ">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg>
                    </div>
                    <div class="col-6 p-1 my-3 text-center text-muted " style="font-size:30px; width:120px ; font-weight:500; transform:translateY(10px) ">
                    {{$views->count()}}  
                    <p class="text-center text-muted my-1 " style="font-size: 20px; margin:0px; transform:translateY(-20px); padding:0px">
                        عدد الزيارات         
                        </p>           
                    </div>

                </div>
                <div class="row"  style="background-color:rgb(255, 255, 255)">

                    <div class="col-5 p-4  "  style="margin-left:30px;background-color: rgb(250, 189, 68); color:white ;   ">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="66" height="76" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                          </svg>
                    </div>
                    <div class="col-6 p-1 my-3 text-center text-muted " style="font-size:30px; width:120px ; font-weight:500; transform:translateY(10px) ">
                    {{$contacts->count()}}  
                    <p class="text-center text-muted my-1 " style="font-size: 20px; margin:0px; transform:translateY(-20px); padding:0px">
                        عدد الرسائل         
                        </p>           
                    </div>

                </div>
              
                <div class="row "  style="background-color:rgb(255, 255, 255);">

                    <div class="col-5 p-4 "  style="margin-left:30px;background-color: rgb(34, 127, 193); color:white ;   ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="76" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                            <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
                          </svg>
                    </div>
                    <div class="col-6 p-1 my-3 text-center text-muted " style="font-size:30px; width:120px ; font-weight:500; transform:translateY(10px) ">
                    {{$categories->count()}}  
                    <p class="text-center text-muted my-1 " style="font-size: 20px; margin:0px; transform:translateY(-20px); padding:0px">
                        عدد الاقسام         
                        </p>           
                    </div>

                </div>
         

                
                
            </div>
            
            <br>
            <br>
            <br>

            <div class="container  p-0 d-flex justify-content-around " >
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" ></script>
             
                
                <canvas id="myChart" class=" bg-light p-3" style="width:90%;max-width:550px"></canvas>
                
                <script>
                var xValues = ["عدد المنشورات", "عدد الاقسام", "عدد الرسائل", "عدد الزيارات"];
                var yValues = [{{$posts->count()}} , {{$categories->count()}} , {{$contacts->count()}} , {{$views->count()}}];
                var barColors = [
                  "#b91d47",
                  "#00aba9",
                  "#2b5797",
                  "#e8c3b9",
                  "#1e7145"
                ];
                
                new Chart("myChart", {
                  type: "doughnut",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    title: {
                      display: true,
                      text: "احصائيات الموقع"
                    }
                  }
                });
                </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart2" style="width:90%;max-width:550px"></canvas>

<script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>


            </div>



      

  

 

<style>
    body{
        background-color: rgb(243, 243, 243) !important;
    }
</style>















@endsection