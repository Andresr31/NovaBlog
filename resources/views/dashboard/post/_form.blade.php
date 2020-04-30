<div class="form-group">
    <label>Titulo</label>
<input type="text" class="form-control" id="titulo" name="title" value="{{old('title',$post->title)}}" >
</div>
<div class="form-group">
    <label>Url</label>
    <input type="text" class="form-control" id="url" name="url_clean" value="{{old('url_clean',$post->url_clean)}}" >

</div>
<div class="form-group">
    <label>Contenido</label>
    <textarea class="form-control" id="contenido" name="content"rows="3">{{old('content',$post->content)}}</textarea>
    {{-- @error('content')
        <small class="text-danger">{{$message}}</small>
    @enderror --}}
</div>

