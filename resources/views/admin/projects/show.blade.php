@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <span>
                {{ $project->id }}
            </span>
            <h1>
                {{ $project->title }}
            </h1>
            <h2>
                {{ $project->author }}
            </h2>
            <h3>
                {{ $project->date }}
            </h3>
            <h4>
                {{ $project->link }}
            </h4>
            <p>
                {{ $project->content }}
            </p>
        </div>
    </div>
</div>
@endsection

