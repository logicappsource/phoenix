<div class="media m-b-3">
    <div class="media-left media-middle p-r-2">
        <div class="avatar">
            <img class="img-circle m-t-1 m-b-2" src="https://s3.amazonaws.com/uifaces/faces/twitter/michaelkoper/128.jpg" alt="Avatar">
        </div>
    </div>
    <div class="media-body">
        <h3 class="f-w-300 m-b-0 m-t-1"><a href="profile-details.html"><span>Username</span></a> <span class="text-muted"> <span class="m-r-1 m-l-1">/</span></span> Profile Edit</h3>
        <p class="m-t-0"> <span class="label label-primary label-outline text-uppercase m-r-1">Premium</span> Edit Your Name, Avatar, etc.</p>
    </div>
</div>


<div class="row">

        <!-- START Left Column -->
        <div class="col-lg-2 m-b-2">
             <!-- START Menu Pills Vertical - Profile, Account, Billing, Sessions -->
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="#">Profile Edit</a></li>
           <li id="btn-account-edit" role="presentation" class=""><a href="#">Account Edit</a></li>
       <li role="presentation" class=""><a href="#">Billing Edit</a></li>
           <li role="presentation" class=""><a href="#">Settings Edit</a></li>
          <li role="presentation" class=""><a href="#">Sessions Edit</a></li>
    </ul>
 <!-- START Menu Pills Vertical - Profile, Account, Billing, Sessions -->
 



        </div>
        <!-- END Left Column -->

        <div class="col-lg-10">

            <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                <div class="panel-heading">
                    <h4 class="panel-title">Edit Profile</h4>
                </div>

                <div class="panel-body">

                    <!-- START All Forms -->
                    <form class="form-horizontal">

                        <!-- START Form Avatar -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Avatar</label>
                            <div class="col-sm-6">
                                <div class="panel panel-default no-bg b-a-2 b-gray b-dashed m-b-0">
                                    <div class="panel-body">
                                        <p class="text-center">
                                            <i class="fa fa-3x fa-user text-gray-light text-center m-t-2"></i>
                                            <br>
                                        </p>
                                        <h5 class="text-center">Upload Your Avatar...</h5>
                                        <p class="text-center">Drag a file here or <a href="#"> browse</a> for a file to upload.</p>
                                        <p class="small text-center">JPG, GIF, PNG, MOV and AVI. Please choose a files under 2GB to upload. File sizes are 400 x 300px.</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Avatar -->

                        <!-- START Form First Name -->
                        <div class="form-group">
                            <label for="profile-edit-first-name" class="col-sm-3 control-label"><span class="text-danger">*</span> First Name</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="profile-edit-first-name" placeholder="First Name...">
                            </div>
                        </div>
                        <!-- END Form First Name -->

                        <!-- START Form Last Name -->
                        <div class="form-group">
                            <label for="profile-edit-last-name" class="col-sm-3 control-label"> Last Name</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="profile-edit-last-name" placeholder="Last Name...">
                            </div>
                        </div>
                        <!-- END Form Last Name -->

                        <!-- START Form Job Type -->
                        <div class="form-group">
                            <label for="profile-edit-job-type" class="col-sm-3 control-label"><span class="text-danger">*</span> Player Type</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="profile-edit-job-type">
                                    <option>Cash Game Player</option>
                                    <option>Tournement Player</option>
                                    <option>Live Events Player</option>
                                    <option>HighStakes Player</option>
                                    <option>Sunday Regular Player</option>
                                </select>
                            </div>
                        </div>
                        <!-- END Form Job Type -->

                        <div class="hr-text hr-text-left">
                            <h6 class="text-white"><strong>Availability</strong></h6>
                        </div>

                        <!-- START Form Radio Avalability -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Incomming Teams</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios" value="option1" checked="checked">
                                        <span class="label label-outline label-success">Available</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadiosInactive" value="option2">
                                        <span class="label label-outline label-warning">Inactive</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadiosBusy" value="option3">
                                        <span class="label label-outline label-danger">Busy</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadiosOffline" value="option2">
                                        <span class="label label-outline label-gray">Offline</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Radio Avalability -->

                        <div class="hr-text hr-text-left">
                            <h6 class="text-white"><strong>Add Profile</strong></h6>
                        </div>

                        <!-- START Form Profile -->
                        <div class="form-group">
                            <label for="profile-edit-profile" class="col-sm-3 control-label">Profile</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="4" placeholder="Please Describe Your Profile..." id="profile-edit-profile"></textarea>
                            </div>
                        </div>
                        <!-- END Form Profile -->

                        <!-- START Form Add Labels -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Add Labels</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Add Here...">
                            </div>
                        </div>
                        <!-- END Form Add Labels -->

                    </form>
                    <!-- END All Forms -->


                </div>

                <!-- START Panel Footer -->
                <div class="panel-footer text-right">

                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-primary">Update Profile</button>
                </div>
                <!-- START Panel Footer -->
            </div>

        </div>
    </div>