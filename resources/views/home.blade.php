@extends('layout.app')

@section('content')


<div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <h4>Dashboard</h4>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3 mb-3">
        <div class="card bg-primary text-white h-100">
        <div class="card-body py-5">Soal</div>
        <div class="card-footer d-flex">
            View Details
            <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
            </span>
        </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card bg-warning text-dark h-100">
        <div class="card-body py-5">Pelanggaran</div>
        <div class="card-footer d-flex">
            View Details
            <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
            </span>
        </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card bg-success text-white h-100">
        <div class="card-body py-5">Absensi</div>
        <div class="card-footer d-flex">
            View Details
            <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
            </span>
        </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card bg-danger text-white h-100">
        <div class="card-body py-5">Sangsi</div>
        <div class="card-footer d-flex">
            View Details
            <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
            </span>
        </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 mb-3">
        <div class="card h-100">
        <div class="card-header">
            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
            Nilai UTS
        </div>
        <div class="card-body">
            <canvas class="chart" width="400" height="200"></canvas>
        </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100">
        <div class="card-header">
            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
            Nilai UAS
        </div>
        <div class="card-body">
            <canvas class="chart" width="400" height="200"></canvas>
        </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Data Table
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="example"
                            class="table table-striped data-table"
                            style="width: 100%"
                        >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>

                            <tbody>
                                <h1>no data</h1>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
