<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> --}}
    {{-- <title>Learn More</title> --}}
    {{-- @stack('title') --}}
</head>
<body>      
    <a href="{{ url('/')}}">Back</a>


    <h1>Hello</h1><h2>{{ $cost ?? "Guest" }}</h2>
    {{-- for loop ICU--}}
     @for($i = 0; $i < 10; $i++)
     {{ $i }}     
     @endfor


     <br>

 {{-- while loop --}}
 @php
    $k=1;
 @endphp
 @while($k<=10)
 {{ $k }} 
 @php
    $k++;
 @endphp   
 @endwhile
 <br>
 {{-- if statement executes when the conditon is true --}}
  @if($age < 18)
    {{ "you cannot vote" }}
 @else
    {{"You can vote"}}
 @endif

<br>


 {{-- unless --}}
 {{-- unless statement executes when the conditon is false --}}
 
 @unless($age < 18)
 {{ "You can vote" }}    
 @endunless


 {{-- foreach loop --}}
@php
    // $users = [10,42,5443,5454,5455,6545]
    $users = ["Ram","Shyam"]
@endphp

{{-- users has multiple users
user, this represent a single user --}}
@forelse($users as $user)
{{ $user }}
    
@empty
    
@endforelse

<br>
@foreach($users as $index => $user)
{{$index."=>".$user}}
{!! "<br>" !!}
@endforeach


@include('test')






</body>
</html>