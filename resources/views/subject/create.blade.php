{{-- Extending the main layout page --}}
@extends('main-layout')

{{-- Page header --}}
@section('title', 'Subject')

{{-- Page style --}}
@push('style')
    <style></style>
@endpush

{{-- Page content section --}}
@section('content')
    <h1>Create Free Course</h1>

    <form action="{{ route('subject.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="selectUniversity" class="form-label">Select University</label>
            <select class="form-control" name="university_id" id="selectUniversity">
                <option value="">Select University</option>
                @foreach ($universities as $university)
                    <option value="{{ $university->id }}">{{ $university->university_name }}</option>
                @endforeach
            </select>
            @error('university_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="selectCourse" class="form-label">Select Course</label>
            <select class="form-control" name="course_id" id="selectCourse">
                <option value="">Select Course</option>
            </select>
            @error('course_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subjectName" class="form-label">Subject Name</label>
            <input type="text" class="form-control" value="{{ old('subject_name') }}" name="subject_name"
                id="subjectName" placeholder="Subject Name">
            @error('subject_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pdfFile" class="form-label">Subject File (PDF)</label>
            <input type="file" class="form-control" id="pdfFile" name="pdf_file">
            @error('pdf_file')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subjectCode" class="form-label">Subject Code</label>
            <input type="number" class="form-control" value="{{ old('subject_code') }}" name="subject_code"
                id="subjectCode" placeholder="Subject Code">
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

{{-- Page script --}}
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectUniversity = document.getElementById('selectUniversity');
            const selectCourse = document.getElementById('selectCourse');

            selectUniversity.addEventListener('change', function() {
                const universityId = selectUniversity.value;

                // Clear existing options
                selectCourse.innerHTML = '<option value="">Select Course</option>';

                // Populate courses based on selected university
                if (universityId) {
                    fetch(`/universities/${universityId}/courses`)
                        .then(response => response.json())
                        .then(courses => {
                            courses.forEach(course => {
                                const option = document.createElement('option');
                                option.value = course.id;
                                option.textContent = course.course_name;
                                selectCourse.appendChild(option);
                            });
                        });
                }
            });
        });
    </script>
@endpush
