    <div class="form-group">
        <label for="title">Title:</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $article->title }}" required>
    </div>
    <div class="form-group">
        <label for="presenter">Presenter:</label>
        <input type="text" class="form-control" name="presenter" id="presenter" value="{{ $article->presenter->name }}" required>
    </div>
    <div class="form-group">
        <label for="presenter_email">Presenter's email:
            <input type="email" class="form-control" name="presenter_email" id="presenter_email" value="{{ $article->presenter->email }}">
        </label>
        <label for="presenter_website">Presenter's website:
            <input type="text" class="form-control" name="presenter_website" id="presenter_website" value="{{ $article->presenter->website }}">
        </label>
    </div>
    <div class="form-group">
        <label for="tag">Tag(s): </label>
        <select class="js-example-basic-multiple js-states form-control" name="tag_list[]" id="tag_list" multiple="multiple">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
            <p style="display: inline-block">Your tag not included?</p>

            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#createTag">Create Tag</a>
    </div>
            
    <div class="form-group">
        <label for="body">Content: </label>
        <textarea name="body" id="body" class="form-control" rows=15>{{ $article->body }}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Edit Article</button>
    </div>