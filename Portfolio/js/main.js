var slideIndex = 1;
var slides = document.getElementsByClassName("mySlides");
scrollShow(".show", 1500); 
scrollShow(".show1", 1500); 
 



function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

const toggleSwitch = document.querySelector(
  '.theme-switch input[type="checkbox"]'
);

function switchTheme(e) {
  if (e.target.checked) {
    //localStorage.setItem("Dark", e.target.checked);
    localStorage.setItem(
      "Dark",
      document.documentElement.setAttribute("data-theme", "dark")
    );
  } else {
    //localStorage.setItem("light", e.target.checked);
    document.documentElement.setAttribute("data-theme", "light");
  }
}

toggleSwitch.addEventListener("change", switchTheme, false);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function showSlides(n) {
  var i;

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}

function myFunction(x) {
  if (x.matches) {
    // If media query matches
    console.log("matches");
    plusSlides(0);
    $("#readMoreBtn").click(function () {
      plusSlides(1);
    });
  } else {
    console.log("Doesn't matches");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "block";
    }
  }
}

var x = window.matchMedia("(max-width: 836px)");
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const obj = document.getElementById("value1Coffee");
const obj1 = document.getElementById("value2Project");
const obj2 = document.getElementById("value3line");
var count = 0;


function scrollShow(link, value) {
  $(document).ready(function () {
    $(window).scroll(function () {
      $(link).each(function () {
        var bottom_of_object = $(this).offset().top;
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        if (bottom_of_window >= bottom_of_object) {
          $(this).animate({ opacity: "1" }, value);
          if(count == 0)
          {
            animateValue(obj, 0, 300, 8000);
            animateValue(obj1, 0, 10, 8000);
            animateValue(obj2, 0, 20000, 8000);    
     
            count++;
          }
        }
      });
    });
  });
}