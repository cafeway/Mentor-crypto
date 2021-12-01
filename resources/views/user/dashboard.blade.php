<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->

                <!-- navbar component -->
                @component('components.navbar')

                @endcomponent
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Dashboard</h1>
                                    </div>
                                    <div class="breadcrumb-bar align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                                            <i class="fe fe-edit btn btn-icon text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                                            <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                                            <i class="fa fa-check btn btn-icon text-warning"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                                            <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                                            <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                                    <strong>Holy guacamole!</strong> You should check in on some of those
                                    fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ti ti-close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-lg-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">Job Seekers/Providers</h4>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="apexchart-wrapper">
                                            <div id="jobportaldemo3"></div>
                                        </div>
                                        <div class="row text-center justify-content-center">
                                            <div class="col ml-3">
                                                <h4 class="mb-0">45%</h4>
                                                <span> <i class="fa fa-square pr-1 text-primary"></i> Job Seekers </span>
                                            </div>
                                            <div class="col">
                                                <h4 class="mb-0">55%</h4>
                                                <span> <i class="fa fa-square pr-1 text-info"></i> Job Providers </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 mb-0 widget-income-list">
                                    <div class="card-body d-flex align-itemes-center">
                                        <div class="media align-items-center w-100">
                                            <div class="text-left">
                                                <h3 class="mb-0">45.8k </h3>
                                                <span>Pending Users</span>
                                            </div>
                                            <div class="img-icon bg-pink ml-auto">
                                                <i class="ti ti-user text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-itemes-center">
                                        <div class="media align-items-center w-100">
                                            <div class="text-left">
                                                <h3 class="mb-0">65.4k </h3>
                                                <span>New Users</span>
                                            </div>
                                            <div class="img-icon bg-primary ml-auto">
                                                <i class="ti ti-tag text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-itemes-center">
                                        <div class="media align-items-center w-100">
                                            <div class="text-left">
                                                <h3 class="mb-0">78.2k </h3>
                                                <span>Deleted Users</span>
                                            </div>
                                            <div class="img-icon bg-orange ml-auto">
                                                <i class="ti ti-wallet text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-itemes-center">
                                        <div class="media align-items-center w-100">
                                            <div class="text-left">
                                                <h3 class="mb-0">65.3k </h3>
                                                <span>Active Users</span>
                                            </div>
                                            <div class="img-icon bg-info ml-auto">
                                                <i class="ti ti-slice text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-6 mb-30">
                                    <div class="card card-statistics h-100 mb-0 currency-price">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="card-heading">
                                                <h4 class="card-title">Buy/Sell Crypto Currency</h4>
                                            </div>
                                            <div class="dropdown">
                                                <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                    <h6 class="mb-1">Action</h6>
                                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                                    <h6 class="mb-1 mt-3">Export</h6>
                                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="tab nav-border-bottom">
                                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02" role="tab" aria-controls="home-02" aria-selected="true">
                                                            <b>Buy Crypto </b> </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02" role="tab" aria-controls="profile-02" aria-selected="false"><b>Sell Crypto </b> </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show pt-3" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class=" mb-3">
                                                                    <label>Select the Crypto Currency 'Minimum Velue 0.001BTC</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text px-3" for="bacs">B</label>
                                                                        </div>
                                                                        <select class="form-control" id="bacs">
                                                                            <option>Bitcoin</option>
                                                                            <option>Ethereum</option>
                                                                            <option>Ripple</option>
                                                                            <option>Neo</option>
                                                                            <option>Cardano</option>
                                                                            <option>Stellar</option>
                                                                            <option>RaiBlocks</option>
                                                                            <option>Monero</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=" mb-3">
                                                                    <label>Choose Payment Method</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text px-3" for="visa1">VISA</label>
                                                                        </div>
                                                                        <select class="form-control" id="visa1">
                                                                            <option>VISA Card</option>
                                                                            <option>Credit Card</option>
                                                                            <option>Debit Card</option>
                                                                            <option>Master Card</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=" mb-3">
                                                                    <label>Wallet Address</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text px-3"><i class="ti ti-wallet"></i></label>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Mgwe7856fweF5fwfe5457KuFG" aria-label="Username">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class=" mb-3">
                                                                    <label>Exchange Operation</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <select class="form-control text-primary">
                                                                                <option selected>Bitcoin</option>
                                                                                <option>Ethereum</option>
                                                                                <option>Ripple</option>
                                                                                <option>Neo</option>
                                                                                <option>Cardano</option>
                                                                                <option>Stellar</option>
                                                                                <option>RaiBlocks</option>
                                                                                <option>Monero</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Exchange Amount">
                                                                    </div>
                                                                    <div class="text-center py-2"><i class="ti ti-loop"></i></div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <select class="form-control text-primary">
                                                                                <option selected>USD</option>
                                                                                <option>EURO</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Exchange Amount">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button class="btn btn-success text-uppercase mt-1">Buy Crypto Currency</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade pt-3" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class=" mb-3">
                                                                    <label>Select the Crypto Currency 'Minimum Velue 0.001BTC</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text px-3" for="bacs1">B</label>
                                                                        </div>
                                                                        <select class="form-control" id="bacs1">
                                                                            <option>Bitcoin</option>
                                                                            <option>Ethereum</option>
                                                                            <option>Ripple</option>
                                                                            <option>Neo</option>
                                                                            <option>Cardano</option>
                                                                            <option>Stellar</option>
                                                                            <option>RaiBlocks</option>
                                                                            <option>Monero</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=" mb-3">
                                                                    <label>Choose Payment Method</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text px-3" for="visa">VISA</label>
                                                                        </div>
                                                                        <select class="form-control" id="visa">
                                                                            <option>VISA Card</option>
                                                                            <option>Credit Card</option>
                                                                            <option>Debit Card</option>
                                                                            <option>Master Card</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=" mb-3">
                                                                    <label>Wallet Address</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text px-3"><i class="ti ti-wallet"></i></label>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Mgwe7856fweF5fwfe5457KuFG" aria-label="Username">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class=" mb-3">
                                                                    <label>Exchange Operation</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <select class="form-control text-primary">
                                                                                <option selected>Bitcoin</option>
                                                                                <option>Ethereum</option>
                                                                                <option>Ripple</option>
                                                                                <option>Neo</option>
                                                                                <option>Cardano</option>
                                                                                <option>Stellar</option>
                                                                                <option>RaiBlocks</option>
                                                                                <option>Monero</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Exchange Amount">
                                                                    </div>
                                                                    <div class="text-center py-2"><i class="ti ti-loop"></i></div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <select class="form-control text-primary">
                                                                                <option selected>USD</option>
                                                                                <option>EURO</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Exchange Amount">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button class="btn btn-danger text-uppercase mt-1">Sell Crypto Currency</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4">
                                    <div class="card card-statistics apexchart-tool-force-top">
                                        <div class="card-header">
                                            <h4 class="card-title">Transaction</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="bg-light p-3 rounded m-b-20">
                                                <div class="d-sm-flex justify-content-between">
                                                    <div class="transition-left">
                                                        <span>Dec 12 2018</span>
                                                        <h5 class="mt-2 mb-0">4012001036275556</h5>
                                                    </div>
                                                    <div class="transition-right text-sm-right">
                                                        <strong class="text-dark d-block mb-1"> <i class="fa fa-long-arrow-right pr-2"></i> 0.567 BTC </strong>
                                                        <a class="text-primary" href="#!"> View more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-light p-3 rounded m-b-20">
                                                <div class="d-sm-flex justify-content-between">
                                                    <div class="transition-left">
                                                        <span>Dec 18 2018</span>
                                                        <h5 class="mt-2 mb-0">4012001038488884 </h5>
                                                    </div>
                                                    <div class="transition-right text-sm-right">
                                                        <strong class="text-dark d-block mb-1"> <i class="fa fa-long-arrow-right pr-2"></i> 1.567 LTC </strong>
                                                        <a class="text-primary" href="#!"> View more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-light p-3 rounded m-b-20">
                                                <div class="d-sm-flex justify-content-between">
                                                    <div class="transition-left">
                                                        <span>Dec 31 2018</span>
                                                        <h5 class="mt-2 mb-0">4012001038443335</h5>
                                                    </div>
                                                    <div class="transition-right text-sm-right">
                                                        <strong class="text-dark d-block mb-1"> <i class="fa fa-long-arrow-right pr-2"></i> 67 NEO </strong>
                                                        <a class="text-primary" href="#!"> View more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-light p-3 rounded">
                                                <div class="d-sm-flex justify-content-between">
                                                    <div class="transition-left">
                                                        <span>Jan 08 2019</span>
                                                        <h5 class="mt-2 mb-0">4012001036983332</h5>
                                                    </div>
                                                    <div class="transition-right text-sm-right">
                                                        <strong class="text-dark d-block mb-1"> <i class="fa fa-long-arrow-right pr-2"></i> 2.7 RIP </strong>
                                                        <a class="text-primary" href="#!"> View more</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- end row -->
                        <!-- event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Event Name</label>
                                                <input type="email" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Event Color</label>
                                                <select class="form-control">
                                                    <option>Primary</option>
                                                    <option>Warning</option>
                                                    <option>Success</option>
                                                    <option>Danger</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2019. All rights reserved.</p>
                    </div>
                   <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    {{-- <script src="{{URL::asset('js/app.js')}}"></script> --}}
    {{-- <script src="assets/js/vendors.js"></script> --}}
    <script src="{{ URL::asset('assets/js/vendors.js') }}"></script>
    <!-- custom app -->
    {{-- <script src="{{URL::asset('assets/js/vendors.js')}}"></script> --}}
    {{-- <script src="assets/js/app.js"></script> --}}
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</html>
