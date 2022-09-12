 <?php include('./functions/func_index.php');?>
<!DOCTYPE html>
<html>
<head>
	<title> PC Rx </title>
<meta charset="utf-8">
<meta name="viewport" content=""width="device-width">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap2.min.css">
<link rel = "shortcut icon"  href = "./images/logo.png" />
</head>
<body>
  <o id="top"><p id="arrow"></p></o>  
 <?php include('./header/header.php');?>
 <?php include('./content/content.php');?>
 <?php include('./footer/footer.php');?>

</body>
  <script src="./js/image.js"></script>
<script src="./js/script.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(window).scroll(function(){
      if($(window).scrollTop() > 500)
      {
        $("o").fadeIn();
      }
      else
      {
        $("o").fadeOut();
      }
    });
    $("o").click(function(){
        $("html").animate({scrollTop:0},100);
    });
   </script>
</html>