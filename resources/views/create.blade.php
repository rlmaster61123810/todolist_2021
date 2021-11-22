@extends("layout.master")
@section('titel', 'My website')
@section('content')
    <h1>สร้าง Todo</h1>
    {{-- create todo from simple --}}
    <form action="/store" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
