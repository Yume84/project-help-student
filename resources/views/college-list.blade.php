<form action="{{ route('afficher-college') }}" method="POST">
<h3>Où étudies-tu ?</h3>
<div class="college">
    <select name="liste_college" id="liste_college">
        <option value="default">Sélectionne un campus</option>
        @foreach($colleges as $college)
            <option value="{{ $college->id }}">{{ $college->name }}</option>
        @endforeach
    </select>
</div>

</form>
