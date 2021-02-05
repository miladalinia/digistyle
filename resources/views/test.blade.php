<!DOCTYPE html>
<html>
<head>
    <title>flex box</title>


    <style>

        .container {
            display: flex;
            justify-content: flex-start;
            flex-flow: row wrap;
            align-items: center;
            background-color: DodgerBlue;
            color: darkred;
        }

        .item {
            font-size: 100px;
            padding: 20px;
            margin: 20px;
            background: #fff;
            text-align: center;
            text-shadow: -6px 7px 0 rgba(255, 0, 0, .1);
            box-shadow: -4px 1px 13px 1px rgba(0, 0, 0, .5);
        }

    </style>
</head>

<body>

<div class="container">
    <div class="item item1">1</div>
    <div class="item item2">2</div>
    <div class="item item3">3</div>
    <div class="item item4">4</div>
    <div class="item item5">5</div>
    <div class="item item6">6</div>
    <div class="item item7">7</div>
    <div class="item item8">8</div>
    <div class="item item9">9</div>
    <div class="item item10">10</div>
    <div class="item item11">11</div>
    <div class="item item12">12</div>
</div>


</body>
</html>
