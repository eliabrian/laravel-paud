@extends('dashboard')

@section('main')

<h3 class="mb-4 text-gray-800">
    Agenda
</h3>

<div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            Agenda Table
        </h6>
        <a href="#" class="btn btn-primary btn-icon-split btn-sm">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-plus"></i>
            </span>
            <span class="text">Add New Agenda</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection