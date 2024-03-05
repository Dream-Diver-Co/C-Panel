@extends('backend.layouts.master')
@section('content')

  <div class="card" style="height:100%">
    <div class="card-header">
        <div class="text-dark">Page</div>
    </div>
    <div class="card-body">
      {{-- <a href="{{ route('page.create') }}" class="btn btn-primary">Add New</a> --}}
      <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach ($contacts as $contact)

                <tr>
                    <td>{{ $i++}}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td class="btn-group">
                        <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $contact->id }}">
                            <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure Delete this!!')" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
