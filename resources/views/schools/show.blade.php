@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 1)
<div class="row">
    <div class="col-md-12">
            <h2 class="text-white">{{ $school->name }}</h2>
            <address class="text-white">
                <p class="py-3">{{ $school->address }}</p>
            </address>
            <table id="example" class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Full name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($school->users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        @if ($item->active == 1)
                        <td class="text-success fs-5 fw-bold">active</td>
                            @else
                            <td class="text-danger fs-5 fw-bold">inactive</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <script>
        $('#example').DataTable();
        </script>

@endif
@endsection
