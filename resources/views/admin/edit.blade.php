@extends("layouts.app")

@section("content")
<section>
    <div class="container">
        <div class="row justify-content-center py-3">
            <h2 class="col-12 col-md-8 mb-5" >Editing {{$project->title}}</h2>

              {{-- Display de validaçao dos dados fornecidos pelo utente --}}
              @if ($errors->any())
              <div class="alert alert-warning">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif

            {{-- form em branco para coleta de dados do usuario--}}
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route("admin.update", $project->id)}}">
                    @method("PUT")

                    {{--  mando eu mesmo(form) as informaçoes ao store! --}}
                    @csrf

                    <div class="mb-3 row">
                      <label for="project-title" class="col-sm-3 col-form-label">Title</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="project-title" name="title" value="{{ old('title', $project->title)}}">
                     </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="project-description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="project-description" name="description" value="{{ old('description', $project->description)}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="project-category" class="col-sm-3 col-form-label">Category (Linguages)</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="project-category" name="category" value="{{ old('category', $project->category)}}">
                        </div>
                    </div>

                    {{--TODO dados da segunda tabela: Types --}}
                    <div class="mb-3 row">
                        <label for="project-types" class="col-sm-3 col-form-label">Project Type</label>
                        <div class="col-sm-8">
                        <select name="types" id="project-types" class="form-select">
                            @foreach ($types as $type)
                                <option value=" {{old('types',$type->id)}}">
                                    {{$type->name}}
                                </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    {{--TODO fim da tabela secundaria --}}

                    <div class="mb-3 row">
                        <label for="project-github_link" class="col-sm-3 col-form-label">GitHub Link</label>
                        <div class="col-sm-8">
                        <input type="url" class="form-control" id="project-github_link" name="github_link" value="{{ old('github_link', $project->github_link)}}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="project-tech_stack" class="col-sm-3 col-form-label">Project Type</label>
                        <div class="col-sm-2">
                        <input type="text" class="form-control" id="project-tech_stack" name="tech_stack" value="{{ old('tech_stack'), $project->tech_stack}}">
                        </div>

                        <label for="project-creation_date" class="col-sm-3 col-form-label text-end">Created on the date</label>
                        <div class="col-sm-3">
                        <input type="date" class="form-control " id="project-creation_date" name="creation_date" value="{{ old('creation_date', $project->creation_date)}}">
                        </div>
                    </div>

                    <div class="col-12 col-md-11 text-end">
                        <button type="submit" class="btn btn-outline-success my-3">Edit {{$project->title}}</button>
                        <button type="reset" class="btn btn-outline-warning  my-3">Reset Fields</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
