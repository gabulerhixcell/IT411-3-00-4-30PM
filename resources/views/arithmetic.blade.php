
@php
$ab = "";
$ad1 = "";
$ad2 = "";
$answer = "";
@endphp
@if($operator == "mul")

	@php
	$ab = "MULTIPLIACTION";
	$ad1 = "Multiplicand".": ".$n1;
	$ad2 = "Multiplier".": ".$n2;
	$answer = "Product".": ".($n1*$n2);
	
	@endphp


@elseif($operator == "add")

	@php
	$ab= "ADDITION";
	$ad1 = "Addend".": ".$n1;
	$ad2 = "Adder".": ".$n2;
	$answer = "Sum".": ".($n1+$n2);
	@endphp	

@elseif($operator == "div")

	@php
	$ab = "DIVISION";
	$ad1 = "Divident".": ".$n1;
	$ad2 = "Divisor".": ".$n2;

	if($n1 == 0 || $n2 == 0)
	{
		$answer = "Quotient".": 0";
	}
	else
	{
		
		$answer = "Quotient".": ".($n1/$n2);
	}
	

	@endphp	

@elseif($operator == "sub")
	
	@php
	$ab= "SUBTRACTION";
	$ad1 = "Minuend".": ".$n1;
	$ad2 = "Subtrahend". ": ".$n2;
	$answer = "Difference".": ".($n1-$n2);
	@endphp	
	
	


@endif

<h1>{{ $ab }}</h1>

	<p>{{ $ab }}</p>
	<p>{{ $ad1}}</p>
	<p>{{ $ad2}}</p>
	<p>{{ $answer }}</p>


