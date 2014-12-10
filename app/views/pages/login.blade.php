@extends('layouts.default')

@section('body')

        {{--@if(Session::has('flash_message'))--}}
        {{--{{dd(Session)}}--}}
            {{--<div class="alert alert-danger">--}}
                {{--<h2>{{Session::get('flash_message')}}</h2>--}}
                {{--</div>--}}
        {{--@endif--}}
    {{Form::open(['route'=>'session.login'])}}

          <!-- Firstname Form method -->
                 <div class="form-group">
                         {{Form::label('email', 'Email: ')}}
                         {{Form::email('email',null, ['placeholder'=>'john@doe.com','class'=>'form-control'])}}
                        {{$errors->first('email',"<div class='alert alert-danger'>:message</div>")}}
                 </div>
            <!--  input Form method -->
            <div class="form-group">
                    {{Form::label('password', 'Password:')}}
                    {{Form::password('password', ['placeholder'=>'Paaword','class'=>'form-control'])}}
                    {{$errors->first('password',"<div class='alert alert-danger'>:message</div>")}}
                </div>

                <div class="form-group">
                {{Form::submit('Register', ['class'=>'btn btn-primary '])}}
                </div>

    {{Form::close()}}

@stop