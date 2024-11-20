<h1>
   welcom To About Page

</h1>
{{-- 
<a href="/contact">Contact</a>
<a href="/service">Services</a>
<a href="/">Home</a> --}}


<a href="{{route('contact')}}">Contact</a>
<a href="{{route('service')}}">Services</a>
<a href="{{route('home')}}">Home</a>

{{-- template engine  --}}
{{-- in php core --}}



{{-- in laravel blade template --}}
@php
   $user = null;
   $y = 6;
   $arr = ['Ghazali' , 'Bilal' , 'Umer' , 'hammad' , 'Daniyal' ,'Faiz'];
@endphp

{{-- {{"<h1>$user</h1>"}} --}}
{!!"<h1>$user</h1>"!!}
{!!"<script>alert('Alert Message')</script>"!!}
{{-- echo "<h1>$user<h1>"; --}}

   @if ($user)
      <P>Username is {{$user}}</P>
   @else
      <p>No user Found</p>
   @endif

@foreach ($arr as $item )
    <h1>Name of Student {{$item}}</h1>
@endforeach

@for ($x= 0 ;$x<=5;$x++)
    <h3>Name of student {{$arr[$x]}}   </h3>


    @endfor


@switch($y)
   @case(2)
      <p>Bilala Ambani</p>
      @break
@case(4)
   <p>Habib Tata</p>
@break
@case(6)
   <p>Faiz Esa</p>
@break

   @default
      <p>No Data Found</p>
@endswitch

{{-- if(isset($request['addbtn']))
{

} --}}

{{-- @isset('addbtn')
   
@endisset --}}

@empty($user)
   
@endempty



1st migration file create and migrate 
2nd model create
3rd seeder create 
4th seeder file call in databaseSeeder
5th run a command to insert a data to database  