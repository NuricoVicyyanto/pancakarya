<!DOCTYPE html>
<html>
<head>
    <title>Daftar users</title>
</head>
<body>
    <h3>Daftar users</h3>
    <table border="1">
        <tr>
            <th>No.</th>
            <th width="100px">Slug</th>
            <th width="200px">Name</th>
        </tr>
        @php
            $no = 1;    
        @endphp
        @foreach($users as $users)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->username }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>