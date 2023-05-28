    // this is for image sider in about
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
        setTimeout(showSlides, 3000); // Change image every 2 seconds
      }

    //   this is for the bounce h2 tag
      // const h2 = document.querySelector('h2','a');
      // let counter = 0;
      // setInterval(() => {
      //   const offset = Math.sin(counter) * 10;
      //   h2.style.transform = `translateY(${offset}px)`;
      //   counter += 0.1;
      // }, 20);

    //   this is for hide and show container
      function showDiv() {
        document.getElementById('container1').style.display = "none";
        document.getElementById('container2').style.display = "block";
    }
    // this is to go back to show the container
    function goBack() {
        document.getElementById('container1').style.display = "block";
        document.getElementById('container2').style.display = "none";
    }
   