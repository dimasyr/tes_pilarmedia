@extends('layout.main')
@section('title', 'Soal2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <form action="{{ route('proses.soal2') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-md-2"><label for="angka" class=" form-control-label">Input Angka</label></div>

                <div class="col-12 col-md-9">
                    <input type="text" id="angka" name="angka" placeholder="Masukkan angka" class="form-control">
                </div>
            </div>

            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

