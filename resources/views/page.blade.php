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
    @foreach($page as $object)
        {!! $object->body !!}
    @endforeach

    <h2>Рекламный блок</h2>
    {!! $blocks->where("name", "advertising")->value("body") !!}

    <h2>Добавочный блок</h2>
    {!! $anyBlocks->where("id", $blocks->where("any_block_id", 1)->value("any_block_id"))->value("body") !!}
</header>
</body>
</html>
