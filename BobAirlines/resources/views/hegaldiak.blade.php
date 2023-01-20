<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .hegaldiak {
            display: flex;
            flex-wrap: wrap;
        }

        .hegaldiaKutxa {
            border: solid 1px black;
            margin: 15px;
            padding: 10px;
            display: flex;
            flex-direction: column;

        }

        .formularioa{
            width: 25%;
        }
        .eguneratukutxa{
            display: flex;
            flex-direction: column;
        }
    </style>
    <title>Hegaldiak</title>
</head>

<body>
    <div class="hegaldiak">
        @foreach ($hegaldiak as $h)
        <div class="hegaldiaKutxa">
            <div>id-a {{$h -> id}}</div>
            <div>irteeraAireportua {{$h -> irteeraAireportua}}</div>
            <div>helmugaAireportua {{$h -> helmugaAireportua}}</div>
            <div>irteeraEguna {{$h -> irteeraEguna}}</div>
            <div>iraupena {{$h -> iraupena}}</div>
        </div>
        @endforeach
    </div>

    <div class="formularioa">
        <h3>Eguneratu hegaldi bat</h3>
        <form action=" {{ route('hegaldiaUpdate') }} " method="POST">
            @csrf
            <div class="mb-4 eguneratukutxa">
                <label class="form-label">Editatu nahi duzun hegaldiaren id-a</label>
                <input type="number" class="form-control" name="id">
                <br>
                <label class="form-label">irteeraAireportua</label>
                <input type="text" class="form-control" name="irteeraAireportua">
                <label class="form-label">helmugaAireportua</label>
                <input type="text" class="form-control" name="helmugaAireportua">
                <label class="form-label">irteeraEguna</label>
                <input type="date" class="form-control" name="irteeraEguna">
                <label class="form-label">iraupena</label>
                <input type="text" class="form-control" name="iraupena">
            </div>
            <button type="submit" class="btn btn-primary">Hegaldia egueratu</button>
        </form>
    </div>
</body>

</html>