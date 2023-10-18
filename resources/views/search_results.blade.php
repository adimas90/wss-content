@if (count($data) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produk</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->produk }}</td>
                    <td>{{ $row->kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No results</p>
@endif
