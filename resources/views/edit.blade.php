@extends("layout.master")
@section('titel', 'My website')
@section('content')
    <h1>แก้ไข</h1>
    {{-- create form --}}
    <form action="/store" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="content" value="{{ $todolist->content }}" class="form-control" id="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
