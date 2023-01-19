<!DOCTYPE html>
<html>
<head>
<title>test</title><!--ไม่ใส่ head ก็ใช้ได้เหมือนกัน-->
</head>
<body>
    <form action="show.php">
        <h1>j</h1><!--มีได้ไม่เกิน6-->
        <p title="I'm a tooltip">Attributeชื่อเรื่อง</p><!--มีข้อมูลเมื่อเอาเมาส์ชี้-->
        <p>a</p><!--ใส่เมื่อต้องการย่อหน้าใหม่-->
        <a href="https://www.w3schools.com">ใส่link</a><br>
        <img src="w3schools.jpg" alt="รูปภาพ" width="104" height="142"><br>
        <p style="color:purple;">เปลี่ยนสีตัวหนังสือ</p>
        <body style="background-color:powderblue;">
        <p style="background-color:pink;">พื้นหลังแค่บรรทัดข้อความนี้</p>
        <!--เปลี่ยนฟอนต์ ขนาด ตำแหน่ง font-family,font-size,text-align-->
        <!--การบ้าน-->
        What is your name:<input type = "text" name = "name"><br>
        <br><!--อยากเว้นบรรทัด-->
        What is your age:<input type = "text" name = "age"><br>
        What is your gender: <br>
        <input type="radio" name="gender" value="male"> male<br>
        <input type="radio" name="gender" value="female"> female<br>
        What is your marrital status:<br>
        <input type = "radio" name = "marrital_status" value="single"> single<br>
        <input type = "radio" name = "marrital_status" value="married"> married<br>
        <input type = "radio" name = "marrital_status" value="divorced"> divorced<br>
        <input type = "radio" name = "marrital_status" value="widowed"> widowed<br>
        <input type = "submit" value = "sumit">        
    </form>  
</body>
</html>
