@extends('admin.layout.main-admin')
@section('title', 'Blogs')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

                <h2>Blogs
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $blogs as $blog )

                            <tr>
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->image}}</td>
                                <td>
                                    <a href="{{route('blog.show' , $blog->id)}}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="edit-blog.php?id=" class="btn btn-outline-info btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('blog.delete', $blog->id)}}"
                                        class="btn btn-danger btn-sm sa-btn-delete">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/b1f5ce348e.js" crossorigin="anonymous"></script>
@endsection
