@extends('layouts.app')
{{-- Ide érkezik a felhasznalo belépés után! --}}
@php
    use App\Models\Course;
    use App\Models\Types;
    use App\Models\ProgLang;
@endphp
@section('content')
    <div class="row">
        @if (auth()->check())
            <script>
                var ulr = window.location.href;
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
                if (ulr.includes("logged")) {
                    toastr["success"]("Hello {{ auth()->user()->username }}", "Logged in!")
                }
                if (ulr.includes("registered")) {
                    toastr["success"]("Hello {{ auth()->user()->username }}", "Successfull registration!")
                }
            </script>
        @endif
        @if (Session::has('message'))
        <script>
            toastr["success"]("{{ Session::get('message') }}", "Good job!")
        </script>
        @endif
        {{-- <div class="row">
            
            <div class="col-8">
                <select onchange="typechanged(this.id)" class="w-75 float-end fs-5 bg-secondary text-light" name="szuro"
                    id="szuro">
                    @foreach (Types::all() as $types)
                        <option value="{{ $types->id }}">{{ $types->type }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}

        <div class="row mt-5">
            {{-- @foreach (Course::all() as $item)
                <div class="col cardscol {{ $item->type->id }}">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="card-text">Level: {{ $item->level }}</p>
                            <p class="card-text">Type: {{ $item->type->type }}</p>
                            <a id="{{ $item->id }}" class="btn btn-primary float-end "
                                href="courses/{{ $item->id }}" role="button">Start</a>

                        </div>
                    </div>
                </div>
                @if ($item->id % 3 == 0)
                    <div class="row my-5"></div>
                @endif
            @endforeach --}}
            <h1>Get really good at programming</h1>
            <p>Develop fluency in 67 programming languages with our unique blend of learning, practice and mentoring.
                Exercism is fun, effective and 100% free, forever.</p>

        </div>
        <div class="row mt-5">
            <section class="tracks-section pt-40 md:pt-56 mb-40 md:mb-56">
                <div class="lg-container">
                    <div class="section-header items-center self-center mb-8 md:mb-12">
                        <h2 class="text-h1 text-center">
                            Explore and
                            <strong>get fluent</strong><svg class="rough-annotation"
                                style="position: absolute; top: 0px; left: 0px; overflow: visible; pointer-events: none; width: 100px; height: 100px;">
                                <path
                                    d="M286.2872803537175 144.70057929772884 C352.7439994487824 147.75918928033337, 424.0045849302609 148.7141058469437, 474.4957342175767 148.07079164404422"
                                    fill="none" stroke="#3F3A5A" stroke-width="4"
                                    style="stroke-dashoffset: 188.263; stroke-dasharray: 188.263; animation: 800ms ease-out 0ms 1 normal forwards running rough-notation-dash;">
                                </path>
                            </svg>
                            in
                            <br>
                            {{ count(Proglang::all()) }} programming languages
                        </h2>
                        <hr class="c-divider --large">
                    </div>
                    <div class="row text-center">
                        @foreach (ProgLang::all() as $lang)
                            <div class="col">
                                <a class="track" href="/language/{{ $lang->name }}"><img alt="Python"
                                        class="c-track-icon  --python"
                                        onerror="if (this.src != 'https://assets.exercism.org/assets/graphics/missing-track-e3d861058d4702c1dc4036617689249659b8d37d.svg') this.src = 'https://assets.exercism.org/assets/graphics/missing-track-e3d861058d4702c1dc4036617689249659b8d37d.svg';"
                                        src="https://assets.exercism.org/tracks/{{ $lang->name }}.svg">
                                    <div class="title">{{ $lang->name }}</div>
                                    <div class="students-count">{{ $lang->usercount }} students</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        <script>
            function typechanged(id) {
                var select = document.getElementById(id).value;
                var allcards = document.querySelectorAll(".cardscol");

                for (var i = 0; i < allcards.length; i++) {
                    if (allcards[i].classList.contains(select)) {
                        allcards[i].classList.remove("d-none");
                    } else {
                        allcards[i].classList.add("d-none");
                    }
                }
            }
        </script>
    @endsection
