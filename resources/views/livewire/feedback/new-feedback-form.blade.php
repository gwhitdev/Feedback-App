<div>
    @error('status') {{$message}} @enderror
    
    @error('user_id') {{$message}} @enderror
    <form wire:submit.prevent="create">
         
        <label for="title">Feedback Title</label>
        <input type="text" name="title"wire:model='title' >@error('title'){{$message}}@enderror
        <label for="category">Category</label>
        <select name="category_id" wire:model='category_id'>
            <option value="Choose a category">Choose a category</option>
            @foreach($categories as $category)
            <option value="{{$category['id']}}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        @error('category_id') {{$message}} @enderror
        <label for="detail">Feedback Detail</label>
        <input type="text" name="detail" wire:model='detail'>@error('detail'){{$message}}@enderror
       
        <button>Save</button>
    </form>
</div>
