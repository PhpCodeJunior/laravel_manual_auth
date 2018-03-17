@extends("bootstrap_section.head")
@section("content")
    <h1 class="bg-primary">WELCOME TO OUR PAGE</h1>
    @if(session("info"))
        <div class="col-mg-6 alert alert-success">
            {{session("info")}}
        </div>
    @endif
    @if(Auth::user())
        <a href="{{url('/logout')}}">Logout</a>
    @endif
@endsection
@extends("bootstrap_section.main")
