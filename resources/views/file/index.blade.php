<x-new-layout>
<form method="POST" action="/upload/image"enctype="multipart/form-data">
    {{ csrf_field() }}

<div>
    <label for="Image upload">Upload image</label>
</div>
<div>
    <label for="Description">Description</label>
</div>
<div>
    <input type="text"name="description">
</div>
<div>
    <input type="file"name="image">
</div>
<div>
<button>Upload</button>
</div>
@if(isset($myimage))
<img src="{{asset("storage/$myimage")}}">
@endif
</form>

</x-new-layout>