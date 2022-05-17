@extends('admin.layout.main-admin')

@section('title', 'show blog')



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
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $blog_show -> id }}</td>
                                <td>{{ $blog_show -> title}}</td>
                                <td>{{ $blog_show -> image}}</td>
                                <td>{{ $blog_show -> content}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>
@endsection
