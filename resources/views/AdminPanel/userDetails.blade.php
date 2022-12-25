@extends('AdminPanel.MainPanel')



@section('details')




   <div class="container" style="margin-right:300px">

    <h1 class="" style="    ; text-align:center; ">تفاصيل المستخدم</h1> 
    <table>

        <tr>
            <th>
                اسم المستخدم                
            </th>
            <th>
                انضم في
            </th>
            <th>
                الايميل
            </th>
        </tr>

        <tr> 
        <td>
            {{Auth::user()->name}}
        </td>
        <td>
            {{Auth::user()->created_at}}
        </td>
        <td>
            {{Auth::user()->email}}
        </td>
    </tr>

    </table>


   </div>


<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}



</style>



@endsection