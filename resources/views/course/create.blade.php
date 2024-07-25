{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', 'Create Notes')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')

<div class="container">
    <h1>Create Course</h1>

    <form action="{{route('course.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Select University</label>
            <select class="form-control" name="university_id" id="">
                <option value="">Select University</option>
                @foreach ($universities as $university )
                <option value="{{$university->id}}">{{$university->university_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="exampleFormControlInput1"
                placeholder="Course Name">
                @error('course_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary"> Submit Course</button>

        <div class="back mt-4">
            <a href="{{route('course.index')}}"> View Course List </a>
        </div>
    </form>





</div>


@endsection

{{-- page content section ends --}}



{{-- page script starts --}}

@push('script')
    <script></script>
@endpush

{{-- page script ends --}}
