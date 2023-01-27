<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>MyBlogApp</title>
</head>
<body>
    <div class="col-lg-8 mx-auto p-4 py-md-5">
     @include('components.header')
      
        <main>
          <h1>Welcome to MyBlog</h1>
          <p class="fs-5 col-md-8">Checkout current posts from MyBlog</p>
          <div class="mb-5">
            <a href="/posts" class="btn btn-primary btn-lg px-4">Go to posts</a>
          </div>
      
          {{-- <hr class="col-3 col-md-2 mb-5">
      
          <div class="row g-5">
            <div class="col-md-6">
              <h2>Starter projects</h2>
              <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
              <ul class="icon-list ps-0">
                <li class="d-flex align-items-start mb-1"><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
                <li class="text-muted d-flex align-items-start mb-1">Bootstrap Parcel starter (coming soon!)</li>
              </ul>
            </div>
      
            <div class="col-md-6">
              <h2>Guides</h2>
              <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
              <ul class="icon-list ps-0">
                <li class="d-flex align-items-start mb-1"><a href="/docs/5.3/getting-started/introduction/">Bootstrap quick start guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="/docs/5.3/getting-started/webpack/">Bootstrap Webpack guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="/docs/5.3/getting-started/parcel/">Bootstrap Parcel guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="/docs/5.3/getting-started/vite/">Bootstrap Vite guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="/docs/5.3/getting-started/contribute/">Contributing to Bootstrap</a></li>
              </ul>
            </div>
          </div> --}}
        </main>
        
       @include('components.footer')
      </div>
      
</body>
</html>