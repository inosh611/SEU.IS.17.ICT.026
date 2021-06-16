<h1>Show data</h1>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Date of Birth</td>
        <td>TelNo</td>
        <td>Nic No</td>
        <td>gender</td>
          
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['Name']}}</td>
        <td>{{$member['DateofBirth']}}</td>
        <td>{{$member['TelNO']}}</td>
        <td>{{$member['NICno']}}</td>
        <td>{{$member['gender']}}</td>
        
    </tr>  

    @endforeach

</table>