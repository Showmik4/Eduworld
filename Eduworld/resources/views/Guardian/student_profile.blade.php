<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Guardian</title>
      <style>
       #d1{
         width: 960px;height: 500px;
         overflow: scroll;

     
       }
        </style>
      <!-- plugins:css -->
      @include('Guardian.guardiancss')
    </head>
    <body>
  
        <div class="container-scroller">
      @include('Guardian.sidebar')
   
       
    
<!------ Include the above in your HEAD tag ---------->

<br><br>
    

@foreach($data as $datas)
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
  <div class="card p-4">
      <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="/studentimage/{{$datas->image}}" height="300" width="100" /></button> 
          <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">{{$datas->name}}</span>  </div>
          <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">{{$datas->email}}</span>  </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">{{$datas->session}}</span>  </div>
              <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">CGPA:{{$datas->cgpa}}</span>  </div>
         <!-- <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>-->
          <div class="text mt-3"> <span>{{$datas->phone}}<br><br> </span> </div>
          <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
          <div class=" px-2 rounded mt-4 date "> <span class="join">{{$datas->address}}</span> </div>
          <div class=" d-flex mt-2"><a href="{{url('/courses')}}" class="btn btn-info" role="button">View Courses</a></div>
      </div>
  </div>
</div>



@endforeach








      
      


      </div>
      


      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('Guardian.guardianscript')
      
      <!-- End custom js for this page -->
    </body>

    
  </html>         


