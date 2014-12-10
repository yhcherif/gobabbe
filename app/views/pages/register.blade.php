@extends('layouts.default')

@section('body')

    {{Form::open(['route'=>'session.store'])}}

        <!-- Firstname Form method -->
        <div class="form-group">
                {{Form::label('Firstname', 'First name: ')}}
                {{Form::text('firstname',null, ['placeholder'=>'John','class'=>'form-control'])}}
                {{$errors->first('firstname',"<div class='alert alert-danger'>:message</div>")}}
        </div>

         <!-- Firstname Form method -->
                <div class="form-group">
                        {{Form::label('lastname', 'Last name: ')}}
                        {{Form::text('lastname',null, ['placeholder'=>'Doe','class'=>'form-control'])}}
                        {{$errors->first('lastname',"<div class='alert alert-danger'>:message</div>")}}
                </div>

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