<h1>Home</h1> 
@include('user.header')
@foreach ($users as $item)
    {{$item}}
@endforeach
<x-sidebar name="Gaurav" />
@for($i = 0; $i<10; $i++)
    {{$i}}
@endfor
<script> 
    var a = @json($users);
    console.log(a);
</script>