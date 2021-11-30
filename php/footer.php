<footer class="align">
	<div class="social">
		<h2>Conheça nossas redes sociais</h2>
		<div class="center">
		<img src="img/facebook.ico" alt="#"><a href="">Facebook</a><br>
		<img src="img/instagram.ico" alt="#"><a href="">Instagram</a><br>
		<img src="img/twitter.ico" alt="#"><a href="">Twitter</a><br>
		<img src="img/telefone.ico" alt="#"><a href="">Telefone</a><br>
		</div>
	</div>
	<div class="about">
		<h2 id="about">Sobre nós</h2>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis veniam suscipit esse saepe ratione adipisci eius, maxime architecto pariatur tempore quidem in eligendi vitae, laudantium unde velit! Fugiat, numquam recusandae!</p>
	</div>
	<p class="author">AUTHOR:
		<a href="https://api.whatsapp.com/send?phone=5511966028963&text=Ol%C3%A1%2C%20vi%20um%20site%20feito%20por%20voc%C3%AA..." target="_blanck">
		JORGELUIS</a>
    </p>
</footer>


<!--Script do menu-->
<script>
	function myFunction() {
  var x = document.getElementById("mymenu");
  if (x.className === "menu") {
    x.className += " responsive";
  } else {
    x.className = "menu";
  }
}
</script>
<!--fim do script do menu-->
<!--esse script é da galeria-->

<script>
	filterSelection("all")
	function filterSelection(c) {
	  var x, i;
	  x = document.getElementsByClassName("column1");
	  if (c == "all") c = "";
	  for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	  }
	}
	
	function w3AddClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	  }
	}
	
	function w3RemoveClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	  }
	  element.className = arr1.join(" ");
	}
	
	
	// Add active class to the current button (highlight it)
	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	  });
	}
	</script>
<!--fim do script da galeria-->
<script>
	// Open the Modal
	function openModal() {
	  document.getElementById("myModal").style.display = "block";
	}
	
	// Close the Modal
	function closeModal() {
	  document.getElementById("myModal").style.display = "none";
	}
	
	var slideIndex = 1;
	showSlides(slideIndex);
	
	// Next/previous controls
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}
	
	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  var captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  captionText.innerHTML = dots[slideIndex-1].alt;
	}
	</script>

</body>
</html>