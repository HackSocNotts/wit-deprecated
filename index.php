<!DOCTYPE html>
<html lang="en-gb">

<!--
-
- Why are you reading the source,
- go apply already! You are worth it!
- ~harrymt
-
  -->
<head>
  <!-- Character encoding -->
  <meta charset="utf-8">
  <!-- IE compatibility mode -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Women in Tech conference">
  <meta name="author" content="HackSoc Nottingham">

  <title>Women in tech</title>

  <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Some pretty fonts -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body id="page-top" class="index">

  <?php include 'header.php';?>

  <?php include 'nosponsors.php';?>

  <?php include 'about.php';?>

  <?php include 'sponsors.php';?>

  <!-- Contact form, not yet used -->
  <!-- include 'contact.php'; -->

  <?php include 'footer.php';?>

  <!-- jQuery Version 1.11.0 -->
  <script src="js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
    // Function to loop around and display different words every x seconds
    var w = 0;
    window.setInterval(function() {
      var words = ["Students", "Women", "Men"];
      $('.moving_text').fadeOut("slow", function () {
        $('.moving_text').text(words[w++]);
      });
      $('.moving_text').fadeIn("slow");

      if (w == words.length) {
        w = 0;
      }
    }, 3000);
  </script>

  <!-- Contact Form JavaScript -->
  <!-- <script src="js/jqBootstrapValidation.js"></script> -->
  <!-- <script src="js/contact_me.js"></script> -->

</body>

</html>
