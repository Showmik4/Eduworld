<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Admin</title>
      <!-- plugins:css -->
      <style>
        #d1{
          width: 1400px;height: 300px;
          overflow: scroll;
        }
         </style>
      @include('Guardian.guardiancss')

    </head>
    <body>
   
        <div class="container-scroller">
      @include('Guardian.sidebar')
      <div class="container-fluid page-body-wrapper">
      
      
        <div id="d1">
      <div style="background-color: black">
        <table style="color: blue" class="table">
        <tr align="center">
         <th style="padding: 30px">Name</th>
  
         <th style="padding: 30px">Email</th>


       
         <th style="padding: 30px">Student ID</th>
         <th style="padding: 30px">Guardian ID</th>
         <th style="padding: 30px">Bank</th>
         <th style="padding: 30px">Account Number</th>
         <th style="padding: 30px">Date</th>
         <th style="padding: 30px">Course ID</th>
         <th style="padding: 30px">Course</th>
         <th style="padding: 30px">Total Credit</th>
         <th style="padding: 30px">Total Fees</th>
         <th style="padding: 30px">Delete</th>
         <th style="padding: 30px">Update</th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->name}} </td>
               <td style="padding: 30px"> {{$datas->email}} </td>
               <td style="padding: 30px"> {{$datas->s_id}} </td>
               <td style="padding: 30px"> {{$datas->g_id}} </td>
               <td style="padding: 30px"> {{$datas->bankname}} </td>
               <td style="padding: 30px"> {{$datas->acnumber}} </td>
               <td style="padding: 30px"> {{$datas->date}} </td>

               <td style="padding: 30px"> {{$datas->c_id}} </td>
               <td style="padding: 30px"> {{$datas->course_name}} </td>
               <td style="padding: 30px"> {{$datas->total_credit}} </td>
               <td style="padding: 30px"> {{$datas->total_fees}} </td>
           
              
               <td  style="padding: 30px"><a href="{{url('/view_payslip',$datas->id)}}">PaySlip</a></td>
               <td style="padding: 30px"><a href="{{url('/Update_president',$datas->id)}}">Update</a></td>
              </tr >
          @endforeach
      
  
       
  
  
        </table>
     
      </div>

        </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
    
      @include('Guardian.guardianscript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


