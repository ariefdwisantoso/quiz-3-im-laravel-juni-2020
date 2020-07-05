@extends('layouts.master')
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<h4>
    <font size="5">Edit Artikel</font>
</h4><br>
{!! Form::model($artikel, ['class' => 'form', 'files'=>true,]) !!}
<input type="hidden" name="user_id" value="{{$user->id}}" >
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >Judul Artikel</label>
            {!! Form::text('judul', null, ['class' => 'form-control',  'onkeyup' => 'this.value = this.value.toUpperCase()']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >Isi Artikel</label>
            {!! Form::text('isi', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >Tag Artikel</label>
            {!! Form::text('tag', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg">Simpan</button>
<a href="{{url('/artikel')}}" class="btn btn-lg">Batal</a>

@endsection
