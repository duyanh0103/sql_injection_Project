<?php
echo "<nav class='navbar navbar-expand-lg navbar-light bg-white sticky-top'>

        <div class='container'>
            <a class='navbar-brand' href='#'>
                <img src='Images/logo/icon.jpg' class='logo-top' alt=''>
            </a>
            <div class='desk-menu collapse navbar-collapse justify-content-md-center' id='navbarNav'>
                <ul class='navbar-nav'>";
                    $active1 = '';
                    $active2 = '';
                    
                    if(isset($location1))
                        $active1 = 'active';
                    else if(isset($loaction2))
                        $active2 = 'active';
                    
                    echo "
                        <li class='nav-item $active1'>
                            <a class='nav-link' href='#'>Home</a>
                        </li>


                    ";                                

echo"                
                </ul>
            </div>
                <div id='offcanvas-flip1' uk-offcanvas='flip: true; overlay: true'>
                    <div class='uk-offcanvas-bar' style='background: white; width: 100%;'>

                    <button class='uk-offcanvas-close' style='color:#272727' type='button' uk-close></button>
                    <h3 style='font-size: 14px;
                        color: #272727;
                        text-transform: uppercase;
                        margin: 3px 0 30px 0;
                        font-weight: 500; letter-spacing: 2px;'>
                        MENU
                    </h3>
                        <div class='justify-content-md-center'>
                            <ul class='navbar-nav'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='#'>Home</a>
                                </li>
    ";


        echo"                            

                            </ul>
                        </div>
                    </div>
                </div>
                <div class='icon-ol'>
    ";
    
                    if (isset($_SESSION['email'])) {
                        $name = $_SESSION['name'];
                        echo "
                            <a style='color: #272727' href='user.php'>
                                <i class='fas fa-user-alt' >$name</i>
                            </a>
                            <a style='color: #272727' href='logout.php'>
                                <i class='fas fa-sign-out-alt'>Logout</i>
                            </a>
                        ";
                    } else {
                        echo "
                            <a style='color: #272727' href='signin.php'>
                                <i class='fas fa-user-alt' >Login</i>
                            </a>
                        ";
                    }                 
    echo "
                    <button class='navbar-toggler' type='button' uk-toggle='target: #offcanvas-flip1' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                </div>
            </div>

        </nav>
    ";
?>