@include('common.header')
<div>
    <h1>Test Page</h1>
    <p>{{$mainUser}}</p>
    <p>{{$users[2]}}</p>

    @if($mainUser == 'RG')
        <h1>This is RG</h1>
    @elseif($mainUser == 'G')
        <h1>This is G</h1>
    @else
        <h1>Other</h1>
    @endif
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>

<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>

<div>
    @for($i=0; $i<10; $i++)
    <h3>{{$i}}</h3>
    @endfor
</div>
<!-- Check sub view page exist found condition -->
<!-- @includeIf('common.footer', ["footer" => "This is copyright"]) --> 
@include('common.footer', ["footer" => "This is copyright"])