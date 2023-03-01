<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ITI Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link active" href="{{route('users.index')}}" aria-current="page" >All Users</a>

            </li>
                <li class="nav-item">
                    <a class="btn btn-warning  " href="{{route('posts.create')}}">create</a>

                </li>
            </ul>

          </div>
        </div>
      </nav>

      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Creator</th>
            <th scope="col">CreatedAt</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{$post -> id}}</th>
                <td>{{$post -> title}}</td>
                <td>{{$post -> user -> name}}</td>
                <td>{{$post -> created_at}}</td>
                <td class="m-2">
                    <a class="btn btn-primary">view</a>
                    <a class="btn btn-success" href="{{route('posts.edit')}}">update</a>
                    <button class="btn btn-danger">delete</button>
                </td>
              </tr>
              @endforeach

          {{-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr> --}}

        </tbody>
      </table>

</body>
</html>
