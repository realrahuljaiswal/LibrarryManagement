
<style>



.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #fc0505;
    border-color: #fc0505
}

.contact-clean {

}

@media (max-width:767px) {
    .contact-clean {
        padding: 20px 0
    }
}

.contact-clean form {
    max-width: 480px;
    width: 90%;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 4px;
    color: #505e6c;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
}

@media (max-width:767px) {
    .contact-clean form {
        padding: 30px
    }
}

.contact-clean h2 {
    margin-top: 5px;
    font-weight: bold;
    font-size: 28px;
    margin-bottom: 36px;
    color: inherit
}

.contact-clean .form-group:last-child {
    margin-bottom: 5px
}

.contact-clean form .form-control {
    background: #fff;
    border-radius: 2px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05);
    outline: none;
    color: inherit;
    padding-left: 12px;
    height: 42px
}

.contact-clean form .form-control:focus {
    border: 1px solid #b2b2b2
}

.contact-clean form textarea.form-control {
    min-height: 100px;
    max-height: 260px;
    padding-top: 10px;
    resize: vertical
}

.contact-clean form .btn {
    padding: 16px 32px;
    border: none;
    background: none;
    box-shadow: none;
    text-shadow: none;
    opacity: 0.9;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px;
    letter-spacing: 0.4px;
    line-height: 1;
    outline: none !important
}

.contact-clean form .btn:hover {
    opacity: 1
}

.contact-clean form .btn:active {
    transform: translateY(1px)
}

.contact-clean form .btn-primary {
    background-color: #fc0505 !important;
    margin-top: 15px;
    color: #fff
}

.message {
    resize: none
}
   

</style>

<script>

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>


<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" style="background: #007bff;">
        <div class="sidebar-header" style="background: #007bff;">
            <h1>
                <a href="index.html">ADMIN</a>
            </h1>
            <span>A</span>
        </div>
        <div class="profile-bg" style="border: none;"></div>
        <ul class="list-unstyled components">
            <li >
                <a href="admin.php">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="adduser.php" >
                    <i class="fas fa-user-plus"></i> Add User

                </a>

            </li>

            <li>
                <a href="usermanage.php">
                    <i class="fas fa-users"></i> User Management

                </a>

            </li>


            <li>
                <a href="addbook.php">
                    <i class="fas fa-book"></i> Add Books
                </a>
            </li>

            <li>
                <a href="bookmanage.php">
                    <i class="fas fa-tasks"></i> Books Management
                </a>
            </li>


            <li>
                <a href="sendnotice.php">
                    <i class="fas fa-bell"></i> Send Notification
                </a>
            </li>

            <li>
                <a href="noticemanage.php">
                    <i class="fas fa-envelope-square"></i> Notification Management
                </a>
            </li>

            <li>
                <a href="contactmanage.php">
                    <i class="fas fa-address-book"></i>Contact Management
                </a>
            </li>

            <li>
                <a href="booking.php">
                    <i class="fas fa-comments"></i> Give A Book
                </a>
            </li>


            <li>
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>

        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <!-- top-bar -->
        <nav class="navbar navbar-default mb-xl-5 mb-4">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background: #007bff;">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <!-- Search-from -->
             <h2>GPM's Library</h2>
                <!--// Search-from -->
                <ul class="top-icons-agileits-w3layouts float-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu drop-3">
                            <div class="profile d-flex mr-o">
                                <div class="profile-l align-self-center">
                                    <img src="../images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                </div>
                                <div class="profile-r align-self-center">
                                    <h3 class="sub-title-w3-agileits">Hello Librarian</h3>
                                    <a href="mailto:info@example.com"><?php echo $_SESSION['email'] ?></a>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item mt-3" data-toggle="modal" data-target="#exampleModal" >
                                <h4>
                                    <i class="far fa-user mr-3"></i>Change Password</h4>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--// top-bar -->


         <!----------------modal change password ------------------>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
      <div class="contact-clean">
    <form method="post" action="changepass.php">
        <h2 class="text-center"> Change Password...</h2>
        <div class="form-group"><input class="form-control" type="password" name="newpass" placeholder="New Password" id="myInput"></div>
        <input type="checkbox" onclick="myFunction()" class=""> Show Password 
        
        
       
        <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Change..." style="width: 100%;">
        </div>
    </form>
</div>
      </div>
    
    </div>
  </div>
</div>
      
