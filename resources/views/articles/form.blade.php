

<div class="form-froup">
    {!! Form::label('title', 'Заголовок:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('body', 'текст:') !!}

    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('published_at', 'Опубликовать:') !!}

    {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-froup">

    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
