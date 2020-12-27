{{-- <div class="form-group">
    <label>Name</label>
    <input id="user_name" type="text" name="user_name"  value="{{ old('user_name', $post->user->name ?? null) }}">
</div> --}}

<div class="form-group">
    <label>Unique Employee Identification</label>
    <input id="unique" type="text" name="unique" aria-describedby="uniqueHelp" value="{{ old('unique', $post->unique ?? null) }}">
    <small id="uniqueHelp" class="form-text text-muted">* This field is not mandatory</small>
</div>
