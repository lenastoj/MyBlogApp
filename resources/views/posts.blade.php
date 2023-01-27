<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    {{-- @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    @endforeach --}}
    @include('components.header')

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($posts as $post)
            <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                  <div class="card-body">
                    <h3 class="card-text">{{ $post->title }}</h3>

                    <p class="card-text">{{ $post->body }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="/posts/{{ $post->id }}" class="btn btn-sm btn-outline-secondary">View</a>
                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> --}}
                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('components.footer')
    </div>
</body>
</html>