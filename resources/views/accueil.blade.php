<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TO DO APP</title>
    <link rel="stylesheet" href="{{asset('/css/accueil.css')}}">
</head>
<body>
    <div class="nav">
        <button><a href="/add">Ajouter +</a></button><br>
    </div>
    <div class="container">
        <h1>Listes des Taches</h1>
        @if(count($taches)==0)
            <p>La liste des taches est vide</p>
        @else
            <br>
            <table border="1" width="100%">
                <tr>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                @foreach($taches as $t)
                    <tr>
                        <td>{{$t->title}}</td>
                        <td>{{$t->completed? "Termine":"Non Termine"}}</td>
                        <td>{{$t->description}}</td>
                        <td class="bcentre">
                            <button><a onclick="return confirmer()" href="/delete/{{$t->id}}">Supprimer</a></button>
                            <button ><a href="/edit/{{$t->id}}">Modifier</a></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
<script>
    function confirmer(){
        return confirm("voulez vous vraiment supprimer cette tache?");
    }
</script>
</body>
</html>
