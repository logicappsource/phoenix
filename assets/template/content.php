
<div class="container">

    <?php require './assets/content/wdw-nav.php';?> 
  



</div>

        </div>


        <div class="right-sidebar affix-top active">
    <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel2 -->
    <div class="container-fluid" data-target-extra-content="chatpanel2">
        <div class="row">

            <!-- <a href="#" class="extra-content-open">Extra content Large</a>-->

            <!-- START Tabs -->
            <div class="tabbable-line">
            <ul class="nav nav-tabs m-r-1 m-t-2">
                <!-- Tab: Calendar -->
                <li role="presentation" class="visible-xs">
                    <a class="action-right-sidebar-toggle active" href="javascript:void(0)" role="tab" data-original-title="" title="">
                        <span class="fa fa-times"></span>
                    </a>
                </li>
                <!-- Tab: Calendar -->
                <li class="active" role="presentation">
                    <a data-toggle="tab" href="#tab-calendar" role="tab"><span class="fa fa-calendar-o"></span></a>
                </li>
                <!-- Tab: Statisticts -->
                <li role="presentation">
                    <a data-toggle="tab" href="#tab-statistics" role="tab"><span class="fa fa-area-chart"></span></a>
                </li>
                <!-- Tab: Users -->
                <li role="presentation">
                    <a data-toggle="tab" href="#right-sidebar-users" role="tab"><span class="fa fa-users"></span></a>
                </li>
                <!-- Tab: Timeline -->
                <li role="presentation">
                    <a data-toggle="tab" href="#right-sidebar-timeline" role="tab"><span class="fa fa-list"></span></a>
                </li>
                 <!-- Tab: Settings -->
                <li role="presentation">
                    <a data-toggle="tab" href="#right-sidebar-settings" role="tab"><span class="fa fa-gear"></span></a>
                </li>
            </ul>
            <!-- END Tabs -->

            <!-- START Tab: Calendar -->
            <div class="tab-content vertical-scroll-container ps-container ps-theme-default ps-active-y" id="myTabContent" data-ps-id="10d24af1-879d-ba07-53a7-00c2f2fdf13c" style="height: 416px;">
                <div class="tab-pane fade in active p-r-1" id="tab-calendar" role="tabpanel">

                   <p class="small text-uppercase m-b-0 m-t-1"><strong>Weather</strong></p>
                    <!-- START Widget - Weather Current -->
                    <div class="m-t-0 m-b-3">
                        <p class="display-4 text-white m-t-0 m-b-0">
                            <span>Thursday</span>
                        </p>
                        <span class="lead text-white m-t-0 m-b-0">30 May</span>
                        <p class="m-t-2">Avaiblie SCHEDULE TODAY:  11º, clock 15º</p>
                        <a href="#">Plan <i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- END Widget - Weather Current -->
                    <!-- START Widget - Stock -->
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th class="small text-muted text-uppercase">
                                    <strong>Stock</strong>
                                </th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-white">DOW J</td>
                                <td class="text-muted">17 552,89</td>
                                <td class="text-right"><span class="label label-danger">-0.29%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-white">APPL</td>
                                <td class="text-muted">1 987</td>
                                <td class="text-right"><span class="label label-success">+7.10%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-white">CAC</td>
                                <td class="text-muted">17 552,89</td>
                                <td class="text-right"><span class="label label-danger">-0.29%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-white">DAX</td>
                                <td class="text-muted">1 987</td>
                                <td class="text-right"><span class="label label-success">+7.10%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- END Widget - Stock -->
                    <!-- START Widget - Emails Today -->
                    <table class="table m-t-2 m-b-3">
                        <thead>
                            <tr>
                                <th class="small text-muted text-uppercase">
                                    <strong>Emails Today </strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
    <td>
        <div class="media">
            <div class="media-left media-middle">
                <a href="../apps/email-details.html">
                    <div class="avatar"> <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/salleedesign/128.jpg" alt="Avatar"><i class="avatar-status avatar-status-bottom bg-success b-gray-darker"></i> </div>
                </a>
            </div>
            <div class="media-body media-auto">
                <h5 class="m-b-0"><span>Kamryn Quigley</span> <small><span>03:47</span></small></h5>
                <p class="m-t-0 m-b-0"><span>Iure voluptates quis.</span></p>
                                    <div class="btn-group" role="group">
  <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-reply text-gray-light"></i></a>
  <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-archive text-gray-light"></i></a>
 <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-trash text-gray-light"></i></a>
</div>
                                </div>
                            </div>
                                </td>
                            </tr>
                                                 <tr>
    <td>
        <div class="media">
            <div class="media-left media-middle">
                <a href="../apps/email-details.html">
                    <div class="avatar"> <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/creartinc/128.jpg" alt="Avatar"><i class="avatar-status avatar-status-bottom bg-danger b-gray-darker"></i> </div>
                </a>
            </div>
            <div class="media-body media-auto">
                <h5 class="m-b-0"><span>Rory Crist</span> <small><span>11:16</span></small></h5>
                <p class="m-t-0 m-b-0"><span>Enim quis dolor ratione.</span></p>
                                    <div class="btn-group" role="group">
  <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-reply text-gray-light"></i></a>
  <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-archive text-gray-light"></i></a>
 <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-trash text-gray-light"></i></a>
</div>
                                </div>
                            </div>
                                </td>
                            </tr>

                            <tr>
    <td>
        <div class="media">
            <div class="media-left media-middle">
                <a href="../apps/email-details.html">
                    <div class="avatar"> <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/steynviljoen/128.jpg" alt="Avatar"><i class="avatar-status avatar-status-bottom bg-warning b-gray-darker"></i> </div>
                </a>
            </div>
            <div class="media-body media-auto">
                <h5 class="m-b-0"><span>Jarred Mitchell</span> <small><span>07:02</span></small></h5>
                <p class="m-t-0 m-b-0"><span>Non nihil et animi quaerat totam.</span></p>
                                    <div class="btn-group" role="group">
  <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-reply text-gray-light"></i></a>
  <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-archive text-gray-light"></i></a>
 <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-trash text-gray-light"></i></a>
</div>
                                </div>
                            </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>


                    <!-- END Widget - Emails Today -->
                    <!-- START Widget    <table class="table table-condensed m-t-2 m-b-0">
                        <thead>
                            <tr>
                                <th class="small text-muted text-uppercase">
                                    <strong>Tasks</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <a href="../apps/tasks-details.html"><span>Try to calculate the RAM circuit, maybe it will copy the digital system!</span></a>
                                            <span class="m-t-1 small"><i class="fa fa-history small text-gray-light"></i> <span>30-Mar-2016, 08:40</span> </span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked="checked">
                                            <del> <a href="../apps/tasks-details.html" class="text-muted"><span>We need to hack the wireless TCP system!</span></a></del>
                                            <span class="m-t-1 small"><i class="fa fa-history small text-gray-light"></i> <span>07-Aug-2013, 06:44</span> </span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked="checked">
                                            <del> <a href="../apps/tasks-details.html" class="text-muted"><span>The AI panel is down, navigate the virtual sensor so we can back up the ADP driver!</span></a></del>
                                            <span class="m-t-1 small"><i class="fa fa-history small text-gray-light"></i> <span>11-Jan-2013, 09:21</span> </span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>- Tasks -->
                 
                    <!-- END Widget - Emails Today -->

                </div>
                <!-- END Tab: Calendar -->

                <!-- START Tab: Statistics -->
                <div class="tab-pane fade p-r-1" id="tab-statistics" role="tabpanel">

                     <p class="small text-uppercase m-b-0 m-t-1"><strong>Statisticts</strong></p>
                    <!-- START Peity Charts -->
                    <div class="row m-t-3">
                        <div class="col-sm-4">
                            <p class="data-attributes text-center">
                                <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#222D33&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }" style="display: none;">4/7</span><svg class="peity" height="56" width="56"><path d="M 28 0 A 28 28 0 1 1 15.851255304708374 53.22712830126774 L 19.32232521764884 46.01937735804839 A 20 20 0 1 0 28 8" fill="#2A85C6"></path><path d="M 15.851255304708374 53.22712830126774 A 28 28 0 0 1 27.999999999999996 0 L 27.999999999999996 8 A 20 20 0 0 0 19.32232521764884 46.01937735804839" fill="#222D33"></path></svg>
                            </p>
                            <h5 class="m-b-0 text-center">CPU
                            </h5>
                            <p class="small m-t-0 p-t-0 text-center">76%</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="data-attributes text-center">
                                <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#222D33&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }" style="display: none;">6/7</span><svg class="peity" height="56" width="56"><path d="M 28 0 A 28 28 0 1 1 6.108718490895164 10.542285547955466 L 12.363370350639402 15.530203962825333 A 20 20 0 1 0 28 8" fill="#2A85C6"></path><path d="M 6.108718490895164 10.542285547955466 A 28 28 0 0 1 27.999999999999996 0 L 27.999999999999996 8 A 20 20 0 0 0 12.363370350639402 15.530203962825333" fill="#222D33"></path></svg>
                            </p>
                            <h5 class="m-b-0 text-center">Drive
                            </h5>
                            <p class="small m-t-0 p-t-0 text-center">98%</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="data-attributes text-center">
                                <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#222D33&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }" style="display: none;">2/7</span><svg class="peity" height="56" width="56"><path d="M 28 0 A 28 28 0 0 1 55.29798154109106 34.2305861507768 L 47.498558243636474 32.45041867912629 A 20 20 0 0 0 28 8" fill="#2A85C6"></path><path d="M 55.29798154109106 34.2305861507768 A 28 28 0 1 1 27.999999999999996 0 L 27.999999999999996 8 A 20 20 0 1 0 47.498558243636474 32.45041867912629" fill="#222D33"></path></svg>
                            </p>
                            <h5 class="m-b-0 text-center">Memory
                            </h5>
                            <p class="small m-t-0 p-t-0 text-center">16%</p>
                        </div>
                    </div>
                    <!-- END Peity Charts -->
                    <!-- START Network -->
                    <p class="small text-center text-uppercase m-t-2"><strong>Network</strong></p>
                    <p class="text-nowrap text-center m-t-0">
                        <span class="text-white small">21 KB/s</span> <i class="fa fa-level-down text-primary m-r-2"></i>
                        <i class="fa fa-level-up text-primary"></i> <span class="text-white small">89 KB/s</span>
                    </p>
                    <!-- END Network -->
                    <!-- START Table: System -->
                    <table class="table m-t-2 table-condensed v-a-m">
                        <thead>
                            <tr>
                                <th class="small"><i class="fa fa-database m-r-1"></i>
                                    <span class="text-uppercase"><strong>system</strong></span></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="small v-a-m">
                                    <td> Disabled </td>
                                    <td class="text-right v-a-m text-white">1:36</td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> Processing </td>
                                    <td class="text-right v-a-m text-white"><span>52247</span></td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> CPU User </td>
                                    <td class="text-right v-a-m text-white">16%</td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> CPU System </td>
                                    <td class="text-right v-a-m text-white">19%</td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> CPU Free </td>
                                    <td class="text-right v-a-m text-white">78%</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END Table: System -->
                        <!-- START Table: LAN -->
                        <table class="table table-condensed v-a-m">
                            <thead>
                                <tr>
                                    <th class="small"><i class="fa fa-wifi m-r-1"></i>
                                        <span class="text-uppercase"><strong>Lan</strong></span></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="small v-a-m">
                                        <td>Wi-Fi</td>
                                        <td class="text-right v-a-m text-white"><i class="fa fa-fw fa-sort"></i></td>
                                    </tr>
                                    <tr class="small v-a-m">
                                        <td>IP</td>
                                        <td class="text-right v-a-m text-white"><samp><span>94.188.7.246</span></samp></td>
                                    </tr>
                                    <tr class="small v-a-m">
                                        <td>MAC</td>
                                        <td class="text-right v-a-m text-white"><samp><span>c2:55:4b:2f:c3:e1</span></samp></td>
                                    </tr>
                                    <tr class="small v-a-m">
                                        <td>
                                            <i class="fa fa-long-arrow-down"></i>
                                        </td>
                                        <td class="text-right v-a-m text-white"><span class="m-r-1">541.00  KB/s</span>
                                            <span>143.00 MB</span>
                                        </td>
                                    </tr>
                                    <tr class="small v-a-m">
                                        <td>
                                            <i class="fa fa-long-arrow-up text-white"></i>
                                        </td>
                                        <td class="text-right v-a-m text-white"><span class="m-r-1">28.00  KB/s</span>
                                            <span>437.00 MB</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Table: LAN -->
                            <!-- START Widget - Usage -->
                            <ul class="list-group b-a-0 m-t-3">
                                <li class="list-group-item">
                                    <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-0"><strong>Macintosh</strong> <span class="pull-right text-right text-white"><span>452.00</span></span>
                                </span>
                                <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                    <div class="progress-bar" role="progressbar" style="width: 60%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span class="text-uppercase small m-t-0"><strong class="text-white"><span>620.00 GB</span></strong>
                                    <span class="small"> / 524.00 GB</span></span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Windows</strong>
                                    <span class="pull-right text-right text-white"><span>190.00</span></span>
                                </span>
                                <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span class="text-uppercase small m-t-0"><strong class="text-white"><span>930.00 GB</span></strong>
                                    <span class="small"> / 120.00 GB</span></span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Linux</strong>
                                    <span class="pull-right text-right text-white"><span>360.00</span></span>
                                </span>
                                <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span class="text-uppercase small m-t-0"><strong class="text-white"><span>489.00 GB</span></strong>
                                    <span class="small"> / 572.00 GB</span></span>
                            </li>
                        </ul>
                        <!-- END Widget - Usage -->
                    </div>
                    <!-- END Tab: Statisticts -->

                    <!-- START Tab: Users -->
                    <div class="tab-pane fade p-r-1" id="right-sidebar-users" role="tabpanel">
                    <p class="small text-uppercase m-b-2 m-t-1"><strong>Users with Chat</strong></p>
                        <!-- START Search Input -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                            </span>
                        </div>
                        <!-- END Search Input -->
                        <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel -->
                        <div class="m-t-1" data-target-extra-content="chatpanel">


                <ul class="nav nav-pills nav-stacked">

                    <li role="presentation">
                     <p class="small text-uppercase m-t-2"><strong>Online (3)</strong></p>
                    </li>

                    <!-- START User Online (Small) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/joshuaraichur/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Norwood Collier</span></h5>
                                    <p class="small text-muted m-b-0"><span>Principal Tactics Director</span></p>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="badge">4</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- START User Online (Small) -->

                    <!-- START User Online (Small) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jerrybai1907/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Randy Wilkinson</span></h5>
                                    <p class="small text-gray-lighter m-b-0"><span>Lead Creative Architect</span></p>
                                </div>

                                <div class="media-right media-middle">

                                    <span class="badge bg-danger">13</span>

                                </div>

                            </div>
                        </a>
                    </li>
                    <!-- START User Online (Small) -->
                    <li role="presentation">
                       <p class="small text-uppercase m-t-2"><strong>Busy (3)</strong></p>
                    </li>

                   
                   
                 
                 

                
                
                    <!-- START User Online (Busy) -->

                                        <!-- START User Online (Busy) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/commadelimited/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Mia Gulgowski</span></h5>
                                    <p class="small text-muted m-b-0"><span>Dynamic Optimization Strategist</span></p>
                                </div>

                                <div class="media-right media-middle">

                                </div>

                            </div>
                        </a>
                    </li>
                    <!-- START User Online (Busy) -->

                <li role="presentation">
                    <p class="small text-uppercase m-t-2"><strong>Away (3)</strong></p>
                </li>

                    <!-- START User Online (Away) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/akmalfikri/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Aaliyah Watsica</span></h5>
                                    <p class="small text-muted m-b-0"><span>Central Division Specialist</span></p>
                                </div>

                                <div class="media-right media-middle">

                                </div>

                            </div>
                        </a>
                    </li>
                    <!-- START User Online (Away) -->

                   
                   

                    <!-- START User Online (Away) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/michalhron/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Craig Larson</span></h5>
                                    <p class="small text-muted m-b-0"><span>Lead Integration Strategist</span></p>
                                </div>

                                <div class="media-right media-middle">

                                </div>

                            </div>
                        </a>
                    </li>
                    <!-- START User Online (Away) -->

                    <li role="presentation">
                        <p class="small text-uppercase m-t-2"><strong>Offline (3)</strong></p>
                    </li>

                    <!-- START User Online (Away) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/okseanjay/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Lorenz Bahringer</span></h5>
                                    <p class="small text-muted m-b-0"><span>Product Factors Producer</span></p>
                                </div>

                                <div class="media-right media-middle">

                                </div>

                            </div>
                        </a>
                    </li>
                   
                   

                    <!-- START User Online (Away) -->
                    <li role="presentation">
                        <a href="javascript: void(0)" class="extra-content-open">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="avatar avatar-image avatar-sm loaded">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/themadray/128.jpg" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Lura Smith</span></h5>
                                    <p class="small text-muted m-b-0"><span>Corporate Group Associate</span></p>
                                </div>

                                <div class="media-right media-middle">

                                </div>

                            </div>
                        </a>
                    </li>
                    <!-- START User Online (Away) -->

                </ul>

                        </div>

                        <!-- START Chat Content (Hide Tab: Users) -->
                        <div class="right-sidebar-extra-content p-r-2" id="chatpanel" style="top: -10px; height: 483px;">

<div class="panel panel-default m-t-3">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-3"><a class="extra-content-close small" href="javascript:void(0);"><i class="fa fa-fw fa-chevron-left"></i></a></div>
            <div class="col-xs-6 text-center"><span>G. Glover</span></div>
            <div class="col-xs-3 text-right"><a href="javascript: void(0)" class="text-gray-lighter"><i class="fa fa-fw fa-circle text-success"></i></a></div>
        </div>
    </div>

<div class="panel-body">

<!-- START Left Chat -->
<div class="media">
    <div class="media-left">
        <div class="avatar avatar-image avatar-sm loaded">
            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/charliegann/128.jpg" alt="Avatar">
            <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
        </div>
    </div>
    <div class="media-body">
        <div class="panel-default">
            <div class="panel-body bg-gray-dark text-white b-r-a-3">
                <span>Aut sit sint ex porro asperiores et aperiam omnis.</span>
            </div>
        </div>
        <h6 class="m-t-1"><span>Guy Skiles</span>   <small><span> 04:19</span></small></h6>
    </div>
</div>
<!-- END Left Chat -->

<!-- START Right Chat -->
<div class="media m-b-0">
    <div class="media-body">
        <div class="panel-default">
            <div class="panel-body bg-primary text-white b-r-a-3">
                <span>Officiis unde enim ad.</span>
            </div>
        </div>
        <h6 class="m-t-1"><span>Robert Bruen</span>   <small><span> 07:60</span></small></h6>
    </div>
    <div class="media-right">
        <div class="avatar avatar-image avatar-sm loaded">
            <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jerrybai1907/128.jpg">
            <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
        </div>
    </div>
</div>
<!-- END Right Chat -->

<!-- START Left Chat -->
<div class="media">
    <div class="media-left">
        <div class="avatar avatar-image avatar-sm loaded">
            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/woodydotmx/128.jpg" alt="Avatar">
            <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
        </div>
    </div>
    <div class="media-body">
        <div class="panel-default">
            <div class="panel-body bg-gray-dark text-white b-r-a-3">
                <span>Et eum voluptatum consequatur doloribus amet sunt corporis. Iusto voluptatem esse et voluptatibus aut. Vero fugit voluptatibus enim sed aut. Dolorum in non quo amet. Numquam rerum recusandae vel delectus consequatur in quisquam.</span>
            </div>
        </div>
        <h6 class="m-t-1"><span>Violette Lehner</span>   <small><span>09:42</span></small></h6>
    </div>
</div>
<!-- END Left Chat -->

<!-- START Right Chat -->
<div class="media m-b-0">
    <div class="media-body">
        <div class="panel-default">
            <div class="panel-body bg-gray-dark text-white b-r-a-3">
                <span>Voluptates dolorem minus odio.</span>
            </div>
        </div>
        <h6 class="m-t-1"><span>Pasquale Lind</span>   <small><span> 10:52</span></small></h6>
    </div>
    <div class="media-right">
        <div class="avatar avatar-image avatar-sm loaded">
            <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/kijanmaharjan/128.jpg">
            <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
        </div>
    </div>
</div>
<!-- END Right Chat -->

</div>

<!-- START Input Your Message -->
<div class="panel-footer">
    <div class="input-group input-group-sm">
        <span class="input-group-btn">
             <button class="btn btn-default" type="button">
                 <i class="fa fa-fw fa-plus"></i>
             </button>
         </span>
        <input type="text" class="form-control" placeholder="Your Message...">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Go!</button>
        </span>
    </div>
</div>
<!-- END Input Your Message -->

</div>

                        </div>
                        <!-- END Chat Content (Hide Tab: Users) -->
                    </div>
                    <!-- END Tab: Users -->

                    <!-- START Tab: Settings -->
                    <div class="tab-pane fade p-r-1" id="right-sidebar-settings" role="tabpanel">

<p class="text-uppercase small m-t-1 m-b-2"><strong>Settings</strong></p>

                       <div class="row m-b-1">
                           <div class="col-sm-6"><span class="text-white">Notifications</span></div>
                            <div class="col-sm-6 text-right"> <input type="checkbox" class="js-switch-small" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span></div>
                       </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <div class="row m-b-1">
                           <div class="col-sm-6"><span class="text-white">Activity</span></div>
                            <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-primary" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(45, 153, 220); border-color: rgb(45, 153, 220); box-shadow: rgb(45, 153, 220) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span></div>
                       </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                         <div class="row m-b-1">
                           <div class="col-sm-6"><span class="text-white">Statisticts</span></div>
                            <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-warning" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(230, 108, 64); border-color: rgb(230, 108, 64); box-shadow: rgb(230, 108, 64) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span></div>
                       </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <div class="row m-b-1">
                           <div class="col-sm-9"><span class="text-white">Settings for Responsive</span></div>
                            <div class="col-sm-3 text-right"><input type="checkbox" class="js-switch-small-danger" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(203, 62, 75); border-color: rgb(203, 62, 75); box-shadow: rgb(203, 62, 75) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span></div>
                       </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>
                    <!-- END Tab: Settings -->

                    <!-- START Tab: Timeline -->
                    <div class="tab-pane fade p-r-1" id="right-sidebar-timeline" role="tabpanel">

                       <p class="text-uppercase small m-t-1 m-b-2"><strong>Timeline</strong></p>

<!-- START Timeline - Active Entry (Day) -->
<div class="timeline">
    <!-- Timeline - Badge Date -->
    <div class="timeline-date">
        <span class="badge">Today</span>
    </div>
    <div class="timeline-item p-r-1">
        <!-- Timeline - Mini Icon -->
        <div class="timeline-icon">
            <i class="fa fa-fw fa-times-circle text-danger"></i>
        </div>

        <!-- Timeline - Icon  -->
        <div class="timeline-item-head clearfix m-b-0">
            <!-- Timeline - Header & Subtitle -->

            <!-- START Avatar, Message & Time -->
            <div class="row">

                <div class="col-lg-12 m-l-1">

                    <span class="label label-danger label-outline">Alert</span>
                    <br>
                    <p class="text-white m-t-1"><span>I'll hack the bluetooth TCP driver, that should circuit the EXE panel!</span></p>
                    <p class="text-nowrap small"><span>21-Nov-2015, 02:08</span>
                    </p>
                </div>
            </div>
            <!-- END Avatar, Message & Time -->

        </div>
    </div>
</div>
<!-- END Timeline - Active Entry (Day) -->

<!-- START Timeline - Active Entry -->
<div class="timeline">
    <div class="timeline-item p-r-1">
        <!-- Timeline - Mini Icon -->
        <div class="timeline-icon">
            <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
        </div>

        <!-- Timeline - Icon  -->
        <div class="timeline-item-head clearfix m-b-0">
            <!-- Timeline - Header & Subtitle -->

            <!-- START Avatar, Message & Time -->
            <div class="row">

                <div class="col-lg-12 m-l-1">

                    <span class="label label-warning label-outline">Warning</span>
                    <br>
                    <p class="text-white m-t-1"><span>If we generate the driver, we can get to the SSL pixel through the digital PNG system!</span></p>
                    <p class="text-nowrap small"><span>21-Jan-2016, 03:20</span>
                    </p>
                </div>
            </div>
            <!-- END Avatar, Message & Time -->

        </div>
    </div>
</div>
<!-- END Timeline - Active Entry -->

<!-- START Timeline - Active Entry -->
<div class="timeline">
    <div class="timeline-item p-r-1">
        <!-- Timeline - Mini Icon -->
        <div class="timeline-icon">
            <i class="fa fa-fw fa-info-circle text-info"></i>
        </div>

        <!-- Timeline - Icon  -->
        <div class="timeline-item-head clearfix m-b-0">
            <!-- Timeline - Header & Subtitle -->

            <!-- START Avatar, Message & Time -->
            <div class="row">

                <div class="col-lg-12 m-l-1">

                    <span class="label label-info label-outline">Info</span>
                    <br>
                    <p class="text-white m-t-1">15 Files Uploaded</p>
                    <p class="text-nowrap small"><span>11-May-2016, 01:28</span>
                     </p>
                    <i class="m-l-1 fa fa-file-text-o fa-fw"></i> read_me.txt<br>
                    <i class="m-l-1 fa fa-file-zip-o fa-fw"></i> all-files.zip<br>
                     <i class="m-l-1 fa fa-file-word-o fa-fw"></i> alice-feedback.doc<br>

                    <span class="badge m-t-1 m-b-1">+12</span>

                </div>
            </div>
            <!-- END Avatar, Message & Time -->

        </div>
    </div>
</div>
<!-- END Timeline - Active Entry -->

<!-- START Timeline - Active Entry -->
<div class="timeline">
    <div class="timeline-item p-r-1">
        <!-- Timeline - Mini Icon -->
        <div class="timeline-icon">
            <i class="fa fa-fw fa-plus-circle text-primary"></i>
        </div>

        <!-- Timeline - Icon  -->
        <div class="timeline-item-head clearfix m-b-0">
            <!-- Timeline - Header & Subtitle -->

            <!-- START Avatar, Message & Time -->
            <div class="row">

                <div class="col-lg-12 m-l-1">

                    <span class="label label-primary label-outline">Message</span>
                    <br>
                    <p class="text-white m-t-1">6 users have been accepted by the Admin</p>
                    <p class="text-nowrap small"><span>28-Sep-2013, 04:41</span>
                     </p>
                               <div class="m-b-1">
                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/lvovenok/128.jpg" alt="Avatar">
                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/louis_currie/128.jpg" alt="Avatar">
                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/bergmartin/128.jpg" alt="Avatar">
                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/manekenthe/128.jpg" alt="Avatar">
                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/mhaligowski/128.jpg" alt="Avatar">
                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/rpatey/128.jpg" alt="Avatar">
                                </div>
                </div>
            </div>
            <!-- END Avatar, Message & Time -->

        </div>
    </div>
</div>
<!-- END Timeline - Active Entry -->

 <!-- START Timeline - Active Entry (Day) -->
<div class="timeline">
    <!-- Timeline - Badge Date -->
    <div class="timeline-date">
        <span class="badge">Yesterday</span>
    </div>
    <div class="timeline-item p-r-1">
        <!-- Timeline - Mini Icon -->
        <div class="timeline-icon">
            <i class="fa fa-fw fa-check-circle text-success"></i>
        </div>

        <!-- Timeline - Icon  -->
        <div class="timeline-item-head clearfix m-b-0">
            <!-- Timeline - Header & Subtitle -->

            <!-- START Avatar, Message & Time -->
            <div class="row">

                <div class="col-lg-12 m-l-1">

                    <span class="label label-success label-outline">Success</span>
                    <br>
                    <p class="text-white m-t-1"><span>If we transmit the card, we can get to the EXE transmitter through the wireless GB hard drive!</span></p>
                    <p class="text-nowrap small"><span>04-Feb-2011, 04:27</span>
                    </p>

                    <p><span>Maiores optio et pariatur cupiditate unde natus.</span></p>
                </div>
            </div>
            <!-- END Avatar, Message & Time -->

        </div>
    </div>
</div>
<!-- END Timeline - Active Entry (Day) -->

 <!-- START Timeline - Active Entry -->
<div class="timeline">

    <div class="timeline-item p-r-1">
        <!-- Timeline - Mini Icon -->
        <div class="timeline-icon">
            <i class="fa fa-fw fa-circle text-gray"></i>
        </div>

        <!-- Timeline - Icon  -->
        <div class="timeline-item-head clearfix m-b-0">
            <!-- Timeline - Header & Subtitle -->

            <!-- START Avatar, Message & Time -->
            <div class="row">

                <div class="col-lg-12 m-l-1">

                    <span class="label label-gray label-outline">Obsolete</span>
                    <br>
                    <del><p class="m-t-1"><span>The CSS program is down, copy the cross-platform system so we can index the SMS sensor!</span></p></del>
                    <p class="text-nowrap small"><span>23-Mar-2016, 06:10</span>
                    </p>
                </div>
            </div>
            <!-- END Avatar, Message & Time -->

        </div>
    </div>
</div>
<!-- END Timeline - Active Entry  -->
                        </div>
                        <!-- END Tab: Timeline -->
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px; height: 415px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 171px;"></div></div></div>
                                    <!-- END Tabs All Content --></div>
                </div>
    </div>
    <!-- START Content Show in Full-Height -->
    <div class="right-sidebar-extra-content" id="chatpanel2" style="top: 0px; height: 473px;">
        <a href="javascript: void(0)" class="extra-content-close">Back</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ipsa, rem. Accusantium autem blanditiis dolor ducimus earum eius eligendi, eos est exercitationem id illo in mollitia neque optio pariatur placeat quisquam recusandae reiciendis repellat reprehenderit. Amet at deleniti dicta distinctio dolorem eveniet hic id, iusto magnam maxime modi officiis perspiciatis porro praesentium quas, recusandae repudiandae rerum tempora totam unde velit voluptate, voluptatem. Alias consequatur consequuntur et nisi quibusdam quo quos ut. Asperiores commodi deserunt dicta dolor eligendi ex fugit, harum itaque laborum maiores mollitia nam nihil obcaecati officiis quae quis repellendus tenetur voluptate. Eos ratione saepe voluptatibus? Animi, illo magni!</p>
    </div>
    <!-- END Content Show in Full-Height f-->
</div>