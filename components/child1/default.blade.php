<div class="well">
    <h3>{{ $name }}</h3>
    <p>
        This is Child1 Table Datas.
    </p>
    <p>
        <h4>Raw data</h4>
        {{ $hwChild1All }}
    </p>
    <p>
    <table>
        <thead>
            <tr>
                <th colspan="2">Data Table</th>
            </tr>
            <tr>
                <th>id</th>
                <th>text</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hwChild1All as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->text }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </p>
</div>
