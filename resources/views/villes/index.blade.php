@vite(["resources/css/app.css", "resources/js/app.js"])
<a href="{{route("villes.create")}}">Ajouter Ville</a> <br/>
@foreach($villes as $ville)
    {{$ville->name}}<br/>
    {{$ville->content}}<br/>
    <hr/><br/>
@endforeach
{{$villes->links()}}
