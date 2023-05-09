<!doctype html>
<html>
<head>
    <title>Главная</title>
</head>
<body>
<label for="avatar">Загрузите свой CSV файл:</label>
<div>
    <form action="/all" method="post" enctype="multipart/form-data">
        <input type="file" id="csvFile" name="csvFile" accept="text/csv">
        <input type="submit" value="Загрузить" name="submit">
    </form>
</div>

</body>
</html>