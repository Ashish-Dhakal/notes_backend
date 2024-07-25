{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', 'Free Course')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')


    <h1>Create Free Course</h1>

    <form action="{{ route('freeCourse.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="exampleFormControlInput1"
                placeholder="Course Name">
            @error('course_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Course Mentor</label>
            <input type="text" class="form-control" name="course_by" id="exampleFormControlInput1"
                placeholder="Course mentor">
            @error('course_by')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Course Link</label>
            <input type="text" class="form-control" name="course_link" id="exampleFormControlInput1"
                placeholder="Course Link">
            @error('course_link')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                id="inputImage">
            @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary"> Submit Course</button>

        <div class="back mt-4">
            <a href="{{ route('freeCourse.index') }}"> View Course List </a>
        </div>
    </form>



@endsection

{{-- page content section ends --}}



{{-- page script starts --}}

@push('script')
    <script></script>
@endpush

{{-- page script ends --}}
