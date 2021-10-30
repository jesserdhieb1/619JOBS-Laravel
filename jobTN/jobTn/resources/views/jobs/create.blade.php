@extends('layouts.app')
<!--
    $table->id('job_id');
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->integer('duration');
            $table->timestamps();
             $table->float('time');
            $table->integer('email');-->
@section('content')
<div class="container text-center"  >
    <form action="/jobs" method="POST">
        @csrf
        <label for="email" class="text-light my-2">votre email :  </label><br />
        <input type="email" id="email" name="email" class="my-2" required><br />
        <label for="name" class="text-light my-2">Nom du Poste a chercher :  </label><br />
        <input type="text" id="name" name="name" class="my-2" required><br />
        <label for="description" class="text-light my-2">Description du poste  :  </label><br />
        <textarea rows="4" cols="50" id="description" name="description" class="my-2" required></textarea><br />
        <label for="price" class="text-light my-2">salaire :  </label><br />
        <input type="text" id="price" name="price" class="my-2" required>
        <label for="time" class="text-light my-2">par :</label>
            <select name="time" id="time" class="my-2">
            <option value="hour">hour</option>
            <option value="day">day</option>
            <option value="month">month</option>
            <option value="trimester">trimester</option>
            <option value="semester">semester</option>
            <option value="year">year</option>
            </select><br />
        <label for="duration" class="text-light my-2">durée du travail :  </label><br />
        <input type="radio" id="duree1" name="duration" value="duree1" checked>
        <label for="duree1" class="text-light">one day -- one month</label><br>
        <input type="radio" id="duree2" name="duration" value="duree2">
        <label for="duree2" class="text-light">one month -- one trimester</label><br>  
        <input type="radio" id="duree3" name="duration" value="duree3">
        <label for="duree3" class="text-light">one trimester -- one semester</label><br>
        <input type="radio" id="duree4" name="duration" value="duree4">
        <label for="duree4" class="text-light">one semester -- one year</label><br>
        <input type="radio" id="duree5" name="duration" value="duree5">
        <label for="duree5" class="text-light">more...</label><br>
        
        <input type="submit" class="btn btn-secondary" value="Submit">


    </form>
</div>   

@endsection