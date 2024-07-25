{{-- extending the main layout page start --}}

@extends('main-layout')

{{-- extending the main layout page ends --}}



{{-- page header start --}}

@section('title', 'University')

{{-- page header ends --}}


{{-- page style starts --}}

@push('style')
    <style></style>
@endpush

{{-- page style ends --}}



{{-- page content section starts --}}

@section('content')

    <div class="container">

        <h1>University list</h1>

       <h4> <a href="{{route('university.create')}}" style="text-decoration: none; 
       float:right;
       ">Create University</a>
       </h4>


        <table class="table table-bordered" style="width:75%">
            <thead>
                <tr>
                    <th scope="col">SN.</th>
                    <th scope="col">University Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($university as $u)
                    <tr>
                        <th> {{ $loop->iteration }}</th>
                        <th>{{ $u->university_name }}</th>
                        <td><button>view</button></td>
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
