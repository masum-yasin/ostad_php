<h1>{{$marks}}</h1>

@if ($marks>=80 && $marks<100)
    <h1>Result: A+</h1>
    @elseif($marks>=70 && $marks<100)
    <h1>Result: A</h1>
    @elseif($marks>=60 && $marks<100)
    <h1>Result: A-</h1>
    @elseif($marks>=50 && $marks<100)
    <h1>Result: B</h1>
@endif