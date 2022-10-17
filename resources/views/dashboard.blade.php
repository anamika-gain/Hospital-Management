@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="card p-2">
        <div class="d-md-flex align-items-center justify-content-start">
            <span class="badge badge-warning mr-md-2">BOILERPLATES AVAILABLE</span>
            <span>
Did you know Flow will include ready-to-go <a href="#">Rails 5</a> &amp; <a href="#">Laravel 5.4</a> boilerplates.
</span>
            <span class="ml-auto">
<a href="#"><i class="material-icons align-middle">arrow_forward</i></a>
</span>
        </div>
    </div>
    <div class="card-deck">
        <div class="card p-2 pl-3 pr-3">
            <div class="media align-items-center">
                <div class="doughnut-chart-wrapper mr-1"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <div class="doughnut-chart-text">
                        <div>
                            <h3 class="text-danger">12%</h3>
                            <small>TODAY</small>
                        </div>
                    </div>
                    <canvas class="doughnut-chart chartjs-render-monitor" data-percent="12" width="100" height="100" style="display: block;"></canvas>
                </div>
                <div class="media-body">
                    <h3 class="mb-0">$1,020</h3>
                    <span>Total Sales</span>
                </div>
            </div>
        </div>
        <div class="card p-2 pl-3 pr-3">
            <div class="media align-items-center">
                <div class="doughnut-chart-wrapper mr-1"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <div class="doughnut-chart-text">
                        <div>
                            <h3 class="text-success">68%</h3>
                            <small>MONTH</small>
                        </div>
                    </div>
                    <canvas class="doughnut-chart chartjs-render-monitor" data-percent="68" width="100" height="100" style="display: block;"></canvas>
                </div>
                <div class="media-body">
                    <h3 class="mb-0">$6,670</h3>
                    <span>Sales for June</span>
                </div>
            </div>
        </div>
        <div class="card p-2 pl-3 pr-3">

            <div class="media justify-items-center align-items-center h-md-100">
                <i class="material-icons md-48 text-link-color">account_circle</i>
                <div class="media-body pl-2">
                    <h3 class="mb-0 text">87%</h3>
                    <span>Sign-Up Percentage</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="card p-2 pl-3 pr-3">
            <div class="media justify-items-center align-items-center h-md-100">
                <i class="material-icons text-success md-48">check_circle</i>
                <div class="media-body pl-2">
                    <h4 class="m-0">Network Stats</h4>
                    <span>All systems working!</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="card card-sales">
                <div class="card-header bg-faded">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <h4 class="card-title">Sales</h4>
                        </div>
                        <div class="col-lg-10">
                            <form class="form-inline float-right">
                                <div class="form-group mr-3">
                                    <label class="control-label mr-1">From:</label>
                                    <input type="text" class="datepicker form-control" value="10/24/2017">
                                </div>
                                <div class="form-group mb-0">
                                    <label class="control-label mr-1">To: </label>
                                    <input type="text" class="datepicker form-control" value="10/25/2017">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix"></div>
                    <div style="height: 250px; width: 100%;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="dashboard-chart" width="568" height="250" style="display: block; width: 568px; height: 250px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        History
                    </h4>
                </div>
                <div class="card-body">

                    <div class="d-flex justify-content-between pb-1">
                        <span>January</span>
                        <div>
                            <strong>$10,000</strong> <span>/ $20,000</span>
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 52%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="d-flex justify-content-between pb-1">
                        <span>February</span>
                        <div>
                            <strong>$8,250</strong> <span>/ $5,230</span>
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="d-flex justify-content-between pb-1">
                        <span>March</span>
                        <div>
                            <strong>$1,150</strong> <span>/ $8,120</span>
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 22%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="d-flex justify-content-between pb-1">
                        <span>April</span>
                        <div>
                            <strong>$4,625</strong> <span>/ $11,450</span>
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="d-flex justify-content-between pb-1">
                        <span>May</span>
                        <div>
                            <strong>$5,875</strong> <span>/ $12,600</span>
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title">Latest Orders</h4>
            <button class="btn btn-faded btn-sm dropdown-toggle dropdown-no-caret" type="button" id="ordersFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-bottom text-muted md-18">filter_list</i>
<span>Filter</span>
</button>
            <div class="dropdown-menu" aria-labelledby="ordersFilter" x-placement="bottom-start" style="position: absolute; transform: translate3d(838px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <h6 class="dropdown-header">Sort By</h6>
                <a class="dropdown-item" href="#">#</a>
                <a class="dropdown-item" href="#">Date</a>
                <a class="dropdown-item" href="#">Status</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="thead-light">
                    <tr>
                        <th style="width:60px">#</th>
                        <th style="width:150px" class="text-uppercase">Date</th>
                        <th style="width:300px" class="text-uppercase">Description</th>
                        <th class="text-uppercase">Client</th>
                        <th class="text-right text-uppercase" style="width:80px">Status</th>
                        <th class="text-center text-uppercase" style="width:80px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle"><a href="#" class="font-weight-normal">4191</a></td>
                        <td class="text-muted align-middle">May 24th, 2017</td>
                        <td class="align-middle">2 Pack of Juicy UI Components</td>
                        <td class="align-middle">
                            <a href="#">
<i class="material-icons align-bottom">business</i> <span>Ice Rocks</span>
</a>
                        </td>
                        <td class="text-right align-middle">
                            <div class="badge badge-success">PAID</div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="d-flex">
                                <button class="btn btn-white btn-sm mr-1">
<i class="material-icons md-14 align-middle">edit</i>
</button>
                                <button class="btn btn-danger btn-sm">
<i class="material-icons md-14 align-middle">delete</i>
</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><a href="#">4190</a></td>
                        <td class="text-muted align-middle">May 23th, 2017</td>
                        <td class="align-middle">Monthly Subscription</td>
                        <td class="align-middle">
                            <a href="#">
<i class="material-icons align-bottom">business</i> <span>Demo LLC</span>
</a>
                        </td>
                        <td class="text-right align-middle">
                            <span class="badge badge-success">PAID</span>
                        </td>
                        <td class="text-center align-middle">
                            <div class="d-flex">
                                <button class="btn btn-white btn-sm mr-1">
<i class="material-icons md-14 align-middle">edit</i>
</button>
                                <button class="btn btn-danger btn-sm">
<i class="material-icons md-14 align-middle">delete</i>
</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><a href="#">4189</a></td>
                        <td class="text-muted align-middle">May 22th, 2017</td>
                        <td class="align-middle">Flow Theme v.1</td>
                        <td class="align-middle">
                            <a href="#">
<i class="material-icons align-bottom">business</i> <span>Creative Themes</span>
</a>
                        </td>
                        <td class="text-right align-middle">
                            <span class="badge badge-success">PAID</span>
                        </td>
                        <td class="text-center align-middle">
                            <div class="d-flex">
                                <button class="btn btn-white btn-sm mr-1">
<i class="material-icons md-14 align-middle">edit</i>
</button>
                                <button class="btn btn-danger btn-sm">
<i class="material-icons md-14 align-middle">delete</i>
</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><a href="#">4189</a></td>
                        <td class="text-muted align-middle">May 22th, 2017</td>
                        <td class="align-middle">Flow Theme v.1</td>
                        <td class="align-middle">
                            <a href="#">
<i class="material-icons align-bottom">business</i> <span>Creative Themes</span>
</a>
                        </td>
                        <td class="text-right align-middle">
                            <span class="badge badge-success">PAID</span>
                        </td>
                        <td class="text-center align-middle">
                            <div class="d-flex">
                                <button class="btn btn-white btn-sm mr-1">
<i class="material-icons md-14 align-middle">edit</i>
</button>
                                <button class="btn btn-danger btn-sm">
<i class="material-icons md-14 align-middle">delete</i>
</button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header border-1">
                    <h6 class="d-flex align-items-center justify-content-between card-title">
                        <span>Tickets</span>
                        <span>
                        <a href="#" class="btn btn-faded btn-sm" data-toggle="modal" data-target="#newTicketModal">
                        <i class="material-icons md-18 align-middle">add</i>
                        <span class="align-middle">NEW</span>
                        </a>
                        </span>
                    </h6>
                </div>
<hr>
                <div class="card-group">
                    <div class="card p-2 text-center">
                        <div class="media align-items-center">
                            <div class="mr-1">
                                <i class="material-icons md-36 text-success">check</i>
                            </div>
                            <div class="media-body">
                                <h3 class="mb-0"><strong>861</strong></h3>
                                <span>RESOLVED</span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 text-center">
                        <div class="media align-items-center">
                            <div class="mr-3">
                                <i class="material-icons md-36 text-warning">flag</i>
                            </div>
                            <div class="media-body">
                                <h3 class="mb-0"><strong>12</strong></h3>
                                <span>ACTIVE</span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 text-center">
                        <div class="media align-items-center">
                            <div class="mr-3">
                                <i class="material-icons md-36 text-danger">close</i>
                            </div>
                            <div class="media-body">
                                <h3 class="mb-0"><strong>5</strong></h3>
                                <span>CLOSED</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase" style="width:110px">Date</th>
                                <th class="text-uppercase">Description</th>
                                <th class="text-uppercase text-center" style="width:100px">Ticket No.</th>
                                <th class="text-uppercase text-center" style="width:60px">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="align-middle">
                                    <span class="text-muted">5 mins ago</span>
                                </td>
                                <td>
                                    <div class="lh-12">
                                        <a href="#">Bug fixes for initial release</a> was updated by <a href="#">
      <i class="material-icons md-18 align-middle md-top-1">account_circle</i>Themefy</a>
                                        <div class="text-muted">Milestone: <a href="#" class="text-color">Initial Release</a></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="#">
    #1224
  </a>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="badge badge-success">resolved</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">
                                    <span class="text-muted">48 mins ago</span>
                                </td>
                                <td>
                                    <div class="lh-12">
                                        <a href="#">Style cleanup and code refactor</a> was updated by <a href="#">
      <i class="material-icons md-18 align-middle md-top-1">account_circle</i>Karen</a>
                                        <div class="text-muted">Milestone: <a href="#" class="text-color">Alpha Release</a></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="#">
    #283
  </a>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="badge badge-success">resolved</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">
                                    <span class="text-muted">9 hrs ago</span>
                                </td>
                                <td>
                                    <div class="lh-12">
                                        <a href="#">Updated asset pipeline configuration</a> was updated by <a href="#">
      <i class="material-icons md-18 align-middle md-top-1">account_circle</i>Steven</a>
                                        <div class="text-muted">Milestone: <a href="#" class="text-color">Initial Release</a></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="#">
    #1225
  </a>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="badge badge-success">resolved</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">
                                    <span class="text-muted">13 hrs ago</span>
                                </td>
                                <td>
                                    <div class="lh-12">
                                        <a href="#">Fixed visual bugs on lists</a> was updated by <a href="#">
      <i class="material-icons md-18 align-middle md-top-1">account_circle</i>John</a>
                                        <div class="text-muted">Milestone: <a href="#" class="text-color">Bug Fixes</a></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="#">
    #129
  </a>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="badge badge-warning">active</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">
                                    <span class="text-muted">1 day ago</span>
                                </td>
                                <td>
                                    <div class="lh-12">
                                        <a href="#">Added global styling on tables</a> was updated by <a href="#">
      <i class="material-icons md-18 align-middle md-top-1">account_circle</i>John</a>
                                        <div class="text-muted">Milestone: <a href="#" class="text-color">Global Styling</a></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="#">
    #304
  </a>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="badge badge-danger">closed</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">
                                    <span class="text-muted">2 days ago</span>
                                </td>
                                <td>
                                    <div class="lh-12">
                                        <a href="#">Added progress bars on dashboard</a> was updated by <a href="#">
      <i class="material-icons md-18 align-middle md-top-1">account_circle</i>Karen</a>
                                        <div class="text-muted">Milestone: <a href="#" class="text-color">Global Styling</a></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="#">
    #223
  </a>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="badge badge-warning">active</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contacts</h4>
                </div>
                <div>
                    <div class="input-group input-group--inline w-100 input-flush">
                        <div class="input-group-addon">
                            <i class="material-icons">search</i>
                        </div>
                        <input type="text" class="form-control search" name="search" placeholder="Filter by name">
                    </div>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="40" alt="">
                            <div class="media-body d-flex w-100 align-items-center justify-content-between">
                                <div>
                                    <a href="#">Andrew Robles</a>
                                    <div>
                                        <a href="#" class="text-color">Themefy</a>
                                    </div>
                                </div>
                                <div class="contact-actions">
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">email</i></a>
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">phone</i></a>
                                    <a href="#" class="text-warning"><i class="material-icons align-middle md-18">star</i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/james-garcia-76433.jpg" class="img-fluid rounded-circle mr-2" width="40" alt="">
                            <div class="media-body d-flex w-100 align-items-center justify-content-between">
                                <div>
                                    <a href="#">Karen Smith</a>
                                    <div>
                                        <a href="#" class="text-color">LLC Rocks</a>
                                    </div>
                                </div>
                                <div class="contact-actions">
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">email</i></a>
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">phone</i></a>
                                    <a href="#" class="text-warning"><i class="material-icons align-middle md-18">star</i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="40" alt="">
                            <div class="media-body d-flex w-100 align-items-center justify-content-between">
                                <div>
                                    <a href="#">Steven Short</a>
                                    <div>
                                        <a href="#" class="text-color">Industries Inc.</a>
                                    </div>
                                </div>
                                <div class="contact-actions">
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">email</i></a>
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">phone</i></a>
                                    <a href="#" class="text-warning"><i class="material-icons align-middle md-18">star</i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/kyle-broad-29486.jpg" class="img-fluid rounded-circle mr-2" width="40" alt="">
                            <div class="media-body d-flex w-100 align-items-center justify-content-between">
                                <div>
                                    <a href="#">Tara Knows</a>
                                    <div>
                                        <a href="#" class="text-color">Industries Inc.</a>
                                    </div>
                                </div>
                                <div class="contact-actions">
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">email</i></a>
                                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18">phone</i></a>
                                    <a href="#" class="text-warning"><i class="material-icons align-middle md-18">star</i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center justify-content-end">
                        <div class="mr-auto">Total Visitors</div>
                        <div>
                            <span class="badge badge-text-color mr-1">1.3k</span>
                        </div>
                        <div class="doughnut-chart-wrapper" style="width:100px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas class="stats-chart chartjs-render-monitor" width="100" height="50" style="display: block; width: 100px; height: 50px;"></canvas>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-end">
                        <div class="mr-auto">Total Page Views</div>
                        <div>
                            <span class="badge badge-text-color mr-1">240,000</span>
                        </div>
                        <div class="doughnut-chart-wrapper" style="width:100px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas class="stats-chart chartjs-render-monitor" width="100" height="50" style="display: block; width: 100px; height: 50px;"></canvas>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-end">
                        <div class="mr-auto">Total Revenue</div>
                        <div>
                            <span class="badge badge-success mr-1">$1.5k</span>
                        </div>
                        <div class="doughnut-chart-wrapper" style="width:100px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas class="stats-chart chartjs-render-monitor" width="100" height="50" style="display: block; width: 100px; height: 50px;"></canvas>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">
                            Users Traffic
                        </h4>
                        <div class="badge badge-warning align-self-middle">+48,6%</div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="height: 210px; width: 100%;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="members-chart" width="409" height="210" style="display: block; width: 409px; height: 210px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card card-body text-center">
                        <h3 class="mb-0">419</h3>
                        <div>REGISTRATIONS</div>
                    </div>
                    <div class="card card-body text-center">
                        <h3 class="mb-0">$19,091</h3>
                        <div>SALES</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="card-title">Recent Activity</h4>
                        <span class="text-muted">Updated 10 mins ago</span>
                    </div>
                    <a href="#" class="text-muted"><i class="material-icons align-middle md-18 " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh">sync</i></a>
                </div>

                <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">Andrew Robles</a>
                                    <span>changed the due date of task </span>
                                    <a href="#">#2156</a>
                                </div>
                                <small class="text-muted">2 mins ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-warning">update</i>
                    </li>

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/james-garcia-76433.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">Karen Smith</a>
                                    <span>completed task </span>
                                    <a href="#">#2158</a>
                                </div>
                                <small class="text-muted">35 mins ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-success">check_circle</i>
                    </li>

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">Steven Short</a>
                                    <span>completed task </span>
                                    <a href="#">#3320</a>
                                </div>
                                <small class="text-muted">5 hrs ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-success">check_circle</i>
                    </li>

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/kyle-broad-29486.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">Tara Knows</a>
                                    <span>removed task </span>
                                    <a href="#">#1252</a>
                                </div>
                                <small class="text-muted">2 days ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-danger">remove_circle</i>
                    </li>

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/alex-sheldon-271322.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">John Smith</a>
                                    <span>removed task </span>
                                    <a href="#">#1255</a>
                                </div>
                                <small class="text-muted">3 days ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-danger">remove_circle</i>
                    </li>

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">Andrew Robles</a>
                                    <span>changed the due date of task </span>
                                    <a href="#">#2156</a>
                                </div>
                                <small class="text-muted">2 mins ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-warning">update</i>
                    </li>

                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <img src="assets/images/avatars/james-garcia-76433.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-1">
                                <div>
                                    <a href="profile.html">Karen Smith</a>
                                    <span>completed task </span>
                                    <a href="#">#2158</a>
                                </div>
                                <small class="text-muted">35 mins ago</small>
                            </div>
                        </div>
                        <i class="material-icons text-success">check_circle</i>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header row">
                    <div class="col-md-4 text-md-left align-self-center">
                        <h4 class="card-title mr-auto">
                            Collaborators
                        </h4>
                    </div>
                    <div class="col-md-8 d-flex justify-content-md-end">
                        <button class="btn btn-faded btn-sm mr-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-bottom md-18">filter_list</i>
<span>FILTER</span>
</button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Sort By</h6>
                            <a class="dropdown-item" href="#">ID</a>
                            <a class="dropdown-item" href="#">Start Date</a>
                            <a class="dropdown-item" href="#">Status</a>
                        </div>
                        <a href="#" class="btn btn-white btn-sm d-none d-sm-block" data-toggle="modal" data-target="#newCollaboratorModal">
<i class="material-icons align-bottom md-18">group_add</i>
Add Collaborator
</a>
                        <a href="#" class="btn btn-white btn-sm d-block d-sm-none" data-toggle="modal" data-target="#newCollaboratorModal">
<i class="material-icons align-bottom md-18">group_add</i>
Add
</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table collaborators-tasks">
                        <thead class="thead-light">
                            <tr>
                                <th style="width:60px" class="text-uppercase">Id</th>
                                <th style="width:300px" class="text-uppercase">Task Name</th>
                                <th class="text-uppercase">Start Date</th>
                                <th class="text-center text-uppercase" style="width:80px">Status</th>
                                <th class="text-center text-uppercase"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><a href="#">#3084</a></td>
                                <td>
                                    <a href="#" class="text-color">Front-End Refactoring </a><br> by <a href="#">Andrew Robles</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 24, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-danger text-uppercase">canceled</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">#2062</a></td>
                                <td>
                                    <a href="#" class="text-color">Back End Refactoring </a><br> by <a href="#">John Smith</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 20, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-primary text-uppercase">pending</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">#1024</a></td>
                                <td>
                                    <a href="#" class="text-color">Cards Styling </a><br> by <a href="#">Steven Short</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 18, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success text-uppercase">resolved</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">#889</a></td>
                                <td>
                                    <a href="#" class="text-color">Payment System Configurations </a><br> by <a href="#">Tara Knows</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 03, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-warning text-uppercase">on going</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">#220</a></td>
                                <td>
                                    <a href="#" class="text-color">Style Cleanup </a><br> by <a href="#">Karen Smith</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 02, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success text-uppercase">resolved</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">#3084</a></td>
                                <td>
                                    <a href="#" class="text-color">Front-End Refactoring </a><br> by <a href="#">Andrew Robles</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 24, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-danger text-uppercase">canceled</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">#2062</a></td>
                                <td>
                                    <a href="#" class="text-color">Back End Refactoring </a><br> by <a href="#">John Smith</a>
                                </td>
                                <td class="text-muted" style="width:180px">
                                    Jul 20, 2017
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-primary text-uppercase">pending</div>
                                </td>
                                <td class="text-right">

                                    <a href="#" class="btn btn-white btn-sm">
    <i class="material-icons md-14 align-middle">chevron_right</i>
  </a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Event Calendar
                    </h4>
                </div>
                <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><h2>September 2022</h2></div><div class="fc-right"><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div></div><div class="fc-center"></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 250.812px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2022-08-28"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2022-08-29"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2022-08-30"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2022-08-31"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2022-09-01"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2022-09-02"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2022-09-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2022-08-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-08-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2022-08-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-08-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2022-08-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-08-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2022-08-31"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-08-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a></td><td class="fc-day-top fc-thu fc-past" data-date="2022-09-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td><td class="fc-day-top fc-fri fc-past" data-date="2022-09-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td><td class="fc-day-top fc-sat fc-past" data-date="2022-09-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#ff7076;border-color:#ff7076;color:#ffffff"><div class="fc-content"><span class="fc-time">9:30p</span> <span class="fc-title">Client Conference</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#ff7076;border-color:#ff7076;color:#ffffff"><div class="fc-content"><span class="fc-time">4:59p</span> <span class="fc-title">Client Conference</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2022-09-04"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2022-09-05"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2022-09-06"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2022-09-07"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2022-09-08"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2022-09-09"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2022-09-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2022-09-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td><td class="fc-day-top fc-mon fc-past" data-date="2022-09-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td><td class="fc-day-top fc-tue fc-past" data-date="2022-09-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td><td class="fc-day-top fc-wed fc-past" data-date="2022-09-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td><td class="fc-day-top fc-thu fc-past" data-date="2022-09-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td><td class="fc-day-top fc-fri fc-past" data-date="2022-09-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td><td class="fc-day-top fc-sat fc-past" data-date="2022-09-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#6774DF;border-color:#6774DF;color:#ffffff"><div class="fc-content"><span class="fc-time">8:19p</span> <span class="fc-title">All Day Event</span></div></a></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2022-09-11"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2022-09-12"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2022-09-13"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2022-09-14"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2022-09-15"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2022-09-16"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2022-09-17"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2022-09-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td><td class="fc-day-top fc-mon fc-past" data-date="2022-09-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td><td class="fc-day-top fc-tue fc-past" data-date="2022-09-13"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a></td><td class="fc-day-top fc-wed fc-past" data-date="2022-09-14"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a></td><td class="fc-day-top fc-thu fc-past" data-date="2022-09-15"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a></td><td class="fc-day-top fc-fri fc-past" data-date="2022-09-16"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a></td><td class="fc-day-top fc-sat fc-past" data-date="2022-09-17"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#6774DF;border-color:#6774DF;color:#ffffff"><div class="fc-content"><span class="fc-time">7:28a</span> <span class="fc-title">Lunch Break</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#6774DF;border-color:#6774DF;color:#ffffff"><div class="fc-content"><span class="fc-time">1:51a</span> <span class="fc-title">Long Event</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#6774DF;border-color:#6774DF;color:#ffffff"><div class="fc-content"><span class="fc-time">10:34p</span> <span class="fc-title">Lunch Break</span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#F5B666;border-color:#F5B666;color:#ffffff"><div class="fc-content"><span class="fc-time">5:22p</span> <span class="fc-title">Team Talk</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today " data-date="2022-09-18"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2022-09-19"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2022-09-20"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2022-09-21"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2022-09-22"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2022-09-23"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2022-09-24"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-today " data-date="2022-09-18"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a></td><td class="fc-day-top fc-mon fc-future" data-date="2022-09-19"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a></td><td class="fc-day-top fc-tue fc-future" data-date="2022-09-20"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a></td><td class="fc-day-top fc-wed fc-future" data-date="2022-09-21"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a></td><td class="fc-day-top fc-thu fc-future" data-date="2022-09-22"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a></td><td class="fc-day-top fc-fri fc-future" data-date="2022-09-23"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a></td><td class="fc-day-top fc-sat fc-future" data-date="2022-09-24"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2022-09-25"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2022-09-26"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2022-09-27"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2022-09-28"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2022-09-29"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2022-09-30"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2022-10-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2022-09-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td><td class="fc-day-top fc-mon fc-future" data-date="2022-09-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td><td class="fc-day-top fc-tue fc-future" data-date="2022-09-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td><td class="fc-day-top fc-wed fc-future" data-date="2022-09-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td><td class="fc-day-top fc-thu fc-future" data-date="2022-09-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td><td class="fc-day-top fc-fri fc-future" data-date="2022-09-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-09-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2022-10-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2022-10-02"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2022-10-03"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2022-10-04"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2022-10-05"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2022-10-06"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2022-10-07"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2022-10-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2022-10-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2022-10-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2022-10-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2022-10-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2022-10-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2022-10-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2022-10-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2022-10-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-tasks">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 text-md-left align-self-center">
                            <h4 class="card-title mr-auto">
                                Tasks
                            </h4>
                        </div>
                        <div class="col-md-8 d-flex justify-content-md-end">
                            <button class="btn btn-faded btn-sm mr-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-bottom md-18">filter_list</i>
<span>FILTER</span>
</button>
                            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(214px, -1982px, 0px); top: 0px; left: 0px; will-change: transform;" x-out-of-boundaries="">
                                <h6 class="dropdown-header">Sort By</h6>
                                <a class="dropdown-item" href="#">Complete</a>
                                <a class="dropdown-item" href="#">Incomplete</a>
                                <a class="dropdown-item" href="#">Due Date</a>
                            </div>
                            <a href="#" class="btn btn-white btn-sm" data-toggle="modal" data-target="#newTaskModal">
<i class="material-icons align-bottom md-18">add</i>
Add Task
</a>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <i class="material-icons md-18 text-muted align-middle mr-1">check_circle</i>
                                <span>Add content on lessons</span>
                            </div>
                            <div class="col-lg-6 text-md-right">
                                <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-1" width="30" alt="">
                                <span class="mr-1">20 Jul</span>
                                <span class="badge badge-info">Request</span>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <i class="material-icons md-18 text-muted align-middle mr-1">check_circle</i>
                                <span>Fix dropdowns in navbars</span>
                            </div>
                            <div class="col-lg-6 text-md-right">
                                <img src="assets/images/avatars/kyle-broad-29486.jpg" class="img-fluid rounded-circle mr-1" width="30" alt="">
                                <span class="mr-1">8 Oct</span>
                                <span class="badge badge-danger">Bug</span>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <i class="material-icons md-18 text-muted align-middle mr-1">check_circle</i>
                                <span>Add new sidebar to the right</span>
                            </div>
                            <div class="col-lg-6 text-md-right">
                                <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-1" width="30" alt="">
                                <span class="mr-1">11 Oct</span>
                                <span class="badge badge-info">Request</span>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <i class="material-icons md-18 text-muted align-middle mr-1">check_circle</i>
                                <span>Create Dashboard for administrative tasks</span>
                            </div>
                            <div class="col-lg-6 text-md-right">
                                <img src="assets/images/avatars/james-garcia-76433.jpg" class="img-fluid rounded-circle mr-1" width="30" alt="">
                                <span class="mr-1">20 Oct</span>
                                <span class="badge badge-primary">feature</span>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-end">
                    <h4 class="card-title mr-auto">
                        Visitors
                    </h4>
                    <div class="dropdown">
                        <a class="btn btn-faded dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Today
</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item active" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="doughnut-chart-wrapper mr-1" style="width:150px"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="visitors-chart" width="150" height="150" class="chartjs-render-monitor" style="display: block;"></canvas>
                        </div>
                        <div class="media-body align-items-center">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <i class="material-icons text-primary md-18 mr-1">lens</i>
                                    <span>USA</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="material-icons text-warning md-18 mr-1">lens</i>
                                    <span>France</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="material-icons text-danger md-18 mr-1">lens</i>
                                    <span>Germany</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="material-icons text-success md-18 mr-1">lens</i>
                                    <span>Romania</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="material-icons text-blue md-18 mr-1">lens</i>
                                    <span>Others</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Direct Email</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group input-group--inline">
                            <span class="input-group-addon"><i class="material-icons">person</i></span>
                            <input type="text" id="email_to" placeholder="To" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="input-group input-group--inline">
                            <span class="input-group-addon"><i class="material-icons">description</i></span>
                            <input type="text" id="subject" placeholder="Subject" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" cols="30" rows="7" placeholder="Message" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-faded float-right">
<i class="material-icons md-18 align-middle">send</i>
<span class="align-middle">Send</span>
</button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title">
                        Active Users
                    </div>
                    <a href="#" class="text-muted" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh">
<i class="material-icons align-middle md-18">sync</i>
</a>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <i class="material-icons md-14 align-middle mr-2 text-success">lens</i>
                            <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Andrew Robles</a><br>
                                <small class="text-muted">active now</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-sm dropdown-toggle dropdown-no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">chevron_right</i>
</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Assignments</h6>
                                <a class="dropdown-item" href="#">Completed</a>
                                <a class="dropdown-item" href="#">Incompleted</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <i class="material-icons md-14 align-middle mr-2 text-success">lens</i>
                            <img src="assets/images/avatars/kyle-broad-29486.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Tara Knows</a><br>
                                <small class="text-muted">active now</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-sm dropdown-toggle dropdown-no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">chevron_right</i>
</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Assignments</h6>
                                <a class="dropdown-item" href="#">Completed</a>
                                <a class="dropdown-item" href="#">Incompleted</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <i class="material-icons md-14 align-middle mr-2 text-success">lens</i>
                            <img src="assets/images/avatars/foto-sushi-128246.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Mark Ups</a><br>
                                <small class="text-muted">active now</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-sm dropdown-toggle dropdown-no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">chevron_right</i>
</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Assignments</h6>
                                <a class="dropdown-item" href="#">Completed</a>
                                <a class="dropdown-item" href="#">Incompleted</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <i class="material-icons md-14 align-middle mr-2 text-muted">lens</i>
                            <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Steven Short</a><br>
                                <small class="text-muted">active 8m ago</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-sm dropdown-toggle dropdown-no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">chevron_right</i>
</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Assignments</h6>
                                <a class="dropdown-item" href="#">Completed</a>
                                <a class="dropdown-item" href="#">Incompleted</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <i class="material-icons md-14 align-middle mr-2 text-muted">lens</i>
                            <img src="assets/images/avatars/james-garcia-76433.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Karen Smith</a><br>
                                <small class="text-muted">active 46m ago</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-sm dropdown-toggle dropdown-no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">chevron_right</i>
</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Assignments</h6>
                                <a class="dropdown-item" href="#">Completed</a>
                                <a class="dropdown-item" href="#">Incompleted</a>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <i class="material-icons md-14 align-middle mr-2 text-muted">lens</i>
                            <img src="assets/images/avatars/nathan-fertig-67862.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body lh-12">
                                <a href="#">John Smith</a><br>
                                <small class="text-muted">active 4h ago</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-white btn-sm dropdown-toggle dropdown-no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">chevron_right</i>
</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Assignments</h6>
                                <a class="dropdown-item" href="#">Completed</a>
                                <a class="dropdown-item" href="#">Incompleted</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-social card-facebook">
                <div class="card-body">
                    <a href="#">
<svg viewBox="0 0 16 16" width="30%" style="fill: currentColor;" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0"></path></svg>
<span class="mt-1 d-block">
45k
</span>
</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-social card-twitter">
                <div class="card-body">
                    <a href="#">
<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="30%" style="fill: currentColor;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"></path></svg>
<span class="mt-1 d-block">
10k
</span>
</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-social card-instagram">
                <div class="card-body">
                    <a href="#">
<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="30%" style="fill: currentColor;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z"></path></svg>
<span class="mt-1 d-block">
19,5k
</span>
</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-social card-dribbble">
                <div class="card-body">
                    <a href="#">
<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="30%" style="fill:currentColor;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 16c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm6.747-6.905c-.234-.074-2.115-.635-4.257-.292.894 2.456 1.258 4.456 1.328 4.872 1.533-1.037 2.624-2.68 2.93-4.58zM10.67 14.3c-.102-.6-.5-2.688-1.46-5.18l-.044.014C5.312 10.477 3.93 13.15 3.806 13.4c1.158.905 2.614 1.444 4.194 1.444.947 0 1.85-.194 2.67-.543zm-7.747-1.72c.155-.266 2.03-3.37 5.555-4.51.09-.03.18-.056.27-.08-.173-.39-.36-.778-.555-1.16-3.413 1.02-6.723.977-7.023.97l-.003.208c0 1.755.665 3.358 1.756 4.57zM1.31 6.61c.307.005 3.122.017 6.318-.832-1.132-2.012-2.353-3.705-2.533-3.952-1.912.902-3.34 2.664-3.784 4.785zM6.4 1.368c.188.253 1.43 1.943 2.548 4 2.43-.91 3.46-2.293 3.582-2.468C11.323 1.827 9.736 1.176 8 1.176c-.55 0-1.087.066-1.6.19zm6.89 2.322c-.145.194-1.29 1.662-3.816 2.694.16.325.31.656.453.99.05.117.1.235.147.352 2.274-.286 4.533.172 4.758.22-.015-1.613-.59-3.094-1.543-4.257z"></path></svg>
<span class="mt-1 d-block">
21,3k
</span>
</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-blog-posts">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Latest Blog Posts</h4>
                    <div class="dropdown show">
                        <a class="dropdown-toggle dropdown-no-caret text-muted" href="#" id="blogPosts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons align-middle md-18">settings</i>
</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="blogPosts">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="media align-items-center">
                                <img class="blog-thumbnail d-none d-sm-block mr-2" width="150" src="assets/images/fabian-irsara-92113.jpg" alt="Blog post image">
                                <div class="media-body">
                                    <a href="#">
                                        <p class="mb-0">
                                            Mobile UI
                                        </p>
                                    </a>
                                    <p class="text-muted mb-1">
                                        <span>Steven Doe</span>
                                        <span class="mx-1">|</span>
                                        <span>3 hrs ago</span>
                                    </p>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="media align-items-center">
                                <img class="blog-thumbnail d-none d-sm-block mr-2" width="150" src="assets/images/luke-chesser-2347.jpg" alt="Blog post image">
                                <div class="media-body">
                                    <a href="#">
                                        <p class="mb-0">
                                            DevOps Basics
                                        </p>
                                    </a>
                                    <p class="text-muted mb-1">
                                        <span>Kevin Short</span>
                                        <span class="mx-1">|</span>
                                        <span>15 hrs ago</span>
                                    </p>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="media align-items-center">
                                <img class="blog-thumbnail d-none d-sm-block mr-2" width="150" src="assets/images/thought-catalog-214785.jpg" alt="Blog post image">
                                <div class="media-body">
                                    <a href="#">
                                        <p class="mb-0">
                                            New VueJS Launch
                                        </p>
                                    </a>
                                    <p class="text-muted mb-1">
                                        <span>Andrew Robles</span>
                                        <span class="mx-1">|</span>
                                        <span>22 hrs ago</span>
                                    </p>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="media align-items-center">
                                <img class="blog-thumbnail d-none d-sm-block mr-2" width="150" src="assets/images/linkedin-sales-navigator-402873.jpg" alt="Blog post image">
                                <div class="media-body">
                                    <a href="#">
                                        <p class="mb-0">
                                            E-Commerce Analytics
                                        </p>
                                    </a>
                                    <p class="text-muted mb-1">
                                        <span>Tara Smith</span>
                                        <span class="mx-1">|</span>
                                        <span>1 day ago</span>
                                    </p>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Weather</h4>
                </div>
                <div class="card-body text-center">
                    <h4 class="mb-0">Today</h4>
                    <p class="text-muted">Wednesday, October 18, 2017</p>
                    <h4 class="text-primary m-0">Florida, USA</h4>
                    <!-- WEATHER ICON RAINY-2.svg -->
                    <!-- (c) ammap.com | SVG weather icons -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="0 0 64 64">
<defs>
<filter id="blur" width="200%" height="200%">
    <feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
    <feOffset dx="0" dy="4" result="offsetblur"></feOffset>
    <feComponentTransfer>
        <feFuncA type="linear" slope="0.05"></feFuncA>
    </feComponentTransfer>
    <feMerge>
        <feMergeNode></feMergeNode>
        <feMergeNode in="SourceGraphic"></feMergeNode>
    </feMerge>
</filter>
</defs>
<g filter="url(#blur)" id="rainy-2">
<g transform="translate(20,10)">
    <g transform="translate(0,16)">
        <g class="am-weather-sun">
            <g>
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(45)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(90)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(135)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(180)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(225)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(270)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
            <g transform="rotate(315)">
                <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"></line>
            </g>
        </g>
        <circle cx="0" cy="0" fill="orange" r="5" stroke="orange" stroke-width="2"></circle>
    </g>
    <g>
        <path d="M47.7,35.4c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3    c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#000" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)" class="am-weather-cloud"></path>
    </g>
</g>
<g transform="translate(37,45), rotate(10)">
    <line class="am-weather-rain-1" fill="none" stroke="#000" stroke-dasharray="4,7" stroke-linecap="round" stroke-width="2" transform="translate(-6,1)" x1="0" x2="0" y1="0" y2="8"></line>
</g>
</g>
</svg>
                    <!-- // WEATHER ICON -->
                    <div class="lead">
                        21° C
                    </div>
                    <span>Partly Cloudy</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card">
            <img src="assets/images/thought-catalog-214785.jpg" class="card-img" alt="">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="author-img">
                        <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="author-info">
                        <p class="h3 mb-0">Andrew Robles</p>
                        <p class="mb-0">Senior Front-End Developer</p>
                    </div>
                </div>
                <p class="lead">UI Design &amp; Code.</p>
                <p class="card-text">I want to talk about two things that are quite important to me. These are love and one my personal inadequacies. The thing is that I’m quite fond of love...</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="#" class="social social-facebook">
<svg viewBox="0 0 16 16" width="20%" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0"></path></svg>
</a>
                <a href="#" class="social social-twitter">
<svg viewBox="0 0 16 16" width="20%" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"></path></svg>
</a>
                <a href="#" class="social social-instagram">
<svg viewBox="0 0 16 16" width="20%" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z"></path></svg>
</a>
                <a href="#" class="social social-dribbble">
<svg viewBox="0 0 16 16" width="20%" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 16c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm6.747-6.905c-.234-.074-2.115-.635-4.257-.292.894 2.456 1.258 4.456 1.328 4.872 1.533-1.037 2.624-2.68 2.93-4.58zM10.67 14.3c-.102-.6-.5-2.688-1.46-5.18l-.044.014C5.312 10.477 3.93 13.15 3.806 13.4c1.158.905 2.614 1.444 4.194 1.444.947 0 1.85-.194 2.67-.543zm-7.747-1.72c.155-.266 2.03-3.37 5.555-4.51.09-.03.18-.056.27-.08-.173-.39-.36-.778-.555-1.16-3.413 1.02-6.723.977-7.023.97l-.003.208c0 1.755.665 3.358 1.756 4.57zM1.31 6.61c.307.005 3.122.017 6.318-.832-1.132-2.012-2.353-3.705-2.533-3.952-1.912.902-3.34 2.664-3.784 4.785zM6.4 1.368c.188.253 1.43 1.943 2.548 4 2.43-.91 3.46-2.293 3.582-2.468C11.323 1.827 9.736 1.176 8 1.176c-.55 0-1.087.066-1.6.19zm6.89 2.322c-.145.194-1.29 1.662-3.816 2.694.16.325.31.656.453.99.05.117.1.235.147.352 2.274-.286 4.533.172 4.758.22-.015-1.613-.59-3.094-1.543-4.257z"></path></svg>
</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Chat</h4>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="text-center text-muted mb-3">Fri, 20 Oct</div>
                <div class="media align-items-center mb-3">
                    <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                    <div class="media-body">
                        <div class="chat-message chat-message__in">
                            Hey Adrian! How are you doing?
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-3">
                    <div class="media-body">
                        <div class="text-right">
                            <div class="chat-message chat-message__out">
                                Hi there! I'm fine...just getting some work done. How about you?
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-3">
                    <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                    <div class="media-body">
                        <div class="chat-message chat-message__in">
                            Awesome! Just got back from my 2 weeks vacation and I had such a great time.
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-1">
                    <div class="media-body">
                        <div class="text-right">
                            <div class="chat-message chat-message__out">
                                That's great, I'm glad. I have a suprise for you when you'll get back to the office.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-1">
                    <div class="media-body">
                        <div class="text-right">
                            <div class="chat-message chat-message__out">
                                It's about a new project that I started.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-3">
                    <div class="media-body">
                        <div class="text-right">
                            <div class="chat-message chat-message__out">
                                Hope you'll like it.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-1">
                    <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                    <div class="media-body">
                        <div class="chat-message chat-message__in">
                            That's great news!
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-3">
                    <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                    <div class="media-body">
                        <div class="chat-message chat-message__in">
                            See you soon
                        </div>
                    </div>
                </div>
                <div class="input-group input-group--inline mt-auto">
                    <div class="input-group-addon">
                        <i class="material-icons">comment</i>
                    </div>
                    <input type="text" class="form-control" name="chat-message" placeholder="Type a message...">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body card-profile align-items-center justify-content-center">
                <img src="assets/images/avatars/nina-strehl-140734.jpg" class="img-fluid rounded-circle mr-2 mb-1" width="100" alt="">
                <p class="h3 mb-0">John Strehl</p>
                <p>Senior Front-End Developer</p>
                <div class="row align-items-center text-center mb-3">
                    <div class="col-lg-6 text-md-right">
                        <span class="badge badge-warning mr-2">JavaScript</span>
                        <span class="badge badge-primary mr-2">Bootstrap</span>
                    </div>
                    <div class="col-lg-6 text-md-left">
                        <span class="badge badge-danger mr-2">PhotoShop</span>
                        <span class="badge badge-info mr-2">HTML</span>
                    </div>
                </div>
                <a href="profile.html" class="btn btn-faded align-middle">

<i class="material-icons md-18 align-middle">account_box</i>
<span class="align-middle">View Profile</span>

</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">To Do List</h4>
                    <a href="#" class="dropdown-toggle dropdown-no-caret" id="toDoList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons md-18 align-middle text-muted">settings</i>
</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="toDoList">
                        <h6 class="dropdown-header">Selected Tasks</h6>
                        <a class="dropdown-item" href="#">Mark as complete</a>
                        <a class="dropdown-item" href="#">Mark as incomplete</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Add task in list..." aria-label="Add task in list...">
                        <span class="input-group-btn">
<button class="btn btn-link-color" type="button"><i class="material-icons md-18 align-middle">add</i></button>
</span>
                    </div>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item list-group-item-action">
                        <label class="custom-control custom-checkbox align-items-center m-0">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Discuss future development strategy</span>
</label>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <label class="custom-control custom-checkbox align-items-center m-0">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Sort employees revenues</span>
</label>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <label class="custom-control custom-checkbox align-items-center m-0">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Review latest app</span>
</label>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <label class="custom-control custom-checkbox align-items-center m-0">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Assign tasks</span>
</label>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Rankings</h4>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <span class="lead mr-1">1.</span>
                            <img src="assets/images/avatars/nina-strehl-140734.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-12">
                                <a href="#">John Mix</a><br>
                                <small class="text-muted">54 done</small>
                            </div>
                            <div class="lead">
                                <strong class="align-middle">98%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <span class="lead mr-1">2.</span>
                            <img src="assets/images/avatars/lucas-sankey-378674.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Steven Short</a><br>
                                <small class="text-muted">11 done</small>
                            </div>
                            <div class="lead">
                                <strong class="align-middle">33%</strong> <i class="material-icons md-18 align-middle text-danger">arrow_downward</i>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <span class="lead mr-1">3.</span>
                            <img src="assets/images/avatars/foto-sushi-128246.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Mark Ups</a><br>
                                <small class="text-muted">1 done</small>
                            </div>
                            <div class="lead">
                                <strong class="align-middle">8%</strong> <i class="material-icons md-18 align-middle text-danger">arrow_downward</i>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <span class="lead mr-1">4.</span>
                            <img src="assets/images/avatars/kyle-broad-29486.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Tara Knows</a><br>
                                <small class="text-muted">35 done</small>
                            </div>
                            <div class="lead">
                                <strong class="align-middle">86%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <span class="lead mr-1">5.</span>
                            <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                            <div class="media-body lh-12">
                                <a href="#">Lucas Kane</a><br>
                                <small class="text-muted">25 done</small>
                            </div>
                            <div class="lead">
                                <strong class="align-middle">86%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection