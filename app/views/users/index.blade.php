@extends('layouts.master')


@section('content')

    <div class="col-md-12">
        {{ link_to_route('users.create', 'Create a new post', null, array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::open(array('route' => 'users.store', 'autocomplete'=>'off')) }}
    @include('users.form', array('is_new'=>true) )
    <button type="submit">Submit</button>
    {{ Form::close() }}




@stop
