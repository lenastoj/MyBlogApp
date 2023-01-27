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

    <div class="container" style="margin-top: 5rem;">
        <form action="{{ url('createpost') }}" method="POST">
            @csrf
        <h1>Create new post</h1>
        <div class="mb-3">
            <label class="form-label">Enter Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Body</label>
            <textarea class="form-control" name="body" id="body" cols="30" placeholder="Body" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create post</button>
        </form>
    </div>

    @if ($errors->any()) 
        <div class="container" style="margin-top: 2rem;">
            <ul class="list-group" style="list-style: none;">
                @foreach ($errors->all() as $error)
                     <li class="alert alert-danger" >{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif

    @if (session('status'))
    <div class="container" style="margin-top: 2rem;"    >
        <div class="alert alert-success"> {{ session('status') }}</div>
    </div>
    @endif  
    
</body>
</html>