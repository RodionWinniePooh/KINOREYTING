<!doctype html>
<head>
  <title>Starrr, for jQuery</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/starrr.css">
  <style type='text/css'>
    img.ribbon {
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      border: 0;
      cursor: pointer; }

    .container {
      margin-top: 60px;
      text-align: center;
      max-width: 450px; }

    input {
      width: 30px;
      margin: 10px 0;
    }
  </style>
</head>
<body>


  <div class="container">


    <h5>Click to rate:</h5>


    <div class='starrr' id='star1'></div>
    <div>&nbsp;
      <span class='your-choice-was' style='display: none;'>
        Your rating was <span class='choice'></span>.
      </span>
    </div>




    
  </div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <script src="dist/starrr.js"></script>

  <script>
    $('#star1').starrr({
      change: function(e, value){
        if (value) {
          $('.your-choice-was').show();
          $('.choice').text(value);
        } else {
          $('.your-choice-was').hide();
          
        }
      }
    });
  </script>

</body>
</html>
