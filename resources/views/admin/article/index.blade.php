@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="d-flex ml-3">
                        <a href="/list-article/create" class="btn btn-primary">Create Artikel</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                        <table id="table_id" class="table">
                            <thead class="text-black">
                                <th scope="col">#</th>
                                <th scope="col"> Title </th>
                                <th scope="col"> Description </th>
                                <th scope="col"> Slug </th>
                                <th scope="col"> Body </th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach ($articles as $article)
                                @php
                                    $i++
                                @endphp

                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->description }}</td>
                                        <td>{{ $article->slug }}</td>
                                        <td>{{ $article->body }}</td>
                                        <td>
                                        <form method="POST" action="/list-article/{{ $article->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <a button type="button" class="btn btn-warning" href="/list-article/{{$article->id}}/edit">Edit</button></a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready( function () {
    $('#table_id').DataTable(
        columnDefs: [
            {width: 300. target: 2}
            {width: 200. target: 3}
        ]
    );
} );
</script>
@endsection
