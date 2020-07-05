@xtends('master')
@section('content')
@foreach($artikel as $key => $)
<div class="items">
    <div class="card">
        <div class="card-body">
            <div class="template-demo">
                <p align="justify"><font face="arial" size="3">Judul : {!! $t->judul !!}<br>slug : {!! $t->slug !!}<br>isi : {!!$t->isi!!}
                    </font><br> </p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-10">
                    <div class="profile">
                        <p class="cust-profession" style="font-style:italic"> 
                            <td>Posted on {!! $t->created_at !!}</td> |
                            <td>Updated on {!! $t->updated_at !!}</td>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
