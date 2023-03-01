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

    <form class="container" action="{{route('posts.store')}} "method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" aria-describedby="emailHelp" name="author">
          </div>

          <div class="mb-3">
            <label for="user_id" class="form-label">user_id</label>
            <input type="text" class="form-control" id="author" aria-describedby="emailHelp" name="user_id">
          </div>



          <div class="mb-3">
              <label for="description" class="form-label">description</label>
            <textarea class="form-control" placeholder="enter description" id="description" style="height: 100px" name="description"></textarea>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</body>
</html>
