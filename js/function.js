
let eventTextElements = document.querySelectorAll('.event-text');

eventTextElements.forEach(function(element) {
  element.style.display = 'none';
});

function hideAllTextBlocks() {
  eventTextElements.forEach(function(element) {
    element.style.display = 'none';
  });
}

//Add the clicked element class name and remove class name of the rest
let clsa = document.getElementsByClassName("clsa");
for (let i = 0; i < clsa.length; i++) {
  clsa[i].addEventListener("click", function() {
    for (let j = 0; j < clsa.length; j++) {
      clsa[j].classList.remove("active");
    }
    this.classList.add("active");
  });
}

document.querySelector('.cls-10').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.wien').style.display = 'block';
});

document.querySelector('.cls-3').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.NO').style.display = 'block';
  
});

document.querySelector('.cls-7').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.Tirol').style.display = 'block';
});

document.querySelector('.cls-2').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.OBO').style.display = 'block';
});

document.querySelector('.de').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.DE').style.display = 'block';
});

document.querySelector('.st').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.ST').style.display = 'block';
});

document.querySelector('.cls-4').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.karnten').style.display = 'block';
});

document.querySelector('.cls-6').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.SB').style.display = 'block';
});

document.querySelector('.cls-1').addEventListener('click', function() {
  hideAllTextBlocks();
  document.querySelector('.STM').style.display = 'block';
});

