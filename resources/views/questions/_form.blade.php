@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" id="question-title" name="title" value="{{ old('title',$question->title) }}" class="form-control {{ $errors->has('title') ? 'is-invalid d-block': '' }}''">
    @if($errors->has('title'))
        <div class="invalid-feedback d-block">
            <strong>{{ $errors->first('title') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Explain your question</label>
    <textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid d-block': '' }}''" cols="30" rows="10">{{old('body',$question->body)}}</textarea>
    @if($errors->has('body'))
    <div class="invalid-feedback d-block">

        <strong>{{ $errors->first('body') }}</strong>
    </div>
@endif
</div>
<div class="form-group">
    <button class="btn btn-outline-primary btn-lg" type="submit">{{$buttonText}}</button>
</div>
