// JavaScript Document
(function () {
    "use strict";
	
 var top = document.querySelector("#btt");
 function backTop() {
  scroll = 0;
  window.scrollTo(0, 0);
	
 }
	
  top.addEventListener("click", backTop, false);

  var media, demoreel, toggleButton, toggleB;	

  //function init() {
  media = document.querySelector("#demoVid");
  toggleButton = document.querySelector("#playVideo");
  console.log(toggleButton);
  //toggleB = document.querySelector("#play");
  console.log(toggleButton);
  //}
 function togglePlay(evt) {
 console.log("fired from togglePlay()");
 if(media.paused){
  media.play();
  evt.currentTarget.innerHTML = "Pause";
  } else {
   media.pause();
   evt.currentTarget.innerHTML = "Play";
   }
  }
 function toggleP(evt) {
  console.log("fired from togglePlay()");
  if(demoreel.paused){
	  demoreel.play();
	  evt.currentTarget.innerHTML = "Pause";
	  }else{
		  demoreel.pause();
		  evt.currentTarget.innerHTML = "Play";
		  }
	}

 toggleButton.addEventListener("click", togglePlay, false);
 //toggleB.addEventListener("click", toggleP, false);
 
 var lightboxClose = document.querySelector('.close-lightbox'),
      appliedClass;
 function popLightbox(currentIndex, currentObject) {
        //debugger;
        window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";

        // turn on the lightbox
        let lightbox = document.querySelector('.lightbox');
        lightbox.style.display = 'block';

        //populate all the content on the page
        let lightboxImg = lightbox.querySelector('video');
        let lightboxClose = lightbox.querySelector('.close-lightbox');
        let lightboxDesc = lightbox.querySelector('p');

        lightboxImg.src = "video/" + currentObject.media[currentIndex];
        lightboxDesc.innerHTML = currentObject.imageDescription[currentIndex];

        lightboxClose.addEventListener('click', closeLightbox, false);	
      }

      function closeLightbox() {
        //debugger;
		console.log('.close-lightbox');
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow="visible";
		
		
      }
 		
})();