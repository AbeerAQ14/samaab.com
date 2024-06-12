@extends('layouts.admin')
@section('title','Users')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-center mb-3">
                        <h6 class="card-title">Users List</h6>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.user.create')}}"><i class="me-2 icon-md" data-feather="plus"></i>Create</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{\Illuminate\Support\Carbon::parse($user->created_at)->format('Y-m-d h:i A')}}</td>
                                        <td>
                                            <a href="" class="btn btn-outline-warning btn-sm"><i class="icon-md" data-feather="edit"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-sm"><i class=" icon-md" data-feather="trash-2"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style-library')
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
@endpush
@push('script')
    <script src="{{asset('admin_assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script>
        $('table').DataTable({
            "aLengthMenu": [
                [10, 30, 50, -1],
                [10, 30, 50, "All"]
            ],
            "iDisplayLength": 10,
            "language": {
                search: "Search"
            }
        });

    </script>
@endpush
