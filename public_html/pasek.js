  // Jeżeli użytkownik zescrolluje 80px w dół
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 120) {
  document.getElementById("navbar").style.borderBottom = "solid 2px white";
  document.getElementsByClassName("slide").firstElementChild.style.objectPosition = "0% 0%";
      
        
  }else {
  document.getElementById("navbar").style.borderBottom = "solid 3px #191516";
  document.getElementsByClassName("slide").firstElementChild.style.objectPosition = "0% 40%";    
    }
  }

  //Hamburger menu
  const toggleButton = document.getElementById('toggle-button');
  const naviList = document.getElementById('navi-list');

  toggleButton.addEventListener('click', () => {
    naviList.classList.toggle('active');
  })