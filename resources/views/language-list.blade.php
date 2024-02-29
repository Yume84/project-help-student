<form action="{{ route('afficher-langue') }}" method="POST">
<h3>Quelle(s) langue(s) parles-tu ?</h3>
<div class="language">
    <select name="liste_language" id="liste_language">
        <option value="default">Sélectionne une langue</option>
        @foreach($languages as $language)
            <option value="{{ $language->id }}">{{ $language->label }}</option>
        @endforeach
    </select>
</div>

</form>
