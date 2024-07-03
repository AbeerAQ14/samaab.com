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
                                            <a href="{{route('admin.user.edit',['id'=>$user->id])}}" class="btn btn-outline-warning btn-sm"><i class="icon-md" data-feather="edit"></i></a>
                                            @if(auth()->id() != $user->id)
                                            <a onclick="deleteCall('{{$user->id}}')" href="{{route('admin.user.destroy')}}" class="btn btn-outline-danger btn-sm delete"><i class=" icon-md" data-feather="trash-2"></i></a>
                                            <form method="POST" action="{{route('admin.user.destroy')}}" class="d-none" id="delete-{{$user->id}}">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="id" value="{{$user->id}}">
                                                @method('delete')
                                            </form>
                                            @endif
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
        function deleteCall(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-'+id).submit();
                }
            })
        }
    </script>
@endpush
