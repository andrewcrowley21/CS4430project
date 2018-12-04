<?php 

    $isLogIN = false;

    if(isset($_SESSION['userID'])){
        $isLogIN = true;

    }

?> 
<header>
        <div class="topHeaderRow" >
            <div class="container">
                <div class="pull-right">
                    <ul class="list-inline">
                        <?php

                         if($isLogIN){
							echo '<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>';
							echo '<li><a href="items.php"><span class="glyphicon glyphicon-star"></span> Items</a></li>';
							echo '<li><a href="viewUsers.php"><span class="glyphicon glyphicon-eye-open"></span> View Other Wish Lists</a></li>';
                            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Log Out</a></li>';
                           
                        } 

                         else{
                            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Log In</a></li>';
                        } 



                            
                        ?>
                        
                        
                        <!-- <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorites</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end topHeaderRow -->


        
    </header>
