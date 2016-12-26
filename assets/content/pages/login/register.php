<?php


/*
    if(isset($_GET['userNameReg'])) {
        $regUsername = $_GET['userNameReg'];
    }


    if(isset(['userPasswordReg'])) {
        $regUserPassword = $_GET['userPasswordReg'];
    }

    if(isset(['userEmailReg'])) {
        $regUserEmail = $_GET['userEmailReg'];
    }
 
    echo "userName: {$regUsername}";
   // echo "userPassword: {$regUserPassword} <br />"; 
   // echo "userEmail: {$regUserEmail} <br  />";

   */
?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">The Phoenix Poker Service</h4>
      </div>
      <div class="modal-body">
       


<div class="panel panel-default b-a-2 no-bg b-gray-dark">
                <div class="panel-heading text-center">
                    <a href="index.php"> <img src="./assets/images/pokerphoenix.png" alt="Logo-poker-phoenix" ></a>
                </div>
                <div class="panel-body">
                    <h2 class="text-center f-w-300 m-b-0">Register</h2>
                    <p class="text-center m-b-3">Our service is free, but you need to register</p>


                    <form method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" placeholder="Enter a Username..." id="txtusernamereg" name="username">
                        </div>
<!--
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Enter a Password..." >
                        </div>-->



                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input class="form-control" placeholder="Repeat Password..." id="txtpasswordreg" name="password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" placeholder="Enter a Email..." name="email" id="txtemailreg">
                        </div>
                        
                         <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" placeholder="First Name" id="firstnamereg" name="firstnamereg">
                        </div>
                         <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" placeholder="Last Name" id="lastnamereg" name="lastnamereg">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <a href="#" id="lbl-terms-privacy"> Accept Terms &amp; Privacy Policy</a>
                            </label>
                        </div>
                        <a href="./index.php" role="button" class="btn m-b-2 btn-block btn-primary"  id="btn-register" type="submit">Register</a>
                    </form>
                </div>
                <div class="panel-footer b-a-0 b-r-a-0">
                    <a href="#">Forgot Password?</a>
                    
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<style type="text/css">
    .modal-content{
        right:-90px;
    }
</style>
