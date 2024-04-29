@extends('layouts.app')
{{-- @php
        use App\Models\School;
    @endphp --}}
@section('content')
@if (Auth::user()->role == 1)
<h1 class="text-white mb-5">All users </h1>
@if (Session::has('message'))
<script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["success"]("{{ Session::get('message') }}", "Good job!")
            </script>
    @endif
    <table id="example" class="stripe cell-border hover " style="width:100%">
        <thead>
            <tr>
                <th>Username</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>School</th>
                <th>Role</th>
                <th>Active</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $item->username }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->school->name }}</td>
                <td>{{$item->role == 1 ? "képző" : "tanulo"}}</td>
                @if ($item->active == 1)
                <td class="bg-success text-center rounded-circle">active</td>
                @else
                        <td class="bg-danger">inactive</td>
                    @endif
                    <td>
                        <div class="row w-40">
                            <div class="col">
                                <form action="{{ route('users.edit', $item) }}" method="GET">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </form>
                            </div>
                            <div class="col">
                                <form action="{{ route('users.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
        <script>
            $('#example').DataTable();
        </script>
    
    @endif
    @endsection
