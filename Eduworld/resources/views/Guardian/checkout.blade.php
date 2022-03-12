<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guardian</title>
    <!-- plugins:css -->
    @include('Guardian.guardiancss')
    @include('Guardian.checkoutcss')
  </head>
  <body>
    <div class="container-scroller">

    @include('Guardian.sidebar')

    <div class="container">


      
        <div class="row">
          <div class="col-75">
            <div class="container">
              <form action="{{url('givepayment')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="row">
                  <div class="col-50">
                    <h3>Billing Address</h3>
                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" name="name" placeholder="Name" required>
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="email" placeholder="john@example.com" required>
                    <label for="s_id"><i class="fa fa-envelope"></i>Student ID</label>
                    <input type="text" id="adr" name="s_id" placeholder="student id" required>
                    <label for="g_id"><i class="fa fa-envelope"></i>Guardian ID</label >
                    <input type="text" id="city" name="g_id" placeholder="guardian id" required>
        
                  </div>
                
                  <div class="col-50">
                    <h3>Payment</h3>
                  
                    
                    <label for="cname">Bank Name</label>
                    <input type="text" id="cname" name="bankname" placeholder="Give Bank Name" required>
                    <label for="ccnum">A/C No</label>
                    <input type="text" id="ccnum" name="acnumber" placeholder="1111-2222-3333-4444" required>
                    <label for="expmonth">Payment Date</label>
                    <input type="text" id="expmonth" name="date" placeholder="September" required>

                    <label for="expmonth">Course Id</label>
                    <input type="text" id="expmonth" name="c_id" placeholder="Course ID" required>
                   
                  </div>
                  
                </div>
              
                <input type="submit" value="Continue to checkout" class="btn">
              </form>
            </div>
          </div>
          @foreach ($data as $datas)
              
         
          <div class="col-25">
            <div class="container">
              <h4>Course Details <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
              <p><a href="#">Courses</a> <span class="price">{{$datas->course_name}}</span></p>
              <p><a href="#">Credit</a> <span class="price">{{$datas->total_credit}}</span></p>
              <p><a href="#">Fees</a> <span class="price">{{$datas->total_fees}}</span></p>
             
              <hr>
              
            </div>
          </div>

          @endforeach
        </div>





    </div>
    </div>
   

  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('Guardian.guardianscript')
    
    <!-- End custom js for this page -->
  </body>
</html>