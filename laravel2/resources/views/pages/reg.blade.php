@extends("bootstrap_section.head")
@section("content")
    <div class="form-group">
        @if(session("info"))
            <div class="col-mg-6 alert alert-success">
                {{session("info")}}
            </div>
        @endif

        @if($errors->has())
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif
        {{Form::open(["action"=>"user_controller@store","method"=>"POST","class"=>"form-group","enctype"=>"multipart-form-data"])}}
        {{csrf_token()}}
        <div class="form-group">
            {{Form::label("name","Name")}}
            {{Form::text("name","",["class"=>"form-control","placeholder"=>" NAME"])}}
        </div>
        <div class="form-group">
            {{Form::label("pass","Pass")}}
            {{Form::text("pass","",["class"=>"form-control","placeholder"=>"PASSWORD"])}}
        </div>
        <div class="form-group">
            {{Form::label("email","Email")}}
            {{Form::text("email","",["class"=>"form-control","placeholder"=>"EMAIL"])}}
        </div>
        {{Form::submit("Save","",["class"=>"form-control"])}}

        {{Form::close()}}
    </div>
@endsection
@extends("bootstrap_section.main")