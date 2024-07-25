{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', '')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')

    <div class="container">
        <h1>Course list</h1>

        <h4> <a href="{{ route('course.create') }}" style="text-decoration: none;
        float:right; ">Add Course</a>
        </h4>


        <table class="table table-bordered" style="width:75%">
            <thead>
                <tr>
                    <th scope="col">SN.</th>
                    <th scope="col">University Name</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($course as $c)
                    <tr>
                        <th> {{ $loop->iteration }}</th>
                        <th>{{ $c->$university->university_name }}</th>
                        <th>{{ $c->course_name }}</th>
                        <td><button>view</button></td>
                    </tr>
                @endforeach --}}

                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->university->university_name }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td><button>View</button></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


@endsection

{{-- page content section ends --}}



{{-- page script starts --}}

@push('script')
    <script></script>
@endpush

{{-- page script ends --}}
