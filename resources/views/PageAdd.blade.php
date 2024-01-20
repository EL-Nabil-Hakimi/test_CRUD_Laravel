<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            width: 60vw !important;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #4caf50;
        }
    </style>

</head>
<body>
    <form action="/AddUser" method="POST">
        @csrf
        <h4>VM JTC</h4>
        <input type="text" placeholder="Name" name="name"><br><br>
        <input type="text" placeholder="Age" name="age"><br><br>
        <input type="number" placeholder="Tele" name="tele"><br><br>
        <input type="submit" value="Save"><br><br>
        <a href="/page2">Back</a><br>
    </form>
</body>
</html>