<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="/newstudentm1AllPic/newstudentm1PIC/{{$newstudentm1Model->pic}}" width="100" height="100">
    </div>
    <div class="container">
        <select name="status_pic">
            <option>{{$newstudentm1Model->status_pic}}</option>
            <option>ตรวจสอบแล้ว</option>
            <option>ไม่ผ่าน</option>
        </select>
    </div>
    <div>
        <button type="submit">ยืนยัน</button>
    </div>
</body>
</html>