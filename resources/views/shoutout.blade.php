<center>
<h1> SHOUTOUT TO: {{$text}} </h1>

@if($text=="gwapo")
<h1> Gwapo </h1>
@elseif($text=="gwapa")
<h1> Gwapa </h1>
@endif

@foreach($colors as $color => $description)
<table border='1' width='50%'>
	<td> #</td>
	<td> colors</td>
	<td> description</td>
	</table>
{{ $color }} - {{ $description}}
<br/>

@endforeach

</center>