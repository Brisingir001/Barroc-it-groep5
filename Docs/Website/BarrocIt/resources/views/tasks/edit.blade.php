@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Klant</div>

                    <div class="panel-body">

                        {!! Form::model($task,array('route'=>['task.update',$task->id],'method'=>'PUT')) !!}
                            <div class="form-group">
                                {!! Form::label('voornaam','Voornaam') !!}
                                {!! Form::text('voornaam',null,['class'=>'form-control']) !!}
                            </div>

                        <div class="form-group">
                            {!! Form::label('achternaam','Achternaam') !!}
                            {!! Form::text('achternaam',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('adres','Adres') !!}
                            {!! Form::text('adres',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('postcode','Postcode') !!}
                            {!! Form::text('postcode',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('woonplaats',' Woonplaats') !!}
                            {!! Form::text('woonplaats',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('telefoon','Telefoonnummer') !!}
                            {!! Form::text('telefoon',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email','Email') !!}
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('iban','IBAN') !!}
                            {!! Form::text('iban',null,['class'=>'form-control']) !!}
                        </div>

                            <div class="form-group">
                                {!! Form::label('body','Opmerkingen') !!}
                                {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>

                @if($errors->has())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection
