<body>
    <h1>Words/Index</h1>
    <form method="post" action="/words/add">
        @csrf
        <table border="1">
            @foreach($words as $word)
            <tr class="row">
                <th><div class="word_id">{{ $word->id }}</div></th>
                <td><div class="word_name">{{ $word->name }}</div></td>
                <td><div class="word_meaning">{{ $word->meaning }}</div></td>
                <td><div class="word_synonym">{{ $word->synonym_group_id }}</div></td>
                <td><div class="word_antonym">{{ $word->antonym_group_id }}</div></td>
                <td><button type="button" class="edit_button">編集</button></td>
                <td><input type="submit" name="update" value="更新"></td>
            </tr>
            @endforeach

            <!-- <tr>
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
                    <select name="antonym_group_id">
                        @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->id }} {{ $group->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr> -->
        </table>
        <input type="submit">
    </form>
</body>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script>
$(function(){
    $('.edit_button').on('click', function(){
        let word_id = $(this).parents(".row").find('.word_id').text();
        let word_name = $(this).parents(".row").find('.word_name').text();
        let word_meaning = $(this).parents(".row").find('.word_meaning').text();
        let word_synonym = $(this).parents(".row").find('.word_synonym').text();
        let word_antonym = $(this).parents(".row").find('.word_antonym').text();

        $(this).parents(".row").find('.word_id').empty();
        $(this).parents(".row").find('.word_id').append(`${word_id} <input type="hidden" name="id", value="${word_id}">`);

        $(this).parents(".row").find('.word_name').empty();
        $(this).parents(".row").find('.word_name').append(`<input type="text" name="name" value="${word_name}">`);

        $(this).parents(".row").find('.word_meaning').empty();
        $(this).parents(".row").find('.word_meaning').append(`<input type="text" name="meaning" value="${word_meaning}">`);

        let groups_template_syn =
        `<select name="synonym_group_id">
            @foreach($groups as $group)
            <option value="{{ $group->id }}">{{ $group->id }} {{ $group->name }}</option>
            @endforeach
        </select>`;
        $(this).parents(".row").find('.word_synonym').empty();
        $(this).parents(".row").find('.word_synonym').append(groups_template_syn);

        let groups_template_anto =
        `<select name="antonym_group_id">
            @foreach($groups as $group)
            <option value="{{ $group->id }}">{{ $group->id }} {{ $group->name }}</option>
            @endforeach
        </select>`;
        $(this).parents(".row").find('.word_antonym').empty();
        $(this).parents(".row").find('.word_antonym').append(groups_template_anto);





        console.log($(this).parents(".row").find('.word_name').text());
        console.log($(this).parents(".row").find('.word_name'));
    });
})
</script>
