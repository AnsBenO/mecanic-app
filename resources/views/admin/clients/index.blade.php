@extends('layout.admin')

@section('title', 'Manage Clients')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Manage Clients</h1>
                <p><a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Add New Client</a></p>
                @if ($clients->isEmpty())
                    <p>No clients found.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <!-- Add more table headers as needed -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->firstName }}</td>
                                    <td>{{ $client->lastName }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>{{ $client->phoneNumber }}</td>
                                    <!-- Add more table cells as needed -->
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info">Edit</a>
                                        <!-- Add delete button with form submission if needed -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
