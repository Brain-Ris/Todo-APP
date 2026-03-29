<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset("/css/add.css")}}">
</head>
<body>

    <div class="form">
        <h1>Ajouter une Tâche</h1>
        <form action="" method="POST">
            @csrf
            <label for="title" >Tache:</label><br>
            <input type="text" name="title" placeholder="Tâche"><br>
            <label for="description">Description:</label><br>
            <textarea name="description" placeholder="Description"></textarea><br>
            <div class="button">
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </div>

</body>
</html>
