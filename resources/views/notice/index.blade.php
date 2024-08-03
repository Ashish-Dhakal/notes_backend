{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', 'Notice')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')




<div class="container">
    <h1>Notice list</h1>

    <h4> <a href="{{ route('notice.create') }}" style="text-decoration: none;
    float:right; ">Add Notice</a>
    </h4>


    <table class="table table-bordered" style="width:75%">
        <thead>
            <tr>
                <th scope="col">SN.</th>
                <th scope="col">Notice Title</th>
                <th scope="col">Notice Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($notices as $notice)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $notice->title }}</td>
                <td>{{ $notice->message }}</td>
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
