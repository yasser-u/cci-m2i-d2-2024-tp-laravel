@extends("layouts.master")

@section("title")
    Associates
@endsection

@section("content")
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h1 class="border-bottom pb-2 mb-4"> Index associates   </h1>  
        <a href="{{ route('associates.create') }}" class="btn btn-primary">Create</a>
        <table class="table table-striped table-bordered-custom">
            <thead>
                <tr>
                    <th>index</th>
                    <th>associate_name</th>
                    <th>associate_email</th>
                    <th>associate_phone</th>
                    <th>associate_address</th>
                    <th>associate_city</th>
                    <th>associate_image</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($associates as $associate)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $associate->associate_name }}</td>
                    <td>{{ $associate->associate_email }}</td>
                    <td>{{ $associate->associate_phone }}</td>
                    <td>{{ $associate->associate_address }}</td>
                    <td>{{ $associate->associate_city }}</td>

                    <td><img src="{{ $associate->associate_image }}" alt="picture" width="100" height="100"></td>
                    <td>
                        <form action="{{ route('associates.destroy', $associate->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection
