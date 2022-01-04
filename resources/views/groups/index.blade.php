<h1>単語のグループ名</h1>

<body>
    <table border="1">
            @foreach($groups as $group)
            <tr class="row">
                <th><div class="group_id">{{ $group->id }}</div></th>
                <td><div class="group_name">{{ $group->name }}</div></td>
            </tr>
            @endforeach

        </table>
</body>
