@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <!-- <h2>Ask  Questions </h2> -->
                        <h1>{{ $question->title }} </h1>
                        <div class="ml-auto"> 
                        <a href="{{ route('questions.index')  }} " class="btn btn-outline-secondary">  Back All Question </a>
                        </div>
                        
                    </div>
            
                </div>

                    <div class="card-body">
                    <h3>{{ $question->body }} </h3>

                    <!-- { !!  $question->body_html !! } -->
                    </form> 
                   <!-- <form action="{{ route('questions.store')}}" method="post"> -->
                   <!-- @csrf
                   <div class="form-group">
                    <label for="question-title"> Question title </label>
                    <input type="text" name="title" value="{{ old('title') }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}">
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                        <strong> {{ $errors->first('title')}}</strong>
                        </div>
                    @endif
                   </div>
                   <div class="form-group">
                    <label for="question-body"> Explain your question </label>
                    <textarea name="body" id="question-body" rows="10 "class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <div class="invalid-feedback">

                        <strong> {{ $errors->first('body')}}</strong>
                        </div>
                    @endif
                   
                   </div>
                   <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-lg"> Ask this Question</button>
                   </div> -->
                   <!-- @include ("questions._form",['buttonText' => "Ask Questions"]) -->
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection