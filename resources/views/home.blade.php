@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 grid-margin stretch-card">
                <div class="card icon-card-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2 kz-box">
                        <i class="mdi mdi-star-circle kz-mdi"></i>
                        </div>
                        <p class="h5">Manage</p>
                    </div>
                    <div class="d-flex align-items-center mt-3 flex-wrap">
                        <h3 class="font-weight-normal mb-0 mr-2">Data Barang</h3>
                        <a href="{{'/product'}}" class="btn btn-sm btn-rounded btn-outline-light mt-md-2 mt-xl-0">
                        Lihat Data
                        </a>
                    </div>
                    <small class="font-weight-medium d-block mt-2">Total for this month</small>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 grid-margin stretch-card">
                <div class="card icon-card-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2 kz-box">
                        <i class="mdi mdi-account-convert kz-mdi"></i>
                        </div>
                        <p class="h4">Manage</p>
                    </div>
                    <div class="d-flex align-items-center mt-3 flex-wrap">
                        <h3 class="font-weight-normal mb-0 mr-2">Data Pengguna</h3>
                        <a href="{{'/user'}}" class="btn btn-sm btn-rounded btn-outline-light mt-md-2 mt-xl-0">
                        Lihat Data
                        </a>
                    </div>
                    <small class="font-weight-medium d-block mt-2">Total for this month</small>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 grid-margin stretch-card">
                <div class="card icon-card-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2 kz-box">
                        <i class="mdi mdi-basket kz-mdi"></i>
                        </div>
                        <p class="h4">Manage</p>
                    </div>
                    <div class="d-flex align-items-center mt-3 flex-wrap">
                        <h3 class="font-weight-normal mb-0 mr-2">Data Penjualan</h3>
                        <a href="{{'/sales'}}" class="btn btn-sm btn-rounded btn-outline-light mt-md-2 mt-xl-0">
                        Lihat Data
                        </a>
                    </div>
                    <small class="font-weight-medium d-block mt-2">Total for this month</small>
                </div>
                </div>
            </div>
        </div> <!--row-->

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <p class="card-title flex-grow">Pergerakan Data Pelanggan</p>
                    <div class="d-flex align-items-center">
                      <div class="dropdown dropright card-menu-dropdown">
                        <button class="btn" type="button" id="cardMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cardMenuButton4">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-start flex-wrap ">
                    <div class="online-revenue-chart-legend mt-2 mt-sm-0 mt-md-2 mt-xl-0 mr-1" id="online-revenue-legend"></div>
                  </div>
                  <canvas id="online-revenue-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <p class="card-title flex-grow">Data Penjualan</p>
                    <div class="dropdown dropright card-menu-dropdown">
                      <button class="btn" type="button" id="cardMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="cardMenuButton5">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc. </p>
                  <canvas id="online-sales-chart" class="mt-5 mt-md-4 mt-xl-5"></canvas>
                  <div class="d-flex d-md-none d-xl-flex justify-content-between mt-5 mx-2">
                    <div class="d-flex flex-column align-items-center">
                      <h3 class="font-weight-bold">12%</h3>
                      <small>Sales total</small>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                      <h3 class="font-weight-bold">20%</h3>
                      <small>Sales total</small>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                      <h3 class="font-weight-bold">67%</h3>
                      <small>Sales total</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </div>
</div>
@endsection

<style>
    .kz-mdi{
        padding-top: 18px;
        font-size: 60px !important;
    }
    .kz-box{
        width: 70px !important;
        height: 70px !important;
    }
</style>

        