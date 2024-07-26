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
            <label for="exampleFormControlInput1" class="form-label">Select Subject</label>
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

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Question</label>
            <input type="text" class="form-control" value="{{ old('question') }}" name="question"
                id="exampleFormControlInput1" placeholder="Question">
            @error('question')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        


        <div class="row pb-3">
            <div class="col-md-4 col-12 ">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Option 1</label>
                    <input type="text" class="form-control" value="{{ old('option-1') }}" name="option-1"
                        id="exampleFormControlInput1" placeholder="option 1">
                    @error('option-1')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="col-md-4 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Option 2</label>
                    <input type="text" class="form-control" value="{{ old('option-2') }}" name="option-2"
                        id="exampleFormControlInput1" placeholder="option 2">
                    @error('option-2')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>


        <div class="row pb-3">
            <div class="col-md-4 col-12 ">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Option 3</label>
                    <input type="text" class="form-control" value="{{ old('option-3') }}" name="option-3"
                        id="exampleFormControlInput1" placeholder="option 3">
                    @error('option-3')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="col-md-4 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Option 4</label>
                    <input type="text" class="form-control" value="{{ old('option-4') }}" name="option-4"
                        id="exampleFormControlInput1" placeholder="option 4">
                    @error('option-4')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>




 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Select Course</label>
            <select class="form-control" name="correct_ans" id="">
                <option value="">Correct Answer</option>

                <option value="option-1">option 1</option>
                <option value="option-2">option 2</option>
                <option value="option-3">option 3</option>
                <option value="option-4">option 4</option>

            </select>
            @error('correct_ans')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Reason</label>
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
