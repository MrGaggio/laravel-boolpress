//estende il layout del file app.blade contenuto in layouts
@extends('layouts.app')




// qua ci mettiamo il container con il form
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.posts.store') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>

                  <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                  </div>
                <input class="btn btn-primary" type="submit" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection