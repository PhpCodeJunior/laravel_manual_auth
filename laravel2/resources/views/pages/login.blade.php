@extends("bootstrap_section.head")
@section("content")
<div class="form-group">
    @if($errors->has())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    {{Form::open(["action"=>"login_controller@store ","method"=>"POST","class"=>"form-group"])}}
    <div class="form-group">
        {{Form::label("email","Email")}}
        {{Form::text("email","",["class"=>"form-control","placeholder"=>" EMAIL"])}}
    </div>
    <div class="form-group">
        {{Form::label("pass","Pass")}}
        {{Form::text("pass","",["class"=>"form-control","placeholder"=>"PASSWORD"])}}
    </div>
        {{Form::submit("LOGIN","",["class"=>"btn btn-success"])}}

        {{Form::close()}}
</div>
@endsection
@extends("bootstrap_section.main")