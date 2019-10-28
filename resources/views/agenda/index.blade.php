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
            <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Desc</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Publisher</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>1</td>

                    </tr>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection