<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LOL</title>
</head>

<body>
    <div class="container-fluid py-5 text-center">
        <div class="row justify-content-center">
            @foreach ($champions as $champion)
            <div class="card" style="width:30rem;">
                <a href="{{ route('champion.show', ['champion' => $champion]) }}">
                    <img class="img-thumbnail mx-auto" src="{{$champion->imageFull}}" alt="Card image cap" style="max-width:200px;">
                </a>
                <div class="card-body">
                <a href="{{ route('champion.show', ['champion' => $champion]) }}">
                    <h5 class="card-title">{{$champion->name}}</h5>
                </a>
                    <p class="card-text">{{$champion->title}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Updated at: {{$champion->updated_at}}</small>
                </div>
            </div>
            @endforeach
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>