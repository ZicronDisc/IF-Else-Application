<!DOCTYPE html>
<head>
    <title>If & Else</title>
</head>

<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!--File Linking-->
<link rel="stylesheet" href="main.css">

<!--Responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="main.js"></script>

<body>
  <!--Navigation Bar-->
  <nav class="navBar">
    <a href="index.php" class="active">Cartesian</a>
    <a href="telephone.php">Telephone</a>
    <a href="calculator.php">Calculator</a>
    <a href="words.php">Words</a>
    <div class="line"></div>
  </nav>

  <!--Whiteboard-->
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      </div>

      <!--Cartesian Evaluation-->
      <div class="col-sm-6 whiteSegment">
        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>" class="needs-validation" novalidate>
          <div class="form-group">
          <label for="validationCustom01">Input a number</label>
              <input type="number" class="form-control" 
              id="input" name="xAxis" placeholder="x" id="validationCustom01" required>
              <br>
              <input type="number" class="form-control" 
              id="input" name="yAxis" placeholder="y" id="validationCustom01" required>
          </div>
          <button type="submit" class="btn btn-warning">Evaluate</button>
        </form>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  </div>

  <!--PHP Code for Cartesian Evaluation-->
  <?php 
        $xAxis = $_REQUEST["xAxis"];
        $yAxis = $_REQUEST["yAxis"];
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
          //Origin
          if (($xAxis == 0)&&($yAxis == 0)) {
            echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Origin",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
          }
          //(+,+) Quadrant 1
          else if (($xAxis > 0)&&($yAxis > 0)){
            echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Quadrant 1 (+,+)",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
          }
          //(-,+) Quadrant 2
          else if (($xAxis < 0)&&($yAxis > 0)){
            echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Quadrant 2 (-,+)",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
          }
          //(-,-) Quadrant 3
          else if (($xAxis < 0)&&($yAxis < 0)){
            echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Quadrant 3 (-,-)",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
          }
          //(+,-) Quadrant 4
          else if (($xAxis > 0)&&($yAxis < 0)){
            echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Quadrant 4 (+,-)",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
          }
          //(+,0)&(-,0) x-intercept
          else if ((($xAxis > 0)&&($yAxis == 0))||(($xAxis < 0)&&($yAxis == 0))){
            if ($xAxis > 0) {
              //+x intrecept
              echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Positive x-intercept",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
            }
            else {
              //-x intercept
              echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Negative x-intercept",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
            }
          }
          //(+,0)&(-,0) y-intercept
          else if ((($xAxis == 0)&&($yAxis > 0))||(($xAxis == 0)&&($yAxis < 0))){
            if ($yAxis > 0) {
              //+y intrecept
              echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Positive y-intercept",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
            }
            else {
              //-xy intercept
              echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"Negative y-intercept",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
            }
          }
          else {
            echo'<script type="text/javascript">  
                $(document).ready(function(){
                swal({
                position: "top-end",
                type: "alert",
                title: "Cartesian Evaluation",
                text:"No value is indicated",
                showConfirmButton: false,
                timer: 3500
                })
                });
                </script>
                ';
          }
        }
      ?>

</body>
</html>