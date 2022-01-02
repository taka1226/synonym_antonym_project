<body>
    <h1>Words/Index</h1>
    <form method="post" action="/words/add">
        @csrf
        <table border="1">
            @foreach($words as $word)
            <tr>
                <th>{{ $word->id }}</th>
                <td>{{ $word->name }}</td>
                <td>{{ $word->meaning }}</td>
                <td>{{ $word->synonym_group_id }}</td>
                <td>{{ $word->antonym_group_id }}</td>
            </tr>
            @endforeach
            <tr>
                <th></th>
                <td><input type="text" name="name"></td>
                <td><input type="text" name="meaning"></td>
                <td>
                    <select name="synonym_group_id">
                        @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->id }} {{ $group->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="pets" id="pet-select">
                        @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->id }} {{ $group->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit">
    </form>
</body>
