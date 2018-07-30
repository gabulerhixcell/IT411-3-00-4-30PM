<html>
<h1>NEW PAGE</h1>

<h1> RHIXCELL </h1>

<a href="{{route('about')}}"> About </a>
<br>
<a href="{{route('contact')}}"> contact </a>
<br>
<a href="{{route('shoutout', array('text'=>'abakada'))}}">  SHOUTOUT </a>
<br>
@foreach($names as $name)
<a href="{{route('shoutout',array('text'=>$name))}}">{{$name}}</a>
<br>
@endforeach



</html>