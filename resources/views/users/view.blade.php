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


    <div class="accordion container" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              user Info
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <h1>Name:- <span class="h4"> {{$users->name}}</span></h1>
                <h2>Email:- <span class="h4"> {{$users->email}}</span></h2>
                <hr>
                <h4>Joined At:- <h1>
                        <p class="h6"> {{$users->created_at}}</p>
                    {{-- <p class="h6"> {{$posts-> user-> name}}</p> --}}

            </div>
          </div>
        </div>

      </div>
      <br>

    </div>

    <hr>
    <br>
    <br>

    @foreach ($users->posts as $userPosts)


    <div class="accordion container " id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Post Info
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <h1>title:- <span class="h4"> {{$userPosts->title}}</span></h1>
                <h2>description:- <span class="h4"> {{$userPosts->description}}</span></h2>
                <hr>
                <h4>CreatedAt:- <h1>
                        <p class="h6"> {{$userPosts->created_at}}</p>

            </div>
          </div>
        </div>

      </div>
      <br>

    </div>

    @endforeach




</body>
</html>
