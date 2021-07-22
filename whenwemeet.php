<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "box-center">
        <div class = "box">
            <p class="recommand-time"> <h1> 추천 시간  </h1></p>
            <p class="fw-light"> 7/18 - 7/24 사이에서 가능한 2시간 모임이 가능한 추천 시간 입니다. </p>


            <ul class="list-group">
                <li class="list-group-item"> 총 5개 </li>

                <li class="list-group-item list-group-item-secondary"> 7/18(일) 18:00 - 20:00 </li>
                <li class="list-group-item list-group-item-secondary"> 7/18(일) 19:00 - 21:00 </li>
                <li class="list-group-item list-group-item-secondary"> 7/19(월) 10:00 - 12:00 </li>
                <li class="list-group-item list-group-item-secondary"> 7/20(화) 13:00 - 15:00 </li>
                <li class="list-group-item list-group-item-secondary"> 7/22(목) 18:00 - 20:00 </li>
            </ul>
            <br>
            <div class = "button-center">
                <button type="button" class="btn btn-primary btn-lg"> 투표하기  </button>
                <button type="button" class="btn btn-secondary btn-lg"> 바로 선택 </button>
            </div>
        </div>
    </div>

    <style>
        .box-center-x {
            position: relative;
        }
        .box {
            width: 50%;
            height: 50%;
            overflow: auto;
            margin: auto;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0; 
            left: 0;
        }
        .button-center {
            display: table;
            margin: auto;
        }
        button {
            margin-right: 10px;
        }
    </style>
</body>
</html>