
<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'admin')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>

    <!-- Bootstrap Css -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->

    <!-- Common Css -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->

    <!-- Nav Css -->
    <link rel="stylesheet" href="../css/style4.css">
    <!--// Nav Css -->

    <!-- Fontawesome Css -->
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <link href="../css/admin.css" rel="stylesheet">

    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <link rel="stylesheet" href="../css/bookload.css">

    <style>
   


    </style>


    <script type="text/javascript">

    var data = "";
  $(document).ready(function(){

    // Autocomplete Textbox
    $("#email").keyup(function(){
      var email = $(this).val();

      if(email != ''){
         $.ajax({
            url: "loadbookingemail.php",
            method: "POST",
            data: { email: email},
            success: function(data){
              console.log(data);
              $("#emaillist").fadeIn("fast").html(data);
            }
         }); 
      }else{
        $("#emaillist").fadeOut();
      
      }
    });

     // Autocomplete List Click Code
     $(document).on('click','#emaillist li',function(){
      $('#email').val($(this).text());
      $("#emaillist").fadeOut();

      em = $(this).text();

      $.ajax({
            url: "loadbookingemailname.php",
            method: "POST",
            data: { email: em},
            success: function(data){
                $('#name').val(data); 
            }
         }); 

    });

    // book name


    // Autocomplete Textbox
    $("#bookname").keyup(function(){
      var book = $(this).val();

      if(book != ''){
         $.ajax({
            url: "loadbookingbookdata.php",
            method: "POST",
            data: { book: book},
            success: function(data){
              console.log(data);
              $("#booklist").fadeIn("fast").html(data);
              
            }
         }); 
      }else{
        $("#booklist").fadeOut();
      
      }
    });

  

    });
       // Autocomplete List Click Code
       $(document).on('click','#booklist li',function(){
      $('#bookname').val($(this).text());
      $("#booklist").fadeOut();

      d = $(this).text();

      // use the function:
     id = getSecondPart(d);

     document.getElementById("bookid").value = id;

      
function getSecondPart(str) {
    return str.split('#')[1];
}



  });

  

</script>

</head>

<body style="background-color: #eee;">


    <!----------------add header--------->
    <?php include "header.php" ?>

    <!--------------------php code ------------>
    <?php   

include 'loder.php';

?>

  <!--------------------end php code ------------>


    <!------------contant----------------->

    <div class="container-fluid px-2 px-md-4 py-5 mx-auto" style="margin-top: -70px;">

        <div class="card card0 border-0">

            <div class="row d-flex">

                <div class="col-lg-12">
                    <div class="card2 card border-0 px-4 px-sm-5 py-5">
                        <center>
                            <h2 class="mb-1">Give a Book</h2>
                        </center>

                        <form action="bookingdb.php" method="POST" id="form">
                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                <div id="autocomplete">
                                 <label class="mb-0">
                                        <h6 class="mb-0 text-sm">User Email</h6>
                                    </label> <input type="Text" name="id" id="email" value=""  style="font-weight: bold; " required>
                                    
                                    <div id="emaillist"></div>
                                </div>
                                     </div>
                                    
                                <div class="col-md-3"></div>
                              
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Name</h6>
                                    </label> <input type="text" name="name" value="" id="name" readonly required></div>


                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                <div id="autocomplete">
                                 <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Book Name</h6>
                                    </label> <input type="Text" name="bookname" id="bookname" value=""  style="font-weight: bold;" required>

                                    <input type="hidden" name="bookid" id="bookid" value=""  style="font-weight: bold;" required>


                                    
                                    <div id="booklist"></div>
                                </div>
                                     </div>
                                    
                                <div class="col-md-3"></div>
                              
                            </div>


                            <div class="row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <input type="submit" name="submit"
                                        class="btn btn-blue text-center mb-1 py-2" value="Procesed"></div>
                                <div class="col-md-3 "></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!------------------  end Contacnt ---------------->


    <!-- Copyright -->
    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
        <p>© 2021 GPM's Library . All Rights Reserved | Design by
            <a href="#"> Team CAT </a>
        </p>
    </div>
    <!--// Copyright -->
    </div>
    </div>





    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->



    <!-- Sidebar-nav Js -->
    <script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>

    <!-- Js for bootstrap working-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>