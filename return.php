<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>return</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="robots" content="index, follow" />
<link rel="stylesheet" href="js/jquery.datetimepicker.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link type="text/css" href="css/smoothness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />

<!--Bootstap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


    <div class="container my-5">
        <div class=" h4 text-center alert alert-info mb-4 mt-4" role="alert">รับแมวกลับ</div>
        
        
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


<table style="width:100%">
                        <tr>
                            
                            <th>ชื่อเจ้าของ</th>
                        

                        </tr>
                        <?php
                        $sql1 = " SELECT * FROM user WHERE name = '" . $_GET['user'] . "' ";
                        $q1 = mysqli_query($c, $sql1);
                        while ($f = mysqli_fetch_assoc($q1)) {
                        ?>
                            <tr>
                               
                                <td><input type="text" name="name" value="<?= $f['name'] ?>" class="form-control" readonly></td>
                              
                            </tr>
                        <?php
                        }
                        mysqli_close($c);


                        ?>
                    </table>
                    <br>
        <form action="" method="get" >
                <th>วันที่รับคืนจริง : <input type="datetime-local" name="mydata"></th>
                    
            </form>
        
        </table>
        <br>
            <tr>
                <td class="style1">วันที่ฝาก</td>
                <td colspan="3"><input  type="text" size="50" /></td>
                
            </tr>
            
            <tr>
                <td class="style1">วันที่รับคืน</td>
                <td colspan="3"><input  type="text" size="50" /></td>
                
            </tr>
            <br>
            <br>
            <tr>
                <td class="style1">ประเภทห้องพัก</td>
                <td colspan="3"><input  type="text" size="50" /></td>
                
            </tr>
            <tr>
                <td class="style1">ประเภทอาหาร</td>
                <td colspan="3"><input  type="text" size="50" /></td>
                
            </tr>
<br>
        <br>
            
        <a href="return_r.php" class="btn btn-primary">คำนวณค่าใช้จ่าย</a>

        <a href="homeowner.php" class="btn btn-danger">ยกเลิก</a>
    </div>
    <?php } ?>
</form>
</body>
</html>