@include('header')
<div>
    <h1>Les utilisateurs</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach($utilisateurs as $utilisateur)
            <tr>
                <th scope="row">{{ $utilisateur -> nom }}</th>
                <th scope="row">{{ $utilisateur -> prenom }}</th>
                <th scope="row">{{ $utilisateur -> content }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('footer')