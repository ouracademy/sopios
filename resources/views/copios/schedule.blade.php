@extends('copios.layout.index')
@section('content')
<section id="science-fair">
  <div class="container-fluid">
    <h2>Programa</h2>
    <div class="speakers">
      @foreach($days as $day)
      <h3>{{$day->date}}</h3>
      <table class="table">
        <tbody>
          @foreach($day->slots as $slot)
          <tr>
            <td>{{$slot->timePeriod}}</td>
            <td>{{$slot->name}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      @endforeach
    </div>
  </div>
</section>
@stop