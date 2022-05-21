<table>
    @foreach($single_users as $key => $data)
    <tr>
        <th>Id</th>
        <td>{{ $data->id }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $data->email }}</td>
    </tr>

    @endforeach
</table>
