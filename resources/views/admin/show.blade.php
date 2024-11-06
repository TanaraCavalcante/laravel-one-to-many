@extends("layouts.app")

@section("content")
<section class="row">
    <div class="card container p-5 my-5 col-6" >
        <div class="card-body">
        <h2 class="card-title">{{$project->title}}</h2>
        <h5 class="card-text mb-4">{{$project->description}}</h5>
        <p class="card-text"><strong>Category: </strong>{{$project->category}}</p>
        <p class="card-text"><strong>Teck Stack: </strong>{{$project->tech_stack}}</p>
        <p class="card-text"><strong>GitHub Link: </strong>{{$project->github_link}}</p>
        <p class="card-text"><strong>Creation Date: </strong>{{$project->creation_date}}</p>
        </div>
    </div>
</section>
@endsection
