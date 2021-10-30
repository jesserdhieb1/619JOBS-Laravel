@extends('layouts.app')

@section('content')
<h2 class="text-light mx-5"> Les Offres de Travail : </h2><br />
<div class="container text center  ">

<table class="table table-dark table-hover  table-borderless">
  <thead>
    <tr>
      <th scope="col">poste</th>
      <th scope="col">salaire</th>
      <th scope="col">durée de travail</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($jobs as $job)
      <tr>
      <th scope="row">{{$job->name}}</th>
      <td>{{$job->price}} per {{$job->time}} </td>
      @if($job->duration=='duree1')
        <td>one day to a month</td>
      @elseif($job->duration=='duree2')  
        <td>one month to a trimester</td>
      @elseif($job->duration=='duree3')  
        <td>one trimester to a semester</td>
      @elseif($job->duration=='duree4')  
        <td>one semester to a year</td>
      @else
        <td>more than a year</td>    
      @endif
      <td><a href="/jobs/{{$job->id}}" class="btn btn-success">consulter</a></td>
      
    </tr>
      @endforeach
    
    
    
    
  </tbody>
</table>
</div>
@endsection