<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
    <div align="center">

        <div>
            <h3>สถานะการสมัคร</h3>
        </div>
        <form action="{{ url('/updated1', $newstudentm1Model->id)}}" method="post">
            {{csrf_field()}}
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="/ImgAll/profile_img/{{$newstudentm1Model->pic}}">
                <div class="card-body">
                    <h5 class="card-title">รูปประจำตัว</h5>
                    <div>
                        <select name="status_pic">
                            <option>{{$newstudentm1Model->status_pic}}</option>
                            <option>ผ่าน</option>
                            <option>รอตรวจสอบแล้ว</option>
                            <option>ไม่ผ่าน</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="/ImgAll/house_regis/house_student/{{$newstudentm1Model->house_pic}}">
                <div class="card-body">
                    <h5 class="card-title">ทะเบียนบ้าน</h5>
                    <div>
                        <select name="status_house_pic">
                            <option>{{$newstudentm1Model->status_house_pic}}</option>
                            <option>ผ่าน</option>
                            <option>รอตรวจสอบแล้ว</option>
                            <option>ไม่ผ่าน</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="/ImgAll/id_card/id_card_student/{{$newstudentm1Model->id_number_pic}}">
                <div class="card-body">
                    <h5 class="card-title">สำเนาบัตรประจำตัวประชาชน</h5>
                    <div>
                        <select name="status_idnumber_pic">
                            <option>{{$newstudentm1Model->status_idnumber_pic}}</option>
                            <option>ผ่าน</option>
                            <option>รอตรวจสอบแล้ว</option>
                            <option>ไม่ผ่าน</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="/ImgAll/student_submit/{{$newstudentm1Model->grade_pic}}">
                <div class="card-body">
                    <h5 class="card-title">ใบ ปพ.</h5>
                    <div>
                        <select name="status_grade_pic">
                            <option>{{$newstudentm1Model->status_grade_pic}}</option>
                            <option>ผ่าน</option>
                            <option>รอตรวจสอบแล้ว</option>
                            <option>ไม่ผ่าน</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">สถานะการสมัคร</h5>
                    <div>
                        <select name="status_rigis">
                            <option>{{$newstudentm1Model->status_rigis}}</option>
                            <option>ยืนยันการสมัคร</option>
                            <option>รอตรวจสอบ</option>
                            <option>ไม่ผ่าน</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">สถานะเอกสาร</h5>
                    <div>
                        <select name="status_picall">
                            <option>{{$newstudentm1Model->status_picall}}</option>
                            <option>ผ่าน</option>
                            <option>รอตรวจสอบ</option>
                            <option>ไม่ผ่าน</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success">ยืนยัน</button>
                <a href="{{ url('SortNewstudentM1')}}" class="btn btn-danger "><strong>ย้อนกลับ</strong></a>
            </div>
        </form>
    </div>
</body>

</html>