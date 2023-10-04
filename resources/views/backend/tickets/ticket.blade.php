@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.ticket') }}" class="btn btn-primary"> Add Ticket </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tickets</h6>
                        <ul class="navbar-nav">
                            <li class="nav-item nav-category">Main</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Unsolved Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Solved Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Pending Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Deleted Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">New Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Delivery Inquiries</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Order Inquiries</span>
                                </a>
                            </li>
                            <li class="nav-item nav-category">Secondary</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Customer Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Organization Tickets</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tickets</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Serial ID</th>
                                        <th>Service Type</th>
                                        <th>Requester</th>
                                        <th>Requested</th>
                                        <th>Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $key => $item)
                                        <tr>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->service_type }}</td>
                                            <td>{{ $item->requester }}</td>
                                            <td>{{ $item->$table->timestamps() }}</td>
                                            <td>{{ $item->priority }}</td>
                                            <a href="" class="btn btn-warning"> Edit </a>
                                            <a href="" class="btn btn-danger"> Delete </a>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
