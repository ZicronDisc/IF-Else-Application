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

<body>
  <nav class="navBar">
    <a href="index.php">Cartesian</a>
    <a href="telephone.php">Telephone</a>
    <a href="calculator.php">Calculator</a>
    <a href="words.php" class="active">Words</a>
    <div class="line"></div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      </div>

      <!--Simple Calculator Operations-->
      <div class="col-sm-6 whiteSegment">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <div class="form-group">
          <label for="validationCustom01">Input a number</label>
              <input type="number" class="form-control" 
              id="input" name="numTrans">
              <br>
          </div>
            <button type="submit" class="btn btn-warning">Translate</button>
        </form>
      </div>
    </div>

    <div class="col-sm-3">
    </div>
  </div>

  <?php 
  $number = $_REQUEST["numTrans"];
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $wordBank = array(
        '',0 => 'Zero', 1 => 'One', 2 => 'Two', 3 => 'Three',
        4 => 'Four', 5 => 'Five', 6 => 'Six', 7 => 'Seven',
        8 => 'Eight', 9 => 'Nine', 10 => 'Ten', 11 => 'Eleven',
        12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen', 19 => 'Nineteen',
        20 => 'Twenty', 30 => 'Tirty', 40 => 'Fourty', 50 => 'Fifty',
        60 => 'Sixty', 70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety',
        100 => 'Hundred', 1000 => 'Thousand', 
      );

      $string = " ";
      if ($number < 0) {
        //when the input is a negative number
        $string = "The program only accepts positive number";
      }

      else if ($number < 21) {
        //accepts numbers from 1 to 21
        $string = $wordBank[$number];
      }

      else if (($number >= 21) && ($number < 100)) {
          //number 21-99
          $ones = $number % 10;
          $tens = $number - $ones;
          if ($ones == 0) {
            //if the ones place does not have a value
            $string = $wordBank[$number];
          }
          else {
            //if all places has values
            $string = $wordBank[$tens] . " " . $wordBank[$ones];
          }        
      }

      else if (($number >= 100) && ($number < 1000)) {
          //accepts numbers from 100 to 999
          $ones = $number % 10;
          $tens = $number % 100;
          $convert = $tens-$ones;
          $hundred = ($number - $tens)/100;
          if ($tens == 0) {
            //if the tens place does not have any value
            $string = $wordBank[$hundred] . " " . $wordBank[100];
          }
          else if (empty($convert)) {
            //if the tens place does not have any value but the ones has 
            $string = $wordBank[$hundred] . " " . $wordBank[100] . " " . $wordBank[$ones];
          }
          else if ((($tens%10) == 0)||($tens <= 19)) {
            //if the tens place consists of multiples of 10 and numbers from 11-19
            $string = $wordBank[$hundred] . " " . $wordBank[100] . " " . $wordBank[$tens];
          }
          else {
            //if all places has values
            $string = $wordBank[$hundred] . " " . $wordBank[100] . " " . $wordBank[$convert] . " " . $wordBank[$ones];
          }
      }

      else if (($number >= 1000) && ($number <= 9999)){
          //accepts numbers from 1000 to 9999
          $ones = $number % 10;
          $tens = $number % 100;
          $hundred = $number % 1000;
          $convert1 = $tens-$ones;
          $convert2 = ($hundred-$tens)/100;
          $thousand = ($number - $hundred)/1000;

          if ($hundred == 0){
            //if the hundreds place does not have any value
            $string = $wordBank[$thousand] . " " . $wordBank[1000];
          }
          else if (empty($ones)||($convert2 == 0)){
            //if the ones place and the hundreds place does not have any values
            $string = $wordBank[$thousand]." ".$wordBank[1000]." ".$wordBank[$tens];
          }
          else if (empty($tens)){
            //if the tens place does not have any value
            $string = $wordBank[$thousand]." ".$wordBank[1000]." ".$wordBank[$convert2]." ".$wordBank[100];
          }
          else if ((($tens%10) == 0)||($tens <= 19)) {
            //if the tens place consists of multiples of 10 and numbers from 11-19
            $string = $wordBank[$thousand]." ".$wordBank[1000]." ".$wordBank[$convert2]." ".$wordBank[100]." ".$wordBank[$tens];
          }
          else {
            //if all the number places has values
            $string = $wordBank[$thousand]." ".$wordBank[1000]." ".$wordBank[$convert2]." ".$wordBank[100]." ".$wordBank[$convert1]." ".$wordBank[$ones];
          }
      }

      else {
        //when the input is above 9999
        $string = "The program only accepts numbers from 1 to 9999";
      }

    echo'<script type="text/javascript"> 
            Swal.fire(
              "Number to Words Converter",
              "';echo$string ;echo'", 
              )
            </script>
            ';
  }
  ?>

</body>
</html>