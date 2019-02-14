@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-centre">
                        <h2>All Questions </h2>
                        <a href="{{ route('questions.create')  }} " class="btn btn-outline-secondary"> Ask Question </a>
                    </div>
                    
                </div>

                    <div class="card-body">
                    @foreach ($questions as $question)
                        <div class="media">
                            <div class="media-body">  
                                <h3 class="mt-0"> <a href="{{ $question->url }}"> {{ $question->title }}</a> ></h3>
                                <p class="lead" >
                                    Ask by <a href="{{ $question->user->url }}">{{ $question->user->name}}</a>
                                    <small class="text-muted" >  {{ $question->created_date }} </small>
                                </p>
                                <!-- <h3 class="mt-0">{{ $question->title }}></h3> -->
                                {{ str_limit($question->body, 250) }}
                            </div>

                            </div>
                             <hr>
                        @endforeach
                        <div class="mx-auto"></div>
                        {{ $questions->links() }}

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection