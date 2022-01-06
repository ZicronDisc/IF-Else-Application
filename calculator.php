<!DOCTYPE html>
<head>
    <title>If & Else</title>
</head>

<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="sweetalert2.all.min.js"></script>

<!--File Linking-->
<link rel="stylesheet" href="main.css">

<!--Responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="main.js"></script>

<body>
  <nav class="navBar">
    <a href="index.php">Cartesian</a>
    <a href="telephone.php">Telephone</a>
    <a href="calculator.php" class="active">Calculator</a>
    <a href="words.php">Words</a>
    <div class="line"></div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      </div>

      <!--Simple Calculator Operations-->
      <div class="col-sm-6 whiteSegment">
      <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>" class="needs-validation" novalidate>
          <div class="form-group">
          <label for="validationCustom01">Input a number</label>
              <input type="number" class="form-control" 
              id="input" name="firstValue" value="12" id="validationCustom01" required>
              <br>
              <input type="number" class="form-control" 
              id="input" name="secondValue" value="12" id="validationCustom01" required>
          </div>
            <button type="submit" class="btn btn-warning" name="expression" value="button1">+</button>
            <button type="submit" class="btn btn-warning" name="expression" value="button2">-</button>
            <button type="submit" class="btn btn-warning" name="expression" value="button3">x</button>
            <button type="submit" class="btn btn-warning" name="expression" value="button4">/</button>
        </form>
      </div>
    </div>

    <div class="col-sm-3">
    </div>
  </div>

  <?php
  //Input management
  $firstValue = $_REQUEST['firstValue'];
  $secondValue = $_REQUEST['secondValue'];

  //Declaration of button
  $expression = $_REQUEST['expression'];

  if ($_SERVER["REQUEST_METHOD"] == "GET"){ 

      switch ($expression){
        case "button1":
          //Expression to add both values
            echo'<script type="text/javascript"> 
            Swal.fire(
              "Sum",
              "';echo$firstValue; echo"+";echo$secondValue;echo"=";echo($firstValue + $secondValue);echo'", 
              )
            </script>
            ';
          break;
        case "button2":
          //Expression to subtract one value to another
            echo'<script type="text/javascript"> 
            Swal.fire(
              "Difference",
              "';echo$firstValue; echo"-";echo$secondValue;echo"=";echo($firstValue - $secondValue);echo'", 
              )
            </script>
            ';
          break;
        case "button3":
          //Expression to multiply a value 
            echo'<script type="text/javascript"> 
            Swal.fire(
              "Product",
              "';echo$firstValue; echo"*";echo$secondValue;echo"=";echo($firstValue * $secondValue);echo'", 
              )
            </script>
            ';
          break;
        case "button4":
          if ($secondValue == 0) {
            //If the divisor is 0
            echo'<script type="text/javascript"> 
              Swal.fire(
                "Cannot divide by zero", 
                )
              </script>
              ';
          }
          else {
            //If the divisor is not 0
            echo'<script type="text/javascript"> 
            Swal.fire(
              "Qoutient",
              "';echo$firstValue; echo"/";echo$secondValue;echo"=";echo($firstValue / $secondValue);echo'", 
              )
            </script>
            ';
          }
          break;
      } 
  }
  ?>
</body>
</html>