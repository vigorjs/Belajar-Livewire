<div>
    @include('my_components.alert_success')
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.details', $user->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click="delete({{ $user->id }})" class="btn badge bg-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
