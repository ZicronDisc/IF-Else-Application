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

<body>
  <nav class="navBar">
  <a href="index.php">Cartesian</a>
    <a href="telephone.php" class="active">Telephone</a>
    <a href="calculator.php">Calculator</a>
    <a href="words.php">Words</a>
    <div class="line"></div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      </div>

      <!--Letter Number Evaluation-->
      <div class="col-sm-6 whiteSegment">
      <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <div class="form-group">
          <label for="validationCustom01">Input a letter</label>
              <input type="text" class="form-control" 
              id="input" name="letterInput">
              <br>
          </div>
          <button type="submit" class="btn btn-warning">Evaluate</button>
        </form>
      </div>
    </div>

    <div class="col-sm-3">
    </div>
  </div>

  <!--PHP Code for Letter Evaluation-->
  <?php
  $lower = strtolower($_REQUEST["letterInput"]);
  if ($_SERVER["REQUEST_METHOD"] == "GET"){
    switch ($lower) {
      //cases a b c will have value of 2
      case "a": case "b": case "c":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"2",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases e d f will have value of 3
      case "e": case "d": case "f":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"3",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases g h j will have value of 4
      case "g": case "h": case "i":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"4",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases j k l will have value of 5
      case "j": case "k": case "l":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"5",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases m n o will have value of 6
      case "m": case "n": case "o":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"6",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases p q r s will have value of 7
      case "p": case "q": case "r": case "s":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"7",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases t u v will have value of 8
      case "t": case "u": case "v":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"8",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases w x y will have value of 9
      case "w": case "x": case "y":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The corresponding number is",
        text:"9",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      //cases x will have no value hence i doesn't exist in
      //the phone dial
      case "z":
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title: "The letter does not exist in the phone dial",
        showConfirmButton: false,
        timer: 3500
        })
        });
        </script>
        ';
      break;
      default:
      //all characters does doesn't correspond to a letter
      //or a value that has 2 or more letters
        echo'<script type="text/javascript">  
        $(document).ready(function(){
        swal({
        position: "top-end",
        type: "alert",
        title:"Invalid input",
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