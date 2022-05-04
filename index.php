<!DOCTYPE>
<html>
<head>
    <meta charset = "UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel = "stylesheet" href ="css/index.css">
</head>
<body>

    <input id = "input_columnsCount" type = "text" placeholder = "Columns count">
    <input id = "input_rowsCount" type = "text" placeholder = "Rows count"><br><br>
    <textarea id = input_pairs></textarea><br>
    <p id = "output"></p>
    <button type = "button" onclick = "getDescription()">Press</button>

    <p>This relation is transitive, reflective and etc</p>

    <h1 id = "output_heading">Test name</h1>
    <textarea id = "input_text" type = "text" placeholder = "Enter the key"></textarea>
    <button type = "button" onclick = "testFunction()">Press</button>
    <script src = "js/index.js"></script>
</body>
</html>