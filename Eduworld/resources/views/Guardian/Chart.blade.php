
  <!DOCTYPE html>
  <html lang="en">
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Guardian</title>
      <style>
      
       
        </style>
      <!-- plugins:css -->
     <!--
    </head>
    <body>
  
        <div class="container-scroller">
    
   
       
    
<!------ Include the above in your HEAD tag ---------->
<div style="height: 400px; width=900px; mirgin:auto;">
  <canvas id="barChart"></canvas>

</div>

    <script>
$(function(){

    var datas=<?php echo json_encode($datas);?>;
     var barCanvas=$("#barChart");
     var barChart=new Chart(barCanvas,(

     type:'bar',
     data:{

        labels:['jan','feb','march','april','may','june','july','august','sep','oct','nov','dec'],
        datasets:[
        {
        label:'New User Growth, 2022',

        data:datas,
        backgoroundColor:['red','blue','yeallow','grey','purple','orange','violet','green','pink','indigo','skyblue','gold']


     }
        ]
     },

     options:{

        scales:{

            yAxes:[{
                ticks:{
                    beginAtZero:true

                    
                }
            }]
        }
     }

     )

     )
})


</script>

      </div>
      


      <!-- container-scroller -->
      <!-- plugins:js -->
    
      
      <!-- End custom js for this page -->
    </body>
   
    
  </html>         


