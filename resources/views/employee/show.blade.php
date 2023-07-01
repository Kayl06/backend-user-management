<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Create Date</th>
            <th>
                <a href="{{ route('employee.create') }}" class="btn btn-success btn-sm px-3">
                    Add
                </a>
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <th scope="row">{{ $employee['id'] }}</th>
            <td>{{ $employee['first_name'] }}</td>
            <td>{{ $employee['last_name'] }}</td>
            <td>{{ $employee['position'] }}</td>
            <td>{{ $employee['create_date'] }}</td>
            <td class="d-flex gap-2">

                <form action="{{ route('employee.destroy',$employee->id) }}" method="Post" class="d-flex gap-2">
                    <a class="btn btn-warning btn-sm" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>