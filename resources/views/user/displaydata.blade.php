<table border="1"> 
    <tr>

        <th>Id</th>
        <th>email</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>Avatar</th>
    </tr>
    @foreach ($collection as $iteam)
    <tr>
        <td>{{$iteam['id']}}</td>
        <td>{{$iteam['email']}}</td>
        <td>{{$iteam['first_name']}}</td>
        <td>{{$iteam['last_name']}}</td>
        <td><img src={{$iteam['avatar']}} alt=""></td>
    </tr>
    @endforeach
</table>