<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset("/css/edit.css")}}">
</head>
<body>
    <div class="form">
        <h1>Modifier la Tâche</h1>
        <form action="" method="post">
            @csrf
            {{-- <input type="hidden" name="id" value="{{$tache->id}}">--}}
            <label for="title">Title: </label><br>
            <input type="text" name="title" value="{{$tache->title}}"><br>
            <label for="description">Description: </label><br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description">{{$tache->description}}</textarea><br>
            <label for="completed">Complete: </label>
            <input type="checkbox" name="completed" id="completed"><br>
            <div class="button">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</body>
</html>
