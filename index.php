<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="ru">
<body>
	<div class="aboutgl">
		<p>
			Ботанический сад
			<br >
	 имени профессора Б. М. Козо-Полянского
	<br > Воронежского Государственного Университета
	это:
		</p>
  <div class="slideshow-container">
    <div class="mySlides1 fade">
        <h4>3500</h4>
        <span>видов растений</span><br/>
     </div>
     <div class="mySlides1 fade">
       
        <h4>750</h4>
        <span>видов древесных экзотов</span>
      </div>
      <div class="mySlides1 fade">
       <h4>350</h4>
        <span>редких и исчезающих таксонов</span><br/>
      </div>
      <div class="mySlides1 fade">
       <h4>80 лет</h4>
        <span>опыт садоводства</span><br/>
      </div>
      <div class="mySlides1 fade">
       <h4>85 лет</h4>
        <span>Ботаническому саду</span><br/>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
		<div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
       <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
    </div>
</div>

</div>
<div class="galleryssh">
		<h2>ФОТОГАЛЕРЕЯ</h2><br/>
	<div class="slider_wrapper">
 <a id="prev">&#10094;</a>
  <div class="myslide">
    <div class="slider_item pack_1"><img class="
Width"src="images/ssh1.jpg" alt="1" ></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_2"><img class="Height" src="images/ssh2.jpg" alt="1" ></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_3"><img class="Height" src="images/ssh3.jpg" alt="1"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_4"><img class="Height" src="images/ssh4.jpg" alt="4"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_5"><img class="
Width"src="images/ssh5.jpg" alt="5"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_6"><img class="
Width"src="images/ssh6.jpg" alt="6"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_7"><img class="Height" src="images/ssh7.jpg" alt="7"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_8"><img class="
Width" src="images/ssh8.jpg" alt="8"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_9"><img class="Height" src="images/ssh9.jpg" alt="9"></div>
  </div>
  <div class="myslide">
    <div class="slider_item pack_10"><img class="Height" src="images/ssh10.jpg" alt="sl"></div>
  </div>
  <a id="next" >&#10095;</a>
</div>
	

   <!-- <div class="slideshow-container">
      <div class="mySlides fade">
    
        <img src="images/ssh1.jpg" style="width:80%" >
        
      </div>
      <div class="mySlides ">
       
        <img src="images/ssh2.jpg" style="width:80%">
        
      </div>
      <div class="mySlides ">
       
        <img src="images/ssh3.jpg" style="width:80%">
        
      </div>
<div class="mySlides ">
    
        <img src="images/ssh4.jpg" style="width:80%" >
        
      </div>
      <div class="mySlides ">
       
        <img src="images/ssh5.jpg" style="width:80%">
        
      </div>
      <div class="mySlides ">
       
        <img src="images/ssh6.jpg" style="width:80%">
        
      </div>

      <div class="mySlides ">
    
        <img src="images/ssh7.jpg" style="width:80%" >
        
      </div>
      <div class="mySlides ">
       
        <img src="images/ssh8.jpg" style="width:80%">
        
      </div>
      <div class="mySlides ">
       
        <img src="images/ssh9.jpg" style="width:80%">
        
      </div>
      <div class="mySlides ">
    
        <img src="images/ssh10.jpg" style="width:80%" >
        
      </div>-->
    <br>
  </div>
	
	
<!--<script>
   var slideIndex = 0;
   showSlides();
      function showSlides() {
       var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1} 
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 5000); 
    
      }

    </script>-->
</div>
<?php
require 'Footer.php';
?>
</body>
</html>
<script >
  let slideIndex = 1;
showSlides(slideIndex);

let prev = document.getElementById ('prev');
let next = document.getElementById ('next');
next.addEventListener ("click", function () {
  showSlides(slideIndex += 1);
  makeTimer();//Пересоздаем интервал если производится нажатие 
});
prev.addEventListener ("click", function () {
  showSlides(slideIndex -= 1);
  makeTimer();
});

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
    let slides = document.getElementsByClassName("myslide");
    var i;
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
 
    for (let slide of slides) {
        slide.style.display = "none";
    }
    slides[slideIndex - 1].style.display = "flex"; 


  }
 var timer = 0;
 makeTimer(); 
 function makeTimer(){
    clearInterval(timer) 
    timer = setInterval(function(){
      slideIndex++;
      showSlides(slideIndex);
    },5000);
  } 
</script>
<script >

var slideIndex1 = 1;
showSlides1(slideIndex1);



// Next/previous controls
function plusSlides(n) {
  showSlides1(slideIndex1 += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
  var i1;
  var slides1 = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot");
  if (n > slides1.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = slides1.length}
  for (i1 = 0; i1 < slides1.length; i1++) {
      slides1[i1].style.display = "none";
  }
  for (i1= 0; i1 < dots.length; i1++) {
      dots[i1].className = dots[i1].className.replace(" active", "");
  }
  slides1[slideIndex1-1].style.display = "block";
  dots[slideIndex1-1].className += " active";
}
</script>
