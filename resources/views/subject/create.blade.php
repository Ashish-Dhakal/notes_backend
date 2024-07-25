{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', 'Subject')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')






    <h1>Create Free Course</h1>

    <form action="{{ route('subject.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Select Course</label>
            <select class="form-control" name="course_id" id="">
                <option value="">Select Course</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name}}</option>
                @endforeach
            </select>
            @error('course_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject Name</label>
            <input type="text" class="form-control" value="{{old('subject_name')}}"  name="subject_name" id="exampleFormControlInput1"
                placeholder="Subject Name">
            @error('subject_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject Code</label>
            <input type="text" class="form-control" value="{{old('subject_code')}}" name="subject_code" id="exampleFormControlInput1"
                placeholder="Subject Name">
            @error('subject_code')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <button class="btn btn-primary"> Submit Subject</button>

        <div class="back mt-4">
            <a href="{{ route('subject.index') }}"> View Subject List </a>
        </div>
    </form>





@endsection

{{-- page content section ends --}}



{{-- page script starts --}}

@push('script')
    <script></script>
@endpush

{{-- page script ends --}}
