@extends('layouts.app')

@section('content')
<a href="/jobs" class="btn btn-secondary mx-3"> <-- Retourner vers la liste des embauches</a>
<div class="container my-5 text-light">
<h2>Plus d'informations sur le poste : </h2>
 <div class="container my-5">
    <h4 class="my-2">Nom du poste : &emsp; {{$job->name}}</h4>
    <h4 class="my-2">Description du poste :&emsp;  {{$job->description}}</h4>
    <h4 class="my-2">Salire :&emsp;  {{$job->price}} per {{$job->time}}</h4>
    
    @if($job->duration=='duree1')
        <h4 class="my-2">Durée de travail :&emsp; one day to a month</h4>
      @elseif($job->duration=='duree2')  
        <h4 class="my-2">Durée de travail :&emsp; one month to a trimester</h4>
      @elseif($job->duration=='duree3')  
        <h4 class="my-2">Durée de travail :&emsp; one trimester to a semester</h4>
      @elseif($job->duration=='duree4')  
        <h4 class="my-2">Durée de travail :&emsp; one semester to a year</h4>
      @else
        <h4 class="my-2">Durée de travail : more than a year</h4>    
      @endif
    <h4 class="my-2"> Email du recrutteur :&emsp;  {{$job->email}} </h4>
    <div class="text-center mt-5">
        <form action="/jobs/{{$job->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-success">Postuler vers ce Poste</button>
        </form>
    </div>

 </div>
</div>
@endsection