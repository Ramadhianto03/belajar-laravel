@extends('layouts.main')
@section ('title', 'Dosen')

@section('content')
<h1>Selamat Datang Pembeli</h1>
<table class="table table-striped mt-5" >
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nik</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($name as $index =>$dosen )
            
        
        <tr>
            <td>{{$loop ->iteration}}</td>
            <td>{{$dosen}}</td>
            <td>{{$Nik[$index]}}</td>
            
            </tr>
            @endforeach
    </tbody>
    
  @endsection