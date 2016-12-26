


<div class="modal-dialog" id="loginmodal">
  <div class="modal-content">
    <div class="modal-header">
    <img src="assets/images/pokerphoenix.png"  width="75%"/>
      <h1 class="text-center">Poker Phoenix</h1>
      <h4>Please sign in to use our service <br> 
                 <br>
              
                 </h4>
               
               
                
    </div>
     <div class="modal-body">
     <form >
         <div class="form-group">
             <input class="form-control" type="text" id="txtUserEmail" placeholder="username">
         </div>

         <div class="form-group">
            <input class="form-control" type="password" id="txtUserPassword" placeholder="password">
         </div>

         <div class="form-group">
             
             <button class="snip0059" type="submit" id="clicklogin" value="Login">Submit</button>
             <button type="button" class="snip0059"  data-toggle="modal" data-target="#myModal">Register</button>
             <button type="button" class="snip0059" id="btn-password" data-toggle="modal" data-target="#myModal2">Forgot Password</button>

         </div>
         </form>
     </div>
  </div>
 </div>

 <div class="wdw-register"> <?php require 'register.php'; ?> </div>
 <div class="wdw-forgot-password"> <?php require 'forgot-password.php'; ?> </div>