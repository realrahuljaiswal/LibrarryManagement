<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <style>
    .preloader {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 9999;
   background-image: url('lod1.gif');
   background-repeat: no-repeat; 
   background-color: #FFF;
   background-position: center;
}
    </style>

    <script>
    $(document).ready(function(){

        $(window).load(function() {
   $('.preloader').fadeOut('slow');
});

    });
    
    </script>


</head>
<body>
<div class="preloader"></div>
</body>
</html>