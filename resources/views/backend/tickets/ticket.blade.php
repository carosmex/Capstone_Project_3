@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('create.ticket') }}" class="btn btn-primary"> Add Ticket </a>
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
                                <a href="{{ route('index.ticket') }}" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">New/Pending Tickets</span>
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
                                    <span class="link-title">Deleted Tickets</span>
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
                                        <th>Description</th>
                                        <th>Requested</th>
                                        <th>Priority</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $key => $item)
                                        <tr>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->service_type }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->requester }}</td>
                                            <td>{{ $item->requested }}</td>
                                            <td>{{ $item->priority }}</td>
                                            <td>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="" class="btn btn-warning custom-btn">Edit</a>
                                                        </div>
                                                        <div class="col">
                                                            <form
                                                                action="{{ route('destroy.ticket', ['ticket' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure you want to delete this ticket?)">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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
