<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>파라과이 사업과 이민의 파트너 A.S.K Paraguay</title>
  <link rel="icon" href="images/titlelogo.png" type="image/png">
  <!-- css -->
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!-- navigation bar menu -->
  <header>
    <div class="nav-container"  id="sticky-h">
        <!-- logo -->
        <a href="index.html" class="logo">
            <img src="images/logo.png" alt="logo" id="logoimg">
        </a>
        <!-- menu icon -->
        <a href="javascript:void(0);" class="icon" onclick="myfunction()">
        <ion-icon name="menu-outline"></ion-icon></a>    
         <!-- navbar--> 
        <nav class="navbar" id="navbar">
          <ul>          
            <li><a href="index.html">Home</a></li>
            <li><a href="#company">회사소개</a></li>
            <li><a href="#service">서비스</a></li>
            <li><a href="#info">정보</a></li>
            <li ><a href="#contact">Contact</a></li>
          </ul>      
        </nav>      
    </div>     
  </header>    

    <!-- contact info -->
    <section>
      <h1 class="head1">감사합니다 !</h1>
      <div class="contact-container" id="contact">

          <div class="email">
            <h3><?php session_start();
            echo $_SESSION['USER']?>
            님, 문의가 접수되었습니다. <br>
            빠른 시일 내에 답신드리도록 하겠습니다. <br>
            좋은 하루 되시기 바랍니다.</h3>
            <a class="button" href="index.html">홈으로 돌아가기</a>
          </div>

          <div class="contact-item">
            <div>
              <ion-icon name="call-outline" style="margin-top: 0.5rem;"></ion-icon>
              <div style="margin-top: 1rem;">+595 991 689 600 김 안젤로</div><br>
            </div>
            <div>
              <ion-icon name="chatbubbles-outline" style="margin-top: 0.1rem;margin-left: 0.5rem;"></ion-icon>
              <div style="margin-top: 0.3rem;"> Kakao ID : angelokimpy</div>
            </div>
            
            <div>
              <ion-icon name="call-outline" style="margin-top: 3rem;"></ion-icon>
              <div style="margin-top: 3.5rem;">+595 992 371 364 김 승 혁</div><br>
            </div>
            <div>
              <ion-icon name="chatbubbles-outline" style="margin-top: 0.1rem;margin-left: 0.5rem;"></ion-icon>
              <div style="margin-top: 0.3rem;">Kakao ID : rodrigokim07</div>
            </div>
            
            <div style="margin-top: 3rem; margin-left: 1.5rem; margin-bottom: 1.2rem;">
              주소 : Padre Casanello esq. Battilana (2ndo piso),
              Asunción, Paraguay
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1831291.405704161!2d-57.8679776795463!3d-26.302494167773304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da9ac3e2ab6b7%3A0x51a72b8dba43eb4f!2sA.S.K%20Paraguay%20Consulting%20%26%20Management!5e0!3m2!1sen!2sbr!4v1643646822683!5m2!1sen!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
          </div>      
      </div>
    </section>
  </div>
  
  <footer id="">
    <div class="">
        <nav id="footer-nav">
          <ul >          
            <li><a href="index.html">Home</a></li>
            <li><a href="#company">회사소개</a></li>
            <li><a href="#service">서비스</a></li>
            <li><a href="#info">정보</a></li>
            <li ><a href="#contact">Contact</a></li>
          </ul>      
        </nav>             
    </div>  
    <div class="address">
      <strong>A.S.K Paraguay Co.</strong> <br> 
      Padre Casanello esq. Battilana (2ndo piso), Asunción, Paraguay
    </div>  
    <p>&copy; Copyright 2022 A.S.K Paraguay</p>   
  </footer>

<!-- script -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
// responsive navbar
  function myfunction() {
  var x = document.getElementById("navbar");
  if (x.className === "navbar") {
    x.className += " responsive";
    } else {
    x.className = "navbar";
    }
}
// sticky navbar
window.onscroll = function() {navscroll()};

var sheader = document.getElementById("sticky-h");
var logo = document.getElementById("logoimg");
var sticky = (sheader.offsetHeight)*0.5;

function navscroll() {
  if (window.pageYOffset >= sticky) {
    sheader.classList.add("sticky")
    logoimg.src = "images/logowhite.png"
  } else {
    sheader.classList.remove("sticky");
    logoimg.src = "images/logo.png"
  }
}

</script>

</body>
</html>