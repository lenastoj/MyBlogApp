<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold">{{ $post->title }}</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">{{ $post->body }}</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="/posts" type="button" class="btn btn-outline-secondary btn-lg px-4">Back to all posts</a>
          </div>
        </div>
      </div>
  </div>

  <div class="container" style="margin-top: 5rem;">
    <form action="{{ url('createcomment') }}" method="POST">
        @csrf
    {{-- <h5>Create new comment</h5> --}}
    <div class="mb-3">
        <label class="form-label">Enter Comment</label>
        <textarea class="form-control" name="body" id="body" cols="30" placeholder="Enter your comment" required></textarea>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
    </div>
    <button type="submit" class="btn btn-primary">Post comment</button>
    </form>
    </div>


<div class="container">
 @foreach ($post->comments as $comment)
     {{-- <ul>
        <li>{{ $comment->body }}</li>
     </ul> --}}
     {{-- <p>{{ $comment->body }}</p> --}}
     <div class="row align-items-md-stretch" style="margin-top: 1rem;">
        <div class="col-md-6">
          <div class="h-100 p-5 text-bg-dark rounded-3">
            <h4>Comment: {{ $comment->id }}</h4>
            <p>{{ $comment->body }}</p>
            {{-- <button class="btn btn-outline-light" type="button">Example button</button>     --}}
          </div>
        </div>
        <div
 @endforeach
    </div>
        </div>

    </div>

 
</body>
</html>