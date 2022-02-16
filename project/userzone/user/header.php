
 
 
 
 
 
 
 
 <!-- Sidebar Holder -->
 <nav id="sidebar" style="background: #007bff;">
            <div class="sidebar-header" style="background: #007bff;" >
                <h1>
                    <a href="index.html">USER</a>
                </h1>
                <span>U</span>
            </div>
            <div class="profile-bg" style="border: none;"></div>
            <ul class="list-unstyled components" style="background: #007bff;">
                <li >
                    <a href="user.php">
                        <i class="fas fa-th-large"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="checkbooks.php" >
                        <i class="fas fa-book"></i> Check Books

                    </a>

                </li>

                <li>
                    <a href="mybooks.php" >
                        <i class="fas fa-book"></i> My Books

                    </a>

                </li>


                <li>
                    <a href="profile.php">
                        <i class="fas fa-user"></i>Profile
                    </a>
                </li>


                <li>
                    <a href="logout.php" >
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

                    <div class="navbar-header" style="background: #007bff;">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background: #007bff;">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <h1>GPM's Library</h1>
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
                                        <h3 class="sub-title-w3-agileits"><?php echo $_SESSION['username'] ?></h3>
                                        <a ><?php echo $_SESSION['email'] ?></a>
                                    </div>
                                </div>
                                <a href="profile.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>Change Password</h4>
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            