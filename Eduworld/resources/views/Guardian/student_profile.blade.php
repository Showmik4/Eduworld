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
@foreach ($data as $datas)
<div class="container-fluid well span6" style="padding: 60px">
	<div class="row-fluid">
        <div class="span2" >
		    <img height="200px" width="200px" src="/studentimage/{{$datas->image}}" class="img-circle">
        </div>
        
        <div class="span8">
           
            <h6>Email:{{$datas->email}}</h6>
            <h6>Session:{{$datas->session}}</h6>
            <h6>Phone:{{$datas->phone}}</h6>
            <h6>Address:{{$datas->address}}</h6>
            <h6>CGPA:{{$datas->cgpa}}</h6>
          
        </div>
       
            
       
        <div class="span2">
            <div class="btn-group">
               
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                    <li><a href="#"><span class="icon-trash"></span> Delete</a></li>
                </ul>
            </div>
        </div>

       
</div>
</div>
@endforeach       
      
<div style="padding: 60px">
    <a href="{{url('/courses')}}" class="btn btn-info" role="button">View Courses</a>

</div>  
      
      


      </div>
      


      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('Guardian.guardianscript')
      
      <!-- End custom js for this page -->
    </body>

    
  </html>         


