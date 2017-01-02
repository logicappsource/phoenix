   <script src="./assets/javascript/transaction-history.js"></script>

        <div class="col-lg-3">
            <div class="panel panel-default no-bg b-a-2 b-success">

                <div class="panel-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <i class="fa fa-dollar fa-2x fa-fw text-success"></i>
                        </div>

                        <div class="col-lg-6 text-right">
                            <p class="m-b-0">Balance</p>
                            <h1 class="f-w-300 m-t-0 m-b-0" id="user-balance">0 <small class="text-white">$</small></h1>
                        </div>
                    </div>
                </div>
                <!-- START Footer -->
                <div class="panel-footer" id="userEmail">
                    <i class="fa fa-male" aria-hidden="true"></i><?php //echo $_SESSION['userEmail']; ?>
                </div>
                <!-- END Footer -->
            </div>
        </div>
     



  <!-- START Alerts Widget -->
        <div class="col-lg-3">
            <div class="panel panel-default no-bg b-a-2 b-danger">

                <div class="panel-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <i class="fa fa-flash fa-2x fa-fw text-danger"></i>
                        </div>

                        <div class="col-lg-6 text-right">
                            <p class="m-b-0"> Stamina Experience Points</p>
                            <h1 class="f-w-300 m-t-0 m-b-0"><div id="lblStaminaPoints">0</div></h1>
                        </div>
                    </div>
                </div>
                
                <!-- START Footer -->
                <div class="panel-footer">
                    <i class="fa fa-bolt"></i> Increase with interaction
                </div>
                <!-- END Footer -->

            </div>
        </div>
        <!-- END Alerts Revenue -->
<div class="user-team-info" > <?php  ; ?> </div>    
                               




                


<!-- Balance Teams --> 
            <div class="row m-b-2">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <h4 class="m-b-0 m-t-0 f-w-300">Your Cash</h4></div>
                <div class="col-md-4 col-sm-4 col-xs-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 text-right">
                    <button type="button" class="btn btn-sm btn-default">USD<i class="fa m-l-1 fa-caret-down"></i> </button>
                </div>
            </div>

            <!-- END ROW "Your Cash" Header -->
            <form class="form-inline" >
                        <div class="form-group">
                            <label class="f-w-300 m-r-1 hidden-md hidden-sm hidden-xs">Buy or Sell BTC</label>
                            <label class="sr-only">Amount (in dollars)</label>
                            <div class="input-group m-r-1 m-b-1">
                                <div class="input-group-addon"><i class="fa fa-fw fa-bitcoin"></i></div>
                                <input type="text" class="form-control" placeholder="0.00">
                                <div class="input-group-addon">Amount BTC</div>
                            </div>
                            <div class="input-group m-r-1 m-b-1">
                                <div class="input-group-addon"><i class="fa fa-fw fa-dollar"></i></div>
                                <input type="text" class="form-control" placeholder="0.00">
                                <div class="input-group-addon">Price USD</div>
                            </div>
                              <div class="input-group m-r-1 m-b-1">
                                <div class="input-group-addon"><i class="fa fa-fw fa-bitcoin"></i></div>
                                <input type="text" class="form-control" placeholder="0.00">
                                <div class="input-group-addon">BTC Adress</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-b-1"><i class="fa fa-fw fa-download m-r-1"></i>Buy BTC</button>
                        <button type="submit" class="btn btn-danger m-b-1"><i class="fa fa-fw fa-upload m-r-1"></i>Sell BTC</button>
                    </form>


            <!-- START ROW "Your Cash" Panels -->
            <div class="row">

                <!-- START Main Fundings -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-default b-a-0 bg-gray-dark">
                        <div class="panel-heading">Team Total Fundings</div>
                        <div class="panel-body">
                            <h2 class="m-t-0 f-w-300">
              <span>$ 212.00</span></h2>
                            <i class="fa fa-fw fa-caret-up text-success"></i> <span>$ 445.00</span>
                        </div>
                    </div>
                </div>
                <!-- END Main Fundings -->

                <!-- START Invoices -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-default b-a-0 bg-gray-dark">
                        <div class="panel-heading">Invoices</div>
                        <div class="panel-body">
                            <h2 class="m-t-0 f-w-300">
              <span>$ 977.00</span></h2>
                            <i class="fa fa-fw fa-caret-down text-danger"></i> <span>$ 740.00</span>
                        </div>
                    </div>
                </div>
                <!-- END Invoices -->

                <!-- START Accounts Receiveable -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-default b-a-0 bg-gray-dark">
                        <div class="panel-heading">Accounts Receiveable</div>
                        <div class="panel-body">
                            <h2 class="m-t-0 f-w-300">
              <span>$ 655.00</span></h2>
                            <i class="fa fa-fw fa-caret-up text-success"></i> <span>$ 741.00</span>
                        </div>
                    </div>
                </div>
                <!-- END Accounts Receiveable -->

                <!-- START Secure Holdings -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-default b-a-0 bg-gray-dark">
                        <div class="panel-heading">Secure Holdings</div>
                        <div class="panel-body">
                            <h2 class="m-t-0 f-w-300">
              $ <span id="lbl-secure-hold"></span></h2> No Change
                        </div>
                    </div>
                </div>

                <!-- END Secure Holdings -->
            </div>
        
<style type="text/css">
    .form-inline .form-group{
        width:100%;
    }

</style>






 <!-- START ROW "Your Cash" Header -->
                    <div class="row m-b-2">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <h4 class="m-b-0 f-w-300">Recent Funding</h4></div>
                        <div class="col-md-4 col-sm-4 col-xs-4 col-xs-offset-2 col-sm-offset-4 col-md-offset-4 text-right">
                            <button type="button" class="btn btn-sm btn-default">View All<i class="fa m-l-1 fa-angle-right"></i> </button>
                        </div>
                    </div>
                    <!-- END ROW "Your Cash" Header -->
                    <div class="panel panel-default b-a-2 b-gray-dark no-bg">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="small text-muted text-uppercase"><strong>Team</strong>
                                    </th>
                                    <th class="small text-muted text-uppercase"><strong>Amount</strong>
                                    </th>
                                    <th class="small text-muted text-uppercase"><strong>Date</strong>
                                    </th>
                                    <th class="small text-right text-muted text-uppercase"><strong>Action</strong>
                                    </th>
                                </tr>
                            </thead>

                            

                            <tbody>
                                <tr>
                                    <td class="v-a-m"><span class="text-white">Ledner - Johns</span></td>
                                    <td class="v-a-m"><span>$ 772.00</span></td>
                                    <td class="v-a-m">
                                        <span>09-08-2012</span>
                                    </td>
                                    <td class="v-a-m text-right">
                                        <a href="#">View <i class="fa fa-angle-right"></i></a>
                                    </td>
                                </tr>



                               
                            </tbody>

                            <tbody id="lblHistory">

                                    </tbody>
                        </table>

                    </div>
                </div>
          
          