@extends('layouts.app')

@section('content')
    @if (Auth::user()->role == 1)
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card p-4">
                    <div class="card-body">
                        <h1 class="text-white">Edit {{ $user->username }}</h1>
                        <p class="card-text text-danger">Inputs marked with * must be filled.</p>
                        @if (Session::has('message'))
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <strong>Holy guacamole!</strong> {{ Session::get('message') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <strong>Holy guacamole!</strong>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <form action="{{ route('users.update', $user) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="mb-3">
                                        <label for="username" class="form-label">UserName</label>
                                        <input type="text" name="username" id="username"
                                            class="form-control @if ($errors->has('username')) is-invalid @endif"
                                            value="{{ old('username', $user->username) }}">
                                        @error('username')
                                            <small class="text-danger">*{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Fullname</label>
                                        <input type="text" name="fullname" id="fullname"
                                            class="form-control @if ($errors->has('fullname')) is-invalid @endif"
                                            value="{{ old('fullname', $user->fullname) }}">
                                        @error('fullname')
                                            <small class="text-danger">*{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" id="email"
                                            class="form-control @if ($errors->has('email')) is-invalid @endif"
                                            value="{{ old('email', $user->email) }}">
                                        @error('email')
                                            <small class="text-danger">*{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="school_id" class="form-label">School</label>
                                        <select name="school_id" id="school_id" class="form-control">

                                            @foreach ($schools as $item)
                                                @if ($item->id == $user->school_id)
                                                    <option selected value="{{ $user->school_id }}">{{ $item->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-control">

                                            @if ($user->role == 1)
                                            <option selected value="1">Képző</option>
                                            
                                            <option value="0">Tanuló</option>
                                                
                                            @else
                                            <option  value="1">Képző</option>
                                            
                                            <option selected value="0">Tanuló</option>
                                            @endif
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="active" class="form-label">Active</label>
                                        <select name="active" id="active" class="form-control">

                                            @if ($user->active == 1)
                                            <option selected value="1">Active</option>
                                            
                                            <option value="0">Inactive</option>
                                                
                                            @else
                                            <option  value="1">Active</option>
                                            
                                            <option selected value="0">Inactive</option>
                                            @endif
                                        </select>

                                    </div>


                                    <div class="mb-3 text-center">
                                        <button type="submit" class="btn btn-warning w-75">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

    @endif
@endsection
