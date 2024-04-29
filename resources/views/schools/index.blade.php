@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 1)
<div class="row">
    <div class="col">
        <h1 class="text-white">Lista az összes school-ról</h1>
        {{--Igy kell kiirni a courses usereit 
            @for ($i = 0; $i < count($courses); $i++)
                @for ($j = 0; $j < count($courses[$i]->users); $j++)
                <h1 class="text-white">{{ $courses[$i]->users[$j]->username }}</h1>
                    
                @endfor
                @endfor --}}

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
        
        <div class="table-responsive">
            <table
            class="table table-striped
            table-hover	
            table-borderless
            table-secondary
            align-middle">
            <thead class="table-light">
                <tr>
                    <th>School name</th>
                    <th>School address</th>
                    <th>Members from  this School</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                
                
                @foreach ($schools as $item)
                <tr class="table-secondary">
                    <td scope="row">{{ $item->name }}</td>
                    <td class="text-break">{{ $item->address }}</td>
                    <td class="text-center">{{count($item->users)}}</td>
                    <td>
                                    <div class="row w-40">
                                        <div class="col">
                                            <form action="{{ route('schools.show', $item) }}" method="GET">
                                                <button type="submit" class="btn btn-primary">Show</button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('schools.edit', $item) }}" method="GET">
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('schools.destroy', $item) }}" method="POST">
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
                </table>
            </div>
        </div>
    </div>
    
    
@endif

    @endsection
    