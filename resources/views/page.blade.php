<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информационный портал</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/news">Новости</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/contacts">Контакты</a></li>
        </ul>
    </nav>

    <h2>Рекламный блок</h2>
    @foreach ($block as $object)

        {!! $object->body !!}

        {!! $blocks->where('id', $object->any_block_id)->value('body') !!}

    @endforeach

</header>
</body>
</html>
