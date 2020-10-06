<?php 
include 'db/config.php';
// mkdir('helloworld');
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Recruitment Monitoring System</title>
  
</head>
<link rel="stylesheet" href="plugins/iziModal/css/iziModal.css">
<link rel="stylesheet" href="plugins/iziModal/css/iziModal.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script src="bootstrap/jquery.min.js"></script>
  <?php
  include 'src/link.php';
?>
<body style="background-image: url('img/hrbg.jpg');background-repeat: no-repeat;background-size: 100%;">

<div class="container">
  <div class="col">
    <div class="row">
          <br><br>
      <div class="col-12" style="background-color: white">
    
       <div id="editor">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  var quill = new Quill('#editor', {
    theme: 'snow'
  });

</script>




<!-- Theme included stylesheets -->

<!-- Core build with no theme, formatting, non-essential modules -->

<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
</body>

</html>