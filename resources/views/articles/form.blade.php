

<div class="form-froup">
    {!! Form::label('title', '���������:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('body', '�����:') !!}

    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('published_at', '������������:') !!}

    {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-froup">

    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
