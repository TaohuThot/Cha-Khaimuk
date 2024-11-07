<?php
include 'links/link.php';
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Cha khaimuk</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
<header class="p-3" style="background-color: #C7A98B;">
    <div class="container">
        <div class="topnav">
            <a href="index.php" class="active">
                <img src="image/cat-ชานมไข่มุก.gif" alt="Cat Drinking Milk Tea GIF" width="50" height="42">
            </a>


            <div id="myLinks">
                <a href="index.php" class="nav-link text-secondary fw-bold">หน้าแรก</a>
                <a href="type.php" class="nav-link text-black fw-bold">ประเภท</a>
                <a href="Diversity.php" class="nav-link text-black fw-bold">ความหลากหลาย</a>
                <a href="history.php" class="nav-link text-black fw-bold">ประวัติศาสตร์</a>
            </div>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</header>


  <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/Cover-1080x675.jpg" class="d-block w-100 img-fluid" alt="Tea">
        </div>
        <div class="carousel-item">
          <img src="image/2.jpg" class="d-block w-100 img-fluid" alt="Tea">
        </div>
        <div class="carousel-item">
          <img src="image/3.jpg" class="d-block w-100 img-fluid" alt="Tea">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing">
      <hr class="featurette-divider mt-4">

      <div class="row featurette mt-4">
        <h2 class="featurette-heading fw-normal lh-1 text-center">ชานมไข่มุก</h2>
        <p class="lead mt-2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชานมไข่มุก (Bubble Tea)
          เป็นเครื่องดื่มที่มีต้นกำเนิดจากไต้หวันในช่วงปี 1980 ซึ่งเป็นการผสมผสานระหว่างชาและนม
          พร้อมด้วยไข่มุกที่ทำจากมันสำปะหลัง ความนุ่มและเหนียวของไข่มุกทำให้ผู้ดื่มรู้สึกสนุกสนานในระหว่างการดื่ม
          โดยเฉพาะอย่างยิ่งเมื่อต้องดูดผ่านหลอดใหญ่
          ทำให้ชานมไข่มุกกลายเป็นเครื่องดื่มที่มีเอกลักษณ์และได้รับความนิยมทั่วโลก
          ในปัจจุบัน ชานมไข่มุกมีความหลากหลายในการปรุงแต่งรสชาติ เช่น การใช้ชาหรือกาแฟต่าง ๆ
          รวมถึงการเติมผลไม้หรือซอสที่หลากหลายเพื่อเพิ่มความหวานและกลิ่นหอม บางร้านยังมีการสร้างสรรค์สูตรใหม่ ๆ
          เพื่อดึงดูดลูกค้า เช่น การทำชานมไข่มุกปั่นหรือชานมไข่มุกที่มีการใช้วัตถุดิบจากธรรมชาติ
          ทำให้เครื่องดื่มนี้มีความแปลกใหม่อยู่เสมอ</p>
        <p class="lead mt-2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเติบโตของชานมไข่มุกไม่เพียงแค่ในไต้หวัน แต่ยังขยายตัวไปทั่วโลก
          โดยมีร้านชาหลายแห่งในเอเชีย อเมริกา
          และยุโรปที่เสนอเมนูที่แตกต่างกันไป สิ่งนี้ทำให้ชานมไข่มุกกลายเป็นสัญลักษณ์ของวัฒนธรรมการดื่มชาสมัยใหม่
          และยังเป็นสื่อกลางในการสร้างสรรค์ประสบการณ์การดื่มที่น่าจดจำในกลุ่มคนรุ่นใหม่.</p>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette mt-4">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">ประเภท</h2>
          <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชาไข่มุก แบ่งได้เป็น 2 ประเภทใหญ่ ๆ คือ ชารสผลไม้
            และ ชานม </p>
        </div>
        <div class="col-md-5">
          <img src="image\562000000466002.jpg" alt="Tea" class="img-fluid">
        </div>
      </div>

      <hr class="featurette-divider mt-4">

      <div class="row featurette mt-4">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">ความหลากหลาย</h2>
          <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชาไข่มุกมีความหลากหลายขึ้นอยู่กับประเภทของชา เช่น
            ชาแดง ชาเขียว ชาอูหลง ชามะลิ และชากาแฟ
            ชาเยิ้งเป็นที่รู้จักในฮ่องกง โดยผสมชาแดงและกาแฟ ในการทำชาไข่มุก มักจะเติมนม</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="image\unnamed.jpg" alt="Tea" class="img-fluid">
        </div>
      </div>

      <hr class="featurette-divider mt-4">

      <div class="row featurette mt-4">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">ประวัติศาสตร์</h2>
          <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชาไข่มุกพบครั้งแรกในประเทศไต้หวัน ช่วงยุค 1980
            ร้านชาชุน ฉุ่ยถังในเมืองไถจง</p>
        </div>
        <div class="col-md-5">
          <img src="image\114784014_xl (1).jpg" alt="Tea" class="img-fluid">
        </div>
      </div>

      <hr class="featurette-divider mt-4">

    </div>

  </main>
  <Script src="script.js"></Script>
  <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
</body>

</html>