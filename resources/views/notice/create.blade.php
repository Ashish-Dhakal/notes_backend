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

    <form action="{{ route('notice.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Notice title</label>
            <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="exampleFormControlInput1"
                placeholder="Notice Title">
            @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Notice Message</label>
            <input type="text" class="form-control" value="{{ old('message') }}" name="message" id="exampleFormControlInput1"
                placeholder="Notice Title">
            @error('message')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <button class="btn btn-primary"> Submit Notice</button>

        <div class="back mt-4">
            <a href="{{ route('notice.index') }}"> View Notice List </a>
        </div>
    </form>









@endsection

{{-- page content section ends --}}



{{-- page script starts --}}

@push('script')
    <script></script>
@endpush

{{-- page script ends --}}
