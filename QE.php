<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบสอบถาม</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=IBM+Plex+Sans+Thai:wght@300;400&family=Mali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
      body {
        background-attachment: fixed;
      }
      .note {
        width : 75% ;
        left : 0px ; 
      }
      .s-1 {
        font-size: 16px;
    }
      
    </style>
</head>
<body>
    <div><a href="Index.php"><img src="pic/up.png" alt=""></a><br><hr color="#8A53A2"></div>

    <div class="col-md-9 s-1"> <br />
     	  <h3 align="center"> โปรแกรมพยากรณ์ความประสงค์ย้ายถิ่นฐาน
        </h3>
       <p align="center"><b><u>ข้อชี้แจง</u></b> กรุณาเลือกข้อที่ตรงกับความเป็นจริงและในช่องที่ตรงกับความคิดเห็นของท่านมากที่สุด</p>
        <form id="formqsys" name="formqsys" method="post" action="result.php" >
    <table width="75%" border="1" align="center" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
            <tr>
              <td width="75%" rowspan="2" align="center" valign="middle">
              <p><b>หัวข้อการประเมิน</b></p>
              </td>
              <td colspan="5" align="center"><strong>ระดับความคิดเห็น</strong></td>
            </tr>
            <tr>
              <td width="5%" align="center"><strong>5</strong></td>
              <td width="5%" align="center"><strong>4</strong></td>
              <td width="5%" align="center"><strong>3</strong></td>
              <td width="5%" align="center"><strong>2</strong></td>
              <td width="5%" align="center"><strong>1</strong></td>
            </tr>
            <tr><td colspan="6"><b>&nbsp&nbsp&nbsp&nbsp&nbspด้านสังคม</b></td></tr>
            <tr>
              <td height="30">&nbsp; 1.มีความคาดหวังที่จะพัฒนาความเป็นอยู่ของตนเองให้ประสบความสำเร็จในชีวิตที่ดีขึ้น มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q1"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q1"  value="4" ></td>
              <td height="30" align="center"><input type="radio" name="Q1"  value="3" ></td>
              <td height="30" align="center"><input type="radio" name="Q1"  value="2" ></td>
              <td height="30" align="center"><input type="radio" name="Q1"  value="1" ></td>
            </tr>
             <tr> 
              <td height="30">&nbsp; 2.กระแสความนิยมของวัฒนธรรม หรือ ภาพลักษณ์ทางสังคมประเทศของปลายทางมีอิทธิพลต่อการดำรงชีวิต</td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q2"  value="5" required /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q2"  value="4"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q2"  value="3"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q2"  value="2"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q2"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 3.ครอบครัวมีฐานะและธุรกิจรองรับ มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q4"  value="5" required /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q4"  value="4"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q4"  value="3"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q4"  value="2"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q4"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 4.มีแนวทางอาชีพการงานตนเองและครอบครัวคาดหวัง มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q5"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q5"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q5"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q5"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q5"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 5.มีอาชีพมั่นคง ที่สามารถเลี้ยงดูตนเองและคนรอบข้างได้อย่างดี มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐานหรือไม่</td>
              <td height="30" align="center"><input type="radio" name="Q8"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q8"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q8"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q8"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q8"  value="1"></td>
            </tr>
            
            
            
            <tr><td colspan="6"><b>&nbsp&nbsp&nbsp&nbsp&nbspด้านการเมือง</b></td></tr>
            <tr>
              <td height="30">&nbsp; 6.มีนโยบายเศรษฐกิจ กฎหมาย การศึกษา การบริหารภายในประเทศต้นทาง ซึ่งมีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q6"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q6"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q6"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q6"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q6"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 7.รัฐสวัสดิการขั้นพื้นฐาน เช่น การศึกษาชั้นอุดมศึกษา การรักษาโรคและดูแลผู้สูงอายุเป็นต้น มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q3"  value="5" required /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q3"  value="4"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q3"  value="3"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q3"  value="2"></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Q3"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 8.สถานการณ์ความขัดแย้งทางการเมือง โดยมีสาเหตุจากเรื่องความบาดหมางกันระหว่างบุคคล กลุ่มคน องค์กร หรือสถาบัน <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q7"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q7"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q7"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q7"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q7"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 9.ความต้องการศึกษาความรู้เฉพาะทางต่อที่ต่างประเทศ เพราะ ณ ปัจจุบันประเทศไทยมีความรู้เฉพาะทางด้านนั้นๆไม่เพียงพอ <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ซึ่งมีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q12"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q12"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q12"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q12"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q12"  value="1"></td>
            </tr>
            
            <tr><td colspan="6"><b>&nbsp&nbsp&nbsp&nbsp&nbspด้านกฎหมาย</b></td></tr>
            <tr>
              <td height="30">&nbsp; 10.การสมรสกับคู่ชาวต่างชาติ เพื่อย้ายถิ่นฐานสร้างครอบครัวมีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q9"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q9"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q9"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q9"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q9"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 11.การย้ายถิ่นฐานเพราะมีกฎหมายที่ยอมรับการสมรสระหว่างเพศเดียวกันมีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q10"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q10"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q10"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q10"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q10"  value="1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 12.การย้ายถิ่นเพราะมีกฎหมายเปลี่ยนสัญชาติ เพื่อใช้สวัสดิการของพลเมืองของประเทศนั้นๆ มีอิทธิพลต่อการตัดสินใจย้ายถิ่นฐาน</td>
              <td height="30" align="center"><input type="radio" name="Q11"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="Q11"  value="4"></td>
              <td height="30" align="center"><input type="radio" name="Q11"  value="3"></td>
              <td height="30" align="center"><input type="radio" name="Q11"  value="2"></td>
              <td height="30" align="center"><input type="radio" name="Q11"  value="1"></td>
            </tr>
            
            <caption style="caption-side : bottom; text-align: left;"><p><u><font color="red">หมายเหตุ</u>**</font> ข้อมูลที่ได้จากแบบสอบถามทั้งหมด จะไม่มีการบันทึกข้อมูลใดๆทั้งสิ้น</p></caption>
          </table>
          
          </div>
          </div>

          <br />

              <div class=""><center><button type="submit" name="sub" class="button bnt-0 ">ส่งแบบประเมิน</button></center></div>
        
          
        </form>
        <br>
    <!-- <div class="bnt-4"><input type="button" class="button bnt-0" onclick="location.href='result.php'" value="ส่งคำตอบ"></div> -->
</body>
</html>