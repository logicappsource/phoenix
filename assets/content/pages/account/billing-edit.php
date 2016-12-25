<div class="row">
        <!-- START Left Column -->
        <div class="col-lg-2 m-b-2">
             <!-- START Menu Pills Vertical - Profile, Account, Billing, Sessions -->
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class=""><a href="#">Profile Edit</a></li>
           <li role="presentation" class=""><a href="#">Account Edit</a></li>
       <li role="presentation" class="active"><a href="billing-edit.html">Billing Edit</a></li>
           <li id="btn-settings-edit" role="presentation" class=""><a href="#">Settings Edit</a></li>
          <li role="presentation" class=""><a href="sessions-edit.html">Sessions Edit</a></li>
    </ul>
 <!-- START Menu Pills Vertical - Profile, Account, Billing, Sessions -->
 



        </div>
        <!-- END Left Column -->

        <div class="col-lg-10">

            <!-- START Panel Billing Method -->
            <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                <div class="panel-heading">
                    <h4 class="panel-title"> Billing Edit</h4>
                </div>

                <div class="panel-body">

                    <!-- START All Forms -->
                    <form class="form-horizontal">

                        <!-- START Your Plan -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Your Plan</label>
                            <div class="col-sm-9">

                                <!-- START Media with Left -->
                                <div class="media">
                                    <div class="media-body">
                                        <p><span class="text-white">Premium </span> - You use <strong>37%</strong> of the available space</p>

                                        <!-- START Progress Bars -->
                                        <div class="progress b-r-a-0 m-b-1 h-3">
                                            <div class="progress-bar progress-bar-primary" style="width: 35%">
                                                <span class="sr-only">35% Complete (success)</span>
                                            </div>
                                            <div class="progress-bar progress-bar-info" style="width: 20%">
                                                <span class="sr-only">20% Complete (warning)</span>
                                            </div>
                                            <div class="progress-bar progress-bar-success" style="width: 10%">
                                                <span class="sr-only">10% Complete (danger)</span>
                                            </div>
                                        </div>
                                        <!-- END Progress Bars -->

                                        <!-- START Legend  -->
                                        <dl class="dl-horizontal">
                                            <dt>Amount of Space</dt>
                                            <dd class="text-white"> 214,8 GB / 1,03 TB</dd>
                                            <dt>Regular Files</dt>
                                            <dd class="text-white"><i class="fa fa-square text-primary m-r-1"></i> 177,8 GB</dd>
                                            <dt>Shared Files</dt>
                                            <dd class="text-white"><i class="fa fa-square text-info m-r-1"></i> 37 GB</dd>
                                            <dt>Available Space</dt>
                                            <dd class="text-white"><i class="fa fa-square text-success m-r-1"></i> 177,8 GB</dd>
                                        </dl>
                                        <!-- END Legend  -->

                                        <button type="button" class="btn btn-default m-t-1 hidden-lg hidden-md hidden-sm" data-toggle="modal" data-target=".modal-select-plan">Change Plan</button>

                                    </div>

                                    <!-- START Button Change Plan -->
                                    <div class="media-right p-l-3 hidden-xs">
                                        <!-- Standard button -->
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".modal-select-plan">Change Plan</button>
                                    </div>
                                    <!-- END Button Change Plan -->

                                </div>
                                <!-- END Media with Left -->

                            </div>
                        </div>
                        <!-- END Your Plan -->

                        <div class="hr-text hr-text-left">
                            <h6 class="text-white"><strong>Payment</strong></h6>
                        </div>

                        <!-- START Payment Method -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Payment Method</label>
                            <div class="col-sm-9">
                                <!-- START Media with Left -->
                                <div class="media">
                                    <div class="media-body">
                                        <p class="form-control-static">
                                            <i class="fa fa-fw fa-paypal text-primary m-r-1"></i> <span class="text-white">PayPal</span> - PayPal Account: <span>Tyshawn_Lakin56@gmail.com</span>
                                        </p>
                                        <!-- START Payment Details  -->
                                        <dl class="dl-horizontal">
                                            <dt>Next Payment Due</dt>
                                            <dd class="text-white"> 2016-05-21 </dd>
                                            <dt>Amount</dt>
                                            <dd class="text-white">$ 13.00</dd>
                                        </dl>
                                        <!-- END Payment Details  -->

                                        <button type="button" class="btn btn-default hidden-lg hidden-md hidden-sm m-t-1" data-toggle="modal" data-target=".modal-payment-sm">Change Payment</button>

                                    </div>

                                    <!-- START Media Left -->
                                    <div class="media-right p-l-3 hidden-xs">
                                        <!-- Standard button -->
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".modal-payment-sm">Change Payment</button>
                                    </div>
                                    <!-- END Media Left -->

                                </div>
                                <!-- END Media with Left -->
                            </div>
                        </div>
                        <!-- END  Payment Method -->


                    </form>
                    <!-- END All Forms -->

                </div>
                <!-- START Panel Footer -->
                <div class="panel-footer">
                    <i class="fa fa-fw fa-support m-r-1"></i> If you want to personalize the notification settings, go <a href="../apps/settings-edit.html">here</a>.
                </div>
                <!-- END Panel Footer -->
            </div>
            <!-- END Panel Billing Method -->

            <!-- START Panel Paymeny History -->
            <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                <div class="panel-heading">
                    <h4 class="panel-title">Payment History</h4>
                </div>

                <!-- START Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="small text-muted text-uppercase"><strong>#</strong>
                                </th>
                                <th class="small text-muted text-uppercase"><strong>ID</strong>
                                </th>
                                <th class="small text-muted text-uppercase"><strong>Date</strong>
                                </th>
                                <th class="small text-muted text-uppercase"><strong>Amount</strong>
                                </th>
                                <th class="small text-muted text-uppercase"><strong>Description</strong>
                                </th>
                                <th class="small text-muted text-uppercase"><strong>Payment Method</strong>
                                </th>
                                <th class="small text-muted text-uppercase text-right"><strong>Receipt</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- START ROW Payment Success PayPal -->
                            <tr>
                                <td class="v-a-m">

                                    <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="Success"></i>
                                </td>
                                <td class="v-a-m text-white"><samp><span>10089</span></samp>
                                </td>
                                <td class="v-a-m text-white">
                                    2016-04-21
                                </td>
                                <td class="v-a-m text-white">
                                    <span>$ 842.00</span>

                                </td>
                                <td class="v-a-m">
                                    <span class="label label-primary label-outline text-uppercase">Premium</span>
                                </td>
                                <td class="v-a-m">
                                    <i class="fa fa-fw fa-paypal text-primary m-r-1"></i> <span class="text-white"><span>Allene.Thompson18@hotmail.com</span></span>
                                </td>
                                <td class="v-a-m text-right">
                                    <a href="javascript: void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>

                                </td>
                            </tr>
                            <!-- END ROW Payment Success PayPal -->

                            <!-- START ROW Payment Success CreditCard -->
                            <tr>
                                <td class="v-a-m">
                                    <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="Success"></i>
                                </td>
                                <td class="v-a-m text-white"><samp><span>46842</span></samp>
                                </td>
                                <td class="v-a-m text-white">
                                    2011-09-13
                                </td>
                                <td class="v-a-m text-white">
                                    <span>$ 209.00</span>
                                </td>
                                <td class="v-a-m">
                                    <span class="label label-info label-outline text-uppercase">Basic</span>
                                </td>
                                <td class="v-a-m">
                                    <i class="fa fa-fw fa-credit-card-alt text-gray m-r-1"></i> Visa 4*** **** **** 9221
                                </td>
                                <td class="v-a-m text-right">
                                    <a href="javascript: void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
                                </td>
                            </tr>
                            <!-- END ROW Payment Success CreditCard -->

                            <!-- START ROW Payment Failed PayPal -->
                            <tr>
                                <td class="v-a-m">

                                    <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="left" title="" data-original-title="Failed"></i>
                                </td>
                                <td class="v-a-m"><samp><span>72879</span></samp>
                                </td>
                                <td class="v-a-m">
                                    2016-04-21
                                </td>
                                <td class="v-a-m">
                                    <span>$ 408.00</span>

                                </td>
                                <td class="v-a-m">
                                    <span class="label label-warning label-outline text-uppercase">Pro</span>
                                </td>
                                <td class="v-a-m">
                                    <i class="fa fa-fw fa-paypal text-gray m-r-1"></i> <span>Anabel.Herman@gmail.com</span>
                                </td>
                                <td class="v-a-m text-right">


                                </td>
                            </tr>
                            <!-- END ROW Payment Failed PayPal -->

                            <!-- START ROW Payment Failed CreditCard -->
                            <tr>
                                <td class="v-a-m">
                                    <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="left" title="" data-original-title="Failed"></i>
                                </td>
                                <td class="v-a-m"><samp><span>30474</span></samp>
                                </td>
                                <td class="v-a-m">
                                    2011-09-13
                                </td>
                                <td class="v-a-m">
                                    <span>$ 676.00</span>
                                </td>
                                <td class="v-a-m">
                                    <span class="label label-danger label-outline text-uppercase">Advanced</span>
                                </td>
                                <td class="v-a-m">
                                    <i class="fa fa-fw fa-credit-card-alt text-gray m-r-1"></i> Mastercard 4*** **** **** 9221
                                </td>
                                <td class="v-a-m text-right">

                                </td>
                            </tr>
                            <!-- END ROW Payment Failed CreditCard -->

                            <!-- START ROW Payment Success PayPal -->
                            <tr>
                                <td class="v-a-m">

                                    <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="Success"></i>
                                </td>
                                <td class="v-a-m text-white"><samp><span>91317</span></samp>
                                </td>
                                <td class="v-a-m text-white">
                                    2016-04-21
                                </td>
                                <td class="v-a-m text-white">
                                    <span>$ 447.00</span>

                                </td>
                                <td class="v-a-m">
                                    <span class="label label-gray-lighter label-outline text-uppercase">Free</span>
                                </td>
                                <td class="v-a-m">
                                    <i class="fa fa-fw fa-paypal text-primary m-r-1"></i> <span class="text-white"><span>Shanel.Kertzmann72@hotmail.com</span></span>
                                </td>
                                <td class="v-a-m text-right">

                                </td>
                            </tr>
                            <!-- END ROW Payment Success PayPal -->

                        </tbody>
                    </table>
                </div>
                <!-- END Table -->

            </div>
            <!-- END Panel Paymeny History -->

        </div>
    </div>