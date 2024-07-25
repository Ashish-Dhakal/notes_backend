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





    <h1></h1>

    <form action="{{ route('quiz.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Select Course</label>
            <select class="form-control" name="subject_id" id="">
                <option value="">Select Subject</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                @endforeach
            </select>
            @error('subject_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="row pb-3">
            <div class="col-md-4 col-12 ">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question 1</label>
                    <input type="text" class="form-control" value="{{ old('question-1') }}" name="question-1"
                        id="exampleFormControlInput1" placeholder="Question 1">
                    @error('question-1')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="col-md-4 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question 2</label>
                    <input type="text" class="form-control" value="{{ old('question-2') }}" name="question-2"
                        id="exampleFormControlInput1" placeholder="Question 2">
                    @error('question-2')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>


        <div class="row pb-3">
            <div class="col-md-4 col-12 ">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question 3</label>
                    <input type="text" class="form-control" value="{{ old('question-3') }}" name="question-3"
                        id="exampleFormControlInput1" placeholder="Question 3">
                    @error('question-3')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="col-md-4 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question 4</label>
                    <input type="text" class="form-control" value="{{ old('question-4') }}" name="question-4"
                        id="exampleFormControlInput1" placeholder="Question 4">
                    @error('question-4')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>




 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Select Course</label>
            <select class="form-control" name="correct_ans" id="">
                <option value="">Correct Answer</option>

                <option value="question-1">Question 1</option>
                <option value="question-2">Question 2</option>
                <option value="question-3">Question 3</option>
                <option value="question-4">Question 4</option>

            </select>
            @error('correct_ans')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Question 1</label>
            <input type="text" class="form-control" value="{{ old('reason') }}" name="reason"
                id="exampleFormControlInput1" placeholder="Reason">
            @error('reason')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary"> Submit Quiz</button>

        <div class="back mt-4">
            <a href="{{ route('quiz.index') }}"> View Quiz List </a>
        </div>
    </form>









@endsection

{{-- page content section ends --}}



{{-- page script starts --}}

@push('script')
    <script></script>
@endpush

{{-- page script ends --}}
