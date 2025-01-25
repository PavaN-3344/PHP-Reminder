<div>
   <h1 class="text-2xl"> Reminders </h1> 
    @foreach ($reminders as $reminder)
    <p>{{ $reminder->reminder }} <small> Remind you in {{$reminder->when->diffForHumans()}}  </small> </p> 
        
    @endforeach
</div>
