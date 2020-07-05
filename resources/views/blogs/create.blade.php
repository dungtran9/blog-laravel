@extends('home')
@section('title', 'Thêm mới blog')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Viết Bài </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title"   required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">content</label>
                        <textarea  class="form-control" name="contentt" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file"  name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
