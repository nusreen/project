

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deposit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body>

    <div class="container">
        <br>
        <div class="container bg">

            <div class=" h4 text-center alert alert-danger mb-4 mt-4" role="alert"> รับฝากเลี้งแมว</div>
            <hr>



            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get" align="center">
                ค้นหาชื่อลูกค้า
                <!-- <input type="text" name="search" placeholder="กรอกคำค้นหา"> -->

                <select id='selUser' name="user" style='width: 40%'>
                    <option value=''>Select User</option>
                    <?php

                    $c = mysqli_connect("localhost", "root", "", "cat");
                    mysqli_query($c, "SET NAMES UTF8");

                    $sql = " SELECT * FROM customer GROUP BY name";
                    $q = mysqli_query($c, $sql);
                    while ($f = mysqli_fetch_assoc($q)) {
                    ?>
                        <option value='<?= $f['name'] ?>' <?= isset($_GET['user']) ? $_GET['user'] ==  $f['name'] ? "selected" : ""  : "" ?>><?= $f['name'] ?></option>

                    <?php
                    }

                    ?>
                </select>
                <input type="submit" value="ค้นหา">
            </form>
  
            <script>
                $(document).ready(function() {
                    $("#selUser").select2();
                    $('#but_read').click(function() {
                        var username = $('#selUser option:selected').text();
                        var userid = $('#selUser').val();
                        $('#result').html("id : " + userid + ", name : " + username);

                    });
                });
            </script>
            <br>
            <?php
            if (isset($_GET['user'])) {

            ?>
                <div class="container">
                    <a align='center'>

                    </a>


                    <table width="800" border="0" align="center" cellpadding="0" cellspacing="2">

                        <form action="" method="get">
                            <th>วันที่ฝาก : <input type="datetime-local" name="mydata"></th>

                        </form>

                        <br>
                        <form action="" method="get">
                            <th>วันที่รับคืน : <input type="datetime-local" name="mydata"></th>

                        </form>
                    </table>

                    <br>
                    <table width="800" border="0" align="center" cellpadding="0" cellspacing="2">

                        <td>ประเภทห้องพัก :</span></td>
                        <td>
                            <label>
                                <select name="txtKeyword1" id="txtKeyword1">
                                    <option>----- เลือกห้องพัก -----</option>
                                    <option value="0001">ห้องธรรมดา</option>
                                    <option value="0002">ห้องพิเศษ</option>
                                </select>
                            </label>

                       

                        <td>เลขที่ห้องพัก :</span></td>
                        <td>
                            <label>
                                <select name="txtKeyword1" id="txtKeyword1">
                                    <option>----- เลขที่ห้องพัก -----</option>
                                    <option value="0001">001</option>
                                    <option value="0001">002</option>
                                    <option value="0001">003</option>
                                    <option value="0001">004</option>
                                    <option value="0001">005</option>
                                    <option value="0001">101</option>
                                    <option value="0001">102</option>
                                    <option value="0001">103</option>
                                    <option value="0001">104</option>
                                </select>
                            </label>
                    </table>
                    <br>

                    <table style="width:100%">
                        <tr>
                            <th></th>
                            <th>ชื่อแมว</th>
                            <th>เพศ</th>
                            <th>สายพันธ์ุ</th>
                            <th>ประเภทอาหาร</th>

                        </tr>
                        <?php
                        $sql1 = " SELECT * FROM customer WHERE name = '" . $_GET['user'] . "' ";
                        $q1 = mysqli_query($c, $sql1);
                        while ($f = mysqli_fetch_assoc($q1)) {
                        ?>
                            <tr>
                                <td><input type="checkbox" name="cate_<?= $f['cat_id'] ?>" id="cate_<?= $f['cat_id'] ?>" value="<?= $f['cat_id'] ?>" class="form-check-input"></td>
                                <td><input type="text" name="catname" value="<?= $f['cat_name'] ?>" class="form-control" readonly></td>
                                <td><input type="text" name="sex" value="<?= $f['sex'] ?>" class="form-control" readonly></td>
                                <td><input type="text" name="species" value="<?= $f['species'] ?>" class="form-control" readonly></td>
                                <td><input type="text" name="food" value="<?= $f['cat_food'] ?>" class="form-control" readonly></td>
                            </tr>
                        <?php
                        }
                        mysqli_close($c);


                        ?>
                    </table>

                    <br>


                    <a href="binder.php" class="btn btn-primary">คำนวณค่าใช้จ่าย</a>

                    <a href="homeowner.php" class="btn btn-danger">ยกเลิก</a>



                </div>
            <?php } ?>
</body>

</html>