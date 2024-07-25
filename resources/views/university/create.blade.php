{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', 'Create University')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')

<div class="h1 m-2">
    <h1>Create University</h1>
</div>


    <div class="container">

        <form action="{{route('university.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University Name</label>
                <input type="text" class="form-control" name="university_name" id="exampleFormControlInput1"
                    placeholder="University Name">
            </div>

            <button class="btn btn-primary"> Submit University</button>

            <div class="back mt-4">
                <a href="{{route('university.index')}}"> View University List </a>
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
