@extends ('layout/app')

@section ('style')
	<link rel="stylesheet" href="{{ URL::asset('style/style.css') }}">
@endsection

@section ('script')
	<script src="{{ URL::asset('scripts/script.js') }}" charset="utf-8"></script>
@endsection

@section ('content')
<div class="web-txt">
    <h1>Random Dog generator</h1>


</div>

<div class="app-wrapper">
<select id="breed-selection">
        <option value="random">Random</option>
        <option value="whippet">Whippet</option>
        <option value="labrador">Labrador</option>
        <option value="beagle">Beagle</option>
        <option value="poodle">Poodle</option>
        <option value="husky">Husky</option>
        <option value="beagle">Beagle</option>
        <option value="akita">Akita</option>
        <option value="puggle">Puggle</option>
        <option value="boxer">Boxer</option>
        <option value="rottweiler">Rottweiler</option>
        <option value="pembroke">Pembroke</option>


    </select>
    <button class="generate-dog">Generate Dog</button>
    <div id="image-container"></div>
</div>
@endsection