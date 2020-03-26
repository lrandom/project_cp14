<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="grandfather">
        <div class="parent">
            <div class="child-1"></div>
            <div class="child-2"></div>
        </div>
    </div>
</body>

<style>
.grandfather {
    position: relative;
    width: 500;
    height: 500px;
    border: 1px solid red;
}

.parent {
    position: relative;
    width: 300;
    height: 300px;
    border: 1px solid red;
    margin-top: 50px;
    margin-left: 50px;
}

.child-1 {
    position: relative;
    width: 50px;
    height: 50px;
    background: red;
}

.child-2 {
    position: absolute;
    width: 50px;
    height: 50px;
    background: yellow;
    left: 0px;
    top: 0px;
}
</style>

</html>