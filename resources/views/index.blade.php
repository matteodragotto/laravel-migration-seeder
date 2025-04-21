@extends('layouts.master')

@section('title')
 Tabellone treni   
@endsection

@section('main')

<div>
  <table class="table table-borderless mx-auto">
    <thead >
      <tr>
        <th scope="col">COMPAGNIA</th>
        <th scope="col">CODICE</th>
        <th scope="col">STAZIONE DI PARTENZA</th>
        <th scope="col">STAZIONE DI ARRIVO</th>
        <th scope="col">ORARIO DI PARTENZA</th>
        <th scope="col">ORARIO DI ARRIVO</th>
        <th scope="col">NUMERO CARROZZE</th>
        <th scope="col">IN ORARIO</th>
        <th scope="col">IN RITARDO</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($trains as $train)
    <tr>
      <td>{{strtoupper($train['company'])}}</td>
      <td>{{strtoupper($train['train_code'])}}</td>
      <td>{{strtoupper($train['departure_station'])}}</td>
      <td>{{strtoupper($train['arrival_station'])}}</td>
      <td>{{strtoupper($train['departure_time'])}}</td>
      <td>{{strtoupper($train['arrival_time'])}}</td>
      <td>{{strtoupper($train['train_carriage_number'])}}</td>
      <td>{{strtoupper($train['on_time'])}}</td>      
      <td>{{strtoupper($train['late'])}}</td>      
    </tr>
    @endforeach
    </tbody>
  </table>
</div>  

@endsection