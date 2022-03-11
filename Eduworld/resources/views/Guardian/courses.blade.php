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
  </head>
  <body>
    <div class="container-scroller">

    @include('Guardian.sidebar')

    <div class="container">


    <div style="background-color: black">
     

    <h2>Courses Table</h2>
             
    <table class="table">
      <thead>
        <tr>
          <th>Courses</th>
          <th>Total Credit</th>
          <th>Total Fees</th>
        </tr>
      </thead>
      @foreach($data as $datas)
      <tbody>
        <tr>
          <td>{{$datas->course_name}}</td>
          <td>{{$datas->total_credit}}</td>
          <td>{{$datas->total_fees}}</td>
        </tr>
      
      </tbody>
      @endforeach
    </table>
  </div>
  <div style="padding: 60px">
    <a href="{{url('/payment')}}" class="btn btn-info" role="button">Payment</a>

</div>  
    </div>
    </div>
    </div>

  
        
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('Guardian.guardianscript')
    
    <!-- End custom js for this page -->
  </body>
</html>