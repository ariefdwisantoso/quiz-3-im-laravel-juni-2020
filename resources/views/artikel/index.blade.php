@xtends('master')
@section('content')
<p>
    <a href="{{url('/artikel/create')}}" class="btn btn-primary" title="Tambah" rel="tooltip"><i class="fa fa-plus"></i> Tambah Artikel</a>
</p>
<img class="img img-raised" src="{{url('image/ERD.png')}}" alt= "Gambar ERD" width="50%" height="auto">
@foreach($artikel as $key => $)
<div class="items">
    <div class="card">
        <div class="card-body">
            <div class="template-demo">
                <p align="justify"><font face="arial" size="3">Judul : {!! $t->judul !!}<br>slug : {!! $t->slug !!}<br>isi : {!!Str::limit($t->isi, 40, '...')!!}
                    </font><br> </p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-10">
                    <div class="profile">
                        <p class="cust-profession" style="font-style:italic"> 
                            <td>Posted on {!! $t->created_at !!}</td> |
                            <td>Updated on {!! $t->updated_at !!}</td>
                            <a href="{{url('/artikel/view',$t->id)}}" class="btn btn-primary" title="View Jawaban" rel="tooltip"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                            <a href="{{url('/artikel/edit', $t->id)}}" class="btn btn-primary" title="Edit Pertanyaan" rel="tooltip"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></h5>
                            <a href="{{url('/artikel/hapus',$t->id)}}" class="btn btn-danger" title="Hapus" rel="tooltip"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@stack('scripts')
@endsection
