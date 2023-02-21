<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c</title>
    <style>
        .box1 {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            background-color: salmon;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box1">
            <div class="box">
                <p>1</p>
            </div>
        </div>
        <div class="box1">
            <div class="box">
                <p>2</p>
            </div>
            <div class="box">
                <p>2</p>
            </div>
        </div>
        <div class="box1">
            <div class="box">
                <p>3</p>
            </div>
            <div class="box">
                <p>3</p>
            </div>
            <div class="box">
                <p>3</p>
            </div>
        </div>
    </div>
</body>

</html>