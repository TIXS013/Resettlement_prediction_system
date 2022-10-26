<?php 

if(isset($_POST['sub'])) {
    $W1 ;
    $W2 ;
    $W3 ;
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $Q6 = $_POST['Q6'];
    $Q7 = $_POST['Q7'];
    $Q8 = $_POST['Q8'];
    $Q9 = $_POST['Q9'];
    $Q10 = $_POST['Q10'];
    $Q11 = $_POST['Q11'];
    $Q12 = $_POST['Q12'];

    if ($Q5 > 4.500 and $Q2 > 3.500 and $Q12 > 2.500 and $Q6 > 3.500 and $Q1 > 3.500 and $Q8 > 4.500) { //then Wish  (13 / 5) 72.2/27.8
        $W1 = 72.2 ;
        $W2 = 27.8 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 > 3.500 and $Q12 > 2.500 and $Q6 > 3.500 and $Q1 > 3.500 and $Q8 <= 4.500){ //then Not  (1 / 3) 25/75
        $W1 = 25 ;
        $W2 = 75 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 > 3.500 and $Q12 > 2.500 and $Q6 > 3.500 and $Q1 <= 3.500){ //then Not  (0 / 4) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 > 3.500 and $Q12 > 2.500 and $Q6 <= 3.500) { //then Wish  (4 / 0) 100/0
        $W1 = 100 ;
        $W2 = 0 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 > 3.500 and $Q12 <= 2.500){ //then Not  (0 / 4) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 <= 3.500 and $Q4 > 2.500) { //then Not  (0 / 53) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 <= 3.500 and $Q4 <= 2.500 and $Q10 > 2.500) { //then Not  (0 / 3) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 > 4.500 and $Q2 <= 3.500 and $Q4 <= 2.500 and $Q10 <= 2.500) { //then Wish  (2 / 1) 66.67/33.33
        $W1 = 66.67 ;
        $W2 = 33.33 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 > 2.500 and $Q2 > 1.500 and $Q8 > 2.500 and $Q3 > 2.500 and $Q1 > 3.500) { //then Wish  (48 / 21) 69.57/30.43
        $W1 = 69.57 ;
        $W2 = 30.43 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 > 2.500 and $Q2 > 1.500 and $Q8 > 2.500 and $Q3 > 2.500 and $Q1 <= 3.500) { //then Not  (11 / 18) 37.93/62.67
        $W1 = 37.93 ;
        $W2 = 62.67 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 > 2.500 and $Q2 > 1.500 and $Q8 > 2.500 and $Q3 <= 2.500){ //then Not  (0 / 7) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 > 2.500 and $Q2 > 1.500 and $Q8 <= 2.500) { //then Wish  (17 / 1) 94.44/6.66
        $W1 = 94.44 ;
        $W2 = 6.66 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 > 2.500 and $Q2 <= 1.500) { //then Not  (1 / 9) 10/90
        $W1 = 10 ;
        $W2 = 90 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 > 1.500 and $Q7 > 2.500) { //then Wish  (61 / 5) 92.42/7.58
        $W1 = 92.42 ;
        $W2 = 7.58 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 > 1.500 and $Q7 <= 2.500 and $Q9 > 4.500) { //then Not  (0 / 2) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 > 1.500 and $Q7 <= 2.500 and $Q9 <= 4.500 and $Q11 > 1.500) { //then Wish  (16 / 2) 88.89/11.11
        $W1 = 88.89 ;
        $W2 = 11.11 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 > 1.500 and $Q7 <= 2.500 and $Q9 <= 4.500 and $Q11 <= 1.500) { //then Not  (2 / 4) 33.33/66.67
        $W1 = 33.33 ;
        $W2 = 66.67 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 <= 1.500 and $Q2 > 4) { //then Not  (0 / 4) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 <= 1.500 and $Q2 <= 4 and $Q5 > 1.500 and $Q2 > 1.500) { //then Wish  (4 / 2) 66.67/33.33
        $W1 = 66.67 ;
        $W2 = 33.33 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 <= 1.500 and $Q2 <= 4 and $Q5 > 1.500 and $Q2 <= 1.500) { //then Not  (0 / 5) 0/100
        $W1 = 0 ;
        $W2 = 100 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน";
    }elseif ($Q5 <= 4.500 and $Q5 <= 2.500 and $Q8 <= 1.500 and $Q2 <= 4 and $Q5 <= 1.500) { //then Wish  (14 / 4) 77.78/22.22
        $W1 = 77.78 ;
        $W2 = 22.22 ;
        echo '<script>';
        echo "var W1 = '$W1';";
        echo "var W2 = '$W2';";
        echo'</script>';
        $W3 = "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน";
    }
}
else{
    echo "error";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=IBM+Plex+Sans+Thai:wght@300;400&family=Mali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .chartBox {
            margin: 1rem auto;
            width: 400px;
            height: 100px
        }
        .bnt-6 {
            width: 100%;
            left: 0px;
            position: fixed;
            bottom: 18px;
        }

        .R-1 {
        width: 100%;
        position: fixed;
        bottom: 125px;
    }

        .font-shadow{
        /* text-shadow: 0.05em 0.05em #828282; */
    }
        .bg {
        background-Color: #AC7CC0 ;
        width : 40% ;
        /* opacity: 0.5;
        filter: alpha(opacity=50); */
        border-radius : 25px;
    }
    .bnt-0 {
        border-radius: 25px;
        width: 200px;
        text-align: center;
    }
    .bnt-7 {
        width: 275px;
    }
    </style>

</head>
<body>

<div><a href="Index.php"><img src="pic/up.png" alt=""></a><br><hr color="#8A53A2"></div>
<center>
<h1>ผลลัพธ์</h1>
</center>

<div class="chartBox"><canvas id="ChartCanvas"></canvas></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('ChartCanvas');
const ChartCanvas = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'มีความประสงค์อยากย้ายถิ่นฐาน','ไม่มีความประสงค์อยากย้ายถิ่นฐาน'
        ],
        datasets:[{
            label: 'data',
            data: [W1,W2],
            backgroundColor: [
                "#85A1F2",
                "#ff8fab"
                // 'rgb(54, 162, 235)',
                // 'rgb(255, 99, 132)'
            ],
            hoverOffset: 2
        }]
    }
})

</script>

<div class="R-1">
    <font size="6" color="#FFFFFF"><center><b>
    <!-- #0859C3
    #F88A8A -->

<!-- <div class="font-shadow"> -->
<!-- <div class="bg"> -->
<?php 
    // echo $W3;
    if($W3 == "ท่าน มีความประสงค์อยากย้ายถิ่นฐาน") {
        echo "<font style='background-Color: #85A1F2 ;
        width : 50%; border-radius : 50px; padding : 5px 30px'>ท่าน มีความประสงค์อยากย้ายถิ่นฐาน</font>";
    }
    elseif ($W3 == "ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน") {
        echo "
        <font style='background-Color: #ff8fab ;
        width : 120% ; border-radius : 50px; padding : 5px 30px ;'>
        ท่าน ไม่มีความประสงค์อยากย้ายถิ่นฐาน</font>
        ";
    }
    else {
        echo "error";
    }
?>
<!-- </div>
</div> -->
    </b></center></font>
    <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSdHc-oU8jxV4VmiJcrg7j3YYFdd_fPZ1JS7KVD6p5TikpNffg/viewform">ประเมินประสิทธิภาพของเว็บไซต์</a> -->
</div>


<br><br>


<!-- <div><center><img src="pic/UPI.png" alt=""></center></div> -->
<div class="bnt-6">
<div class="ps-0">
<div class="bnt-5"><input type="button" class="button bnt-0" onclick="location.href='Index.php'" value="กลับสู่หน้าหลัก"><input type="button" class="button bnt-0 bnt-7" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSdHc-oU8jxV4VmiJcrg7j3YYFdd_fPZ1JS7KVD6p5TikpNffg/viewform'" value="ประเมินประสิทธิภาพของเว็บไซต์"></div>
</div>
</div>

<!-- <div><input type="button" 
        style="
        background-color: #AC7CC0;
        border: none;
        color: white;
        padding: 15px 32px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 25px;
        bottom : 0px;
        left : auto ;
        " onclick="location.href='Index.php'" value="กลับสู่หน้าหลัก"></div> -->




</body>
</html>