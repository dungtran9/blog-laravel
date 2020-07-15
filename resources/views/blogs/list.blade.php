@extends('home')
@section('title','danh sach blog')
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($blogs) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($blogs as $key => $blog)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->author }}</td>
                    <td><img style="width: 100px" src={{asset("storage/".$blog->image)}}></td>
                    <td><a href="">sửa</a></td>
                    <td><a href="{{route('blogs.delete',$blog->id)}}" class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="col-12">
        <div class="row">
            <div class="col-10">
                <a class="btn btn-primary" href="{{ route('blogs.create') }}">Thêm mới</a>
            </div>
            <div class="col-2" >
{{--                {{ $customers->links() }}--}}
            </div>
        </div>
    </div>

@endsection
