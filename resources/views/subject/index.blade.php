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
    <h1>Subject list</h1>

    <h4> <a href="{{ route('subject.create') }}" style="text-decoration: none;
    float:right; ">Add Free Course</a>
    </h4>


    <table class="table table-bordered" style="width:75%">
        <thead>
            <tr>
                <th scope="col">SN.</th>
                <th scope="col">Course Name</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $subject->course->course_id}}</td>
                    <td>{{ $subject->subject_name}}</td>
                    <td>{{ $subject->subject_code}}</td>
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
