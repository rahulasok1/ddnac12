<html>

<head>
<title>Test</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/jquery.contextMenu.js" type="text/javascript"></script>
<link href="css/jquery.contextMenu.css" rel="stylesheet" type="text/css"    />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<style>
.image {
  position: relative;
}
#textEx {
  position: absolute;
  font-size: 20px;
  font-weight: bold;
}
</style>





<script type="text/javascript">

 $(function() {
  $("#imgEx").click(function(e) {
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var relativeY = (e.pageY - offset.top);
    var text = document.getElementById('textEx');
    text.textContent = "X: " + relativeX + ' -' + " Y: " + relativeY;
    text.style.left = relativeX + "px";
    text.style.top = relativeY + "px";
  });
});


</script>

</head>

<body>

<form method="POST">
  <div class="image">
    <img id="imgEx" type="image" alt="image" src="https://www.google.co.in/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" style="width:700px; height:600px">
    <span id="textEx"></span>
  </div>
</form>

</body>
</html>