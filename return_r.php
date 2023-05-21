<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Bootstap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

</head>
<body>
<div class="container my-5">
        <div class=" h4 text-center alert alert-info mb-4 mt-4" role="alert">รายละเอียดค่าใช่จ่ายที่เหลือ</div>
        <form action="insert_cat.php" method="POST" >
            <div class="row py-2">
                <div class="col">
                    <label>รหัสลูกค้า</label>
                    <input type="text" name="cat_name" class="form-control" >
                </div>

                <div class="col">
                    <label>รหัสใบเสร็จ</label>
                    <input type="text" name="cat_name" class="form-control" >
                </div>
               
            </div>
            <div class="row py-2">
                <div class="col">
                    <label>ชื่อลูกค้า</label>
                    <input type="text" name="cat_name" class="form-control" >
                </div>
                
            </div>
            <div class="row py-2">
                <div class="col">
                    <label>วันที่ฝาก</label>
                    <input type="text" name="cat_name" class="form-control" >
                </div>
                <div class="col">
                    <label>วันที่รับคืน</label>
                    <input type="text" name="cat_name" class="form-control" >
                </div>
                
            </div>
            <div class="row py-2">
                
                <div class="col">
                    <label>วันที่รับคืนจริง</label>
                    <input type="text" name="cat_name" class="form-control" >
                </div>
            </div>

           

            <div class="card " >
                <h5 class="card-header bg-info text-white border-0">สรุปค่าใช้จ่าย</h5>
                <div class="card-body">
                    
                    <p class="card-text">
                        ค่าใช้จ่ายทั้งหมด
                    </p>
                    <p class="card-text">
                        ฝากเลี้ยงแมว 1 ตัว
                    </p>
                </div>
               
</div>
       
            <button type="submit" name="submit" class="btn btn-success my-3">บันทึกและพิมพ์</button>
            <a href="return.php" class="btn btn-danger">กลับ</a>
        </form>
    </div>
</html>