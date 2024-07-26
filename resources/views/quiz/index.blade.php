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
    <h1>Quiz list</h1>

    <h4> <a href="{{ route('quiz.create') }}" style="text-decoration: none;
    float:right; ">Add Quiz</a>
    </h4>


    <table class="table table-bordered" style="width:75%">
        <thead>
            <tr>
                <th scope="col">SN.</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Question 1</th>
                <th scope="col">Question 2</th>
                <th scope="col">Question 3</th>
                <th scope="col">Question 4</th>
                <th scope="col">Correct Answer</th>
                <th scope="col">Reason</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($quizzes as $quiz)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $quiz->subject->subject_name }}</td>
                <td>{{ $quiz->options['option-1'] }}</td>
                <td>{{ $quiz->options['option-2'] }}</td>
                <td>{{ $quiz->options['option-3'] }}</td>
                <td>{{ $quiz->options['option-4'] }}</td>
                <td>{{ $quiz->correct_ans }}</td>
                <td>{{ $quiz->reason }}</td>
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
