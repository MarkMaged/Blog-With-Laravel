@extends('admin.layout.main-admin')

@section('title', 'Create Blog')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>Add Blog</h2>
                <div class="card col-md-10">
                    <div class="card-body ">
                        <form class="row g-3" method="POST" action="{{ route('blog.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputTitle4" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputTitle4" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            <div class="col-12">
                                <label for="inputContent4" class="form-label">Content</label>
                                <textarea class="form-control" name="content" id="inputContent4" cols="30"
                                    rows="10">{{ old('content') }}</textarea>
                                <!-- <input type="text" id="inputContent4" name="content"> -->
                            </div>
                            <div class="col-6">
                                <label for="inputImage" class="form-label">Image</label>
                                <input type="file" class="form-control" id="inpuImage" name="image">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
