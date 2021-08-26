@extends('base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route("addnews")}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="news_title" id="" class="form-control">
                        @error('news_title')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">State</label>
                        <select name="state_id" id="" class="form-control">
                            <option value="">Select state</option>
                            @foreach ($states as $s)
                                <option value="{{$s->id}}" class="dropdown-toggle">{{$s->state_title}}</option>
                                <option value=""><a href="#insert" data-bs-toggle="modal">Add new state</a></option>


                            @endforeach
                        </select>
                        @error('state_id')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Author</label>
                        <input type="text" name="author" id="" class="form-control">
                        @error('author')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                        @error('image')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post</label>
                        <input type="text" name="news" id="" class="form-control">
                        @error('news')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Add News" class="w-50 btn btn-dark">
                    </div> 
                </form>
            </div>
        </div>
    </div>

    
    
@endsection