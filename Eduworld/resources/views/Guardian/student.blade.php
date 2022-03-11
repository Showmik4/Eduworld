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
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-150px">
       

        <form action="{{url('add_student')}}" method="POST" enctype="multipart/form-data">

          <div class="form-group">
          @csrf
        <div class="col-xs-4">
         <label for="name"><P>Name</P></label>
         <input style="color: blue" type="text"  class="form-control"  name="name" placeholder="name" required> 
    
        </div>
    
        <div class="col-xs-4">
            <label for="email">Email</label>
            <input style="color: blue" type="text"  class="form-control" name="email" placeholder="Email" required> 
       
           </div>

           <div class="col-xs-4">
            <label for="email">Session</label>
            <input style="color: blue" type="text"  class="form-control" name="session" placeholder="Session" required> 
       
           </div>
    
         

           <div class="col-xs-4">
            <label for="phone">Phone</label>
            <input style="color: blue" type="text"  class="form-control" name="phone" placeholder="Phone" required> 
       
           </div>
           
           <div class="col-xs-4">
            <label for="address">Adress</label>
            <input style="color: blue" type="text"  class="form-control" name="address" placeholder="Address" required> 
       
           </div>

           <div class="col-xs-4">
            <label for="password">CGPA</label>
            <input style="color: blue" type="text"  class="form-control" name="cgpa" placeholder="cgpa"  required> 
       
           </div>
           
           <div>
            <label>Image</label>
            <input class="form-control" style="color: blue" type="file"  name="image"  required> 
       
           </div>
           
           
           <div>
           <input style="color: black" class="btn btn-info" type="submit" value="Save">
    
           </div>
          
        </form>
      </div>

     
      </div>
        </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('Guardian.guardianscript')
      
      <!-- End custom js for this page -->
    </body>

    
  </html>         


