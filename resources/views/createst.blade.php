<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>Create Test</header>
    <main>
        <form action="createst" method="POST">
            @csrf
            <input type= "text" placeholder="Test Name" name="name" required>
            <select name="type" required>
                <option value="Synonyms">Synonyms</option>
                <option value="Antonyms">Antonyms</option>
                <option value="Random">Random</option>
            </select>
            <select name="quantity" required>
                <option value="option1">5</option>
                <option value="option2">10</option>
                <option value="option3">15</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>