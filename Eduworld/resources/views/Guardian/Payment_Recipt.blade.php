

<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

body {
    margin-top: 20px;
}


</style>



</head>

<body id="body">
  @foreach($data as $datas)
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>American Internation Univarsity Bangladesh</strong>
                        <br>
                        Kuratoli, Dhaka
                        <br>
                     
                        <br>
                        <abbr title="Phone">Phone:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        
                    </p>
                    <p>
                      
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
             
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Bank Name</th>
                          
                            
                            <th  class="text-center">Student ID</th>
                            <th  class="text-center">Guardian ID</th>
                            <th  class="text-center">A/C Number</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    
                        <tr>
                            <td  class="col-md-1 text-center">{{$datas->bankname}}</em></h4></td>
                            
                           
                            <td  class="col-md-1 text-center">{{$datas->s_id}}</td>
                            <td  class="col-md-1 text-center">{{$datas->g_id}}</td>
                            <td  class="col-md-1 text-center">{{$datas->acnumber}}</td>
                            
                        </tr>
                       
                       
                     
                    
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Courses: </strong>
                            </p>
                            <p>
                                <strong>Total Credit: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>{{$datas->course_name}}</strong>
                            </p>
                            <p>
                                <strong>{{$datas->total_credit}}</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong> Total:</strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>{{$datas->total_fees}}</strong></h4></td>
                        </tr>

          
                    </tbody>
                </table>
               
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>
@endforeach
</body>
    </html>