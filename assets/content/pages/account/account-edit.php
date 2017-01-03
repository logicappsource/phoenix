<div class="row">
        <!-- START Left Column -->
        <div class="col-lg-2 m-b-2">
             <!-- START Menu Pills Vertical - Profile, Account, Billing, Sessions -->
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class=""><a href="#">Profile Edit</a></li>
           <li role="presentation" class="active"><a href="#">Account Edit</a></li>
       <li  id="btn-billing-edit"presentation" class=""><a href="#">Billing Edit</a></li>
           <li role="presentation" class=""><a href="#">Settings Edit</a></li>
          <li role="presentation" class=""><a href="#">Sessions Edit</a></li>
    </ul>
 <!-- START Menu Pills Vertical - Profile, Account, Billing, Sessions -->
 



        </div>
        <!-- END Left Column -->

        <div class="col-lg-10">

            <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                <div class="panel-heading">
                    <h4 class="panel-title"> Account Edit</h4>
                </div>

                <div class="panel-body">

                    <!-- START All Forms -->
                    <form class="form-horizontal">

                        <!-- START Form Old Password -->
                        <div class="form-group">
                            <label for="account-edit-old-password" class="col-sm-3 control-label">Old Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="account-edit-old-password">
                            </div>
                        </div>
                        <!-- END Form Old Password -->

                        <!-- START Form New Password -->
                        <div class="form-group">
                            <label for="account-edit-new-password" class="col-sm-3 control-label">New Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="account-edit-new-password">
                            </div>
                        </div>
                        <!-- END Form New Password -->

                        <!-- START Form Confirm New Password -->
                        <div class="form-group">
                            <label for="account-edit-confirm-new-password" class="col-sm-3 control-label">Confirm New Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="account-edit-confirm-new-password">
                            </div>
                        </div>
                        <!-- END Form Confirm New Password -->

                        <!-- START Button & Link Update Password-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">

                                <!-- Standard button -->
                                <button type="submit" id="btn-update-password" class="btn btn-default">Update Password</button>

                                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                <a role="button" class="btn btn-link" href="index.php">Forgot Password?</a>

                            </div>
                        </div>
                        <!-- END Button & Link Update Password-->

                    </form>
                    <!-- END All Forms -->

                </div>

                <!-- START Panel Footer -->
                <div class="panel-footer">
                    <i class="fa fa-fw fa-support m-r-1"></i> If you have trouble with the configuration, you can contact us. <a href="../apps/faq.html">We Can Help</a>.
                </div>
                <!-- END Panel Footer -->

            </div>

            <!-- START Panel Change Username -->
            <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                <div class="panel-heading">
                    <h4 class="panel-title">Change Username</h4>
                </div>
                <div class="panel-body">
                    <p>Changing the username is not recommended. In this connection, I can appear <a href="../apps/faq.html">many problems</a>.</p>
                    <!-- Standard button -->
                      <div class="form-group">
                            <label for="account-edit-old-password" class="col-sm-3 control-label">New Username</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="account-edit-new-username">
                            </div>
                        </div>
                    <button type="submit" id="btn-change-username" class="btn btn-default">Change Username</button>
                </div>
            </div>
            <!-- END Panel Change Username -->

            <!-- START Panel Delete Account -->
            <div class="panel panel-default b-a-2 no-bg b-brand-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">Delete Account</h4>
                </div>
                <div class="panel-body">
                    <p>Once you delete your account, there is no going back. Please be certain.</p>

                    <button type="button" class="btn btn-danger btn-outline">Delete Your Account</button>
                </div>

                <!-- START Panel Footer -->
                <div class="panel-footer">
                    <i class="fa fa-fw fa-exclamation-circle m-r-1"></i> Are you sure you don’t want to just downgrade your account to a <strong>Free</strong> Account? We won’t charge your PayPal account anymore.


                </div>
                <!-- START Panel Footer -->

            </div>
            <!-- END Panell Delete Account -->


        </div>


    </div>