<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Voters</title>

    <base href="/Public">
   
    <!-- plugins:css -->
    @include('Guardian.guardiancss')
  </head>
 
  <body>
    <div class="container-scroller">

    @include('Guardian.sidebar')

   
    <div class="container-fluid page-body-wrapper">
    
    <div style="position: relative; top:60px; right:-150px">
        @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}
        </div>
        @endif
        <form action="{{url('edit_payment',$data->id)}}" method="POST" enctype="multipart/form-data">
          
            @csrf
            <div style="padding: 15px">
         <label> Name </label>
         <input type="text" name="name" class="form-control"  style="color: black" value="{{$data->name}}" />
            </div>

            <div style="padding: 15px">
                <label>Email </label>
                <input type="text" class="form-control" name="email" style="color: black" value="{{$data->email}}" />
                   </div>


                 


                    

                           <div style="padding: 15px">
                            <label>Bank Name </label>
                            <input type="text" class="form-control" name="bankname" style="color: black" value="{{$data->bankname}}" />
                               </div>

                               <div style="padding: 15px">
                                <label>A/C Number</label>
                                <input type="text" class="form-control" name="acnumber" style="color: black" value="{{$data->acnumber}}" />
                                   </div>


                                   <div style="padding: 15px">
                                    <label>Date</label>
                                    <input type="text" class="form-control" name="date" style="color: black" value="{{$data->date}}" />
                                       </div>
        
                                      
                   
           
                   


                   

                        
                           <div style="padding: 15px">
                            
                            <input type="submit" class="btn btn-success" />
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