@extends('dashboard.layout')

@section('scripts')
    <script src="{{ asset('js/simplemde.min.js') }}"></script>
    <script>
        new SimpleMDE({ element: document.getElementById("bodyEditor") });
    </script>
@endsection

@section('content')
    <div class="content">
        <div class="inner-content">
            <h1>Write a new article</h1>
            <hr>
            {!! Form::open(['url' => '/dashboard/post/create/']) !!}

            <div class="form-group">
            {!! Form::label('title', "Title:") !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('content', "Content:") !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', "id" => "bodyEditor"]) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Add post', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
