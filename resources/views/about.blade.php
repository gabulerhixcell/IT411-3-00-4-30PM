<!--
<html>
<h1> ABOUT </h2>

<a href="{{route('contact')}}"> Contact </a>
</html>


<center>
<h1> Addition </h1>


@endif

@foreach($ as $ => $

@endforeach

</center>
-->

@foreach($transaction->options as $option)
                  <div class="row">
                    <div class="col-md-6">
                      <p>Option description: {{ $option->description }}</p>
                      <p>Price: {{ $option->pivot->price }}</p>
                    </div>
                  </div>
                  <hr>
                @endforeach
                <div class="row">
                  <div class="col-md-6">
                    <h4>Options total: </h4>
                  </div>
                </div>