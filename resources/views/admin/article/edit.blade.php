@extends('layouts.admin.app')

@section('content')
   <div class="content">
        <div class="row">
          <div class="col-md-11">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">{{ $title }}</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="/list-article/{{ $article->id }}">
                    @csrf
                    @method('PUT')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $article -> title }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Description" name="description" value="{{ $article -> description }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{ $article -> slug }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control textarea" placeholder="Isi Aja" name="body" >{{ $article -> body }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round">Edit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
