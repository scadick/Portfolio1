// JavaScript Document
(function () {
	"use strict";
  // start with retrieving the elements from the page, and then adding event handling. then write the logic. refer to the seasons example / homework
  //var Img = document.querySelectorAll('.data-ref');

  const httpRequest = new XMLHttpRequest();

    //1. make an AJAX call to the databse; handle any errors first
	if (!httpRequest) {
      alert('giving up, your browser sucks!');
      return false;
    }

    httpRequest.onreadystatechange = processRequest;
    httpRequest.open('GET', 'admin/getMedia.php');
    httpRequest.send();

  function processRequest() {
    // handle the stages of our AJAX call
    let reqIndicator = document.querySelector('.request-state');
    reqIndicator.textContent = httpRequest.readyState;

    //debugger;

    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {// request worked, all is good
        //debugger;
        let data = JSON.parse(httpRequest.responseText);
        processResult(data);
      } else {
        alert('There was a problem with the request');
      }
    }
  }

  function processResult(data) {
    // statement chaining lets you go lots of stuff on one line
    let contentArea = document.querySelector('#contentArea');


    //opacity change
		data.forEach(function(element, index){
	    let vid = document.createElement('video');

	    // add a css class
	    vid.classList.add('media', 'responsive', 'small-12', 'medium-4', 'cell');
	    // add an image source
		  var source= document.createElement('source');
			source.type= 'video/webm';
			source.src= "video/" + data[index].video_name + ".webm";
			vid.appendChild(source);

			source= document.createElement('source');
			source.type= 'video/mp4';
			source.src= "video/" + data[index].video_name + ".mp4";
			vid.appendChild(source);
			
			source= document.createElement('source');
			source.type= 'video/ogv';
			source.src= "video/" + data[index].video_name + ".ogv";
			vid.appendChild(source);

        // add an index number to the thumbnail for array reference
        vid.dataset.index = index;
		console.log(vid[index]);
        // add some event handling
        vid.addEventListener('click', popLightbox(index), false);

        // append it to the container
        contentArea.appendChild(vid);
      });

  }

  /* Video.forEach(function(element, index) {
        //loop through and do stuff to each element at the top of the page
        element.addEventListener('click', changeModel, false);
      }); */
	  
	  var vids = document.querySelectorAll('.media'),
      appliedClass;
	   function popLightbox(index) {
        //debugger;
        window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";
		
		let lightbox = document.querySelector('.lightbox');
        lightbox.style.display = 'block';
		
		const httpRequest = new XMLHttpRequest();

    	//1. make an AJAX call to the databse; handle any errors first
		if (!httpRequest) {
      		alert('giving up, your browser sucks!');
      		return false;
    	}

    httpRequest.onreadystatechange = processRequestl;
    httpRequest.open('GET', 'admin/getMedia.php?name="' + this.id +'"');
    httpRequest.send();

  function processRequestl() {
    // handle the stages of our AJAX call
    let reqIndicator = document.querySelector('.request-state');
    reqIndicator.textContent = httpRequest.readyState;

    //debugger;

    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {// request worked, all is good
        //debugger;
        let data = JSON.parse(httpRequest.responseText);
        processResultl(data);
      } else {
        alert('There was a problem with the request');
      }
    }
	
	 function processResultl(data) {
    let contentArea = document.querySelector('#contentArea');
	let lightboxDesc = lightbox.querySelector('p');
	lightboxDesc.innerHTML = data[index].video_description;
      };
  }
        //populate all the content on the page
        let lightboxImg = lightbox.querySelector('video');
        let lightboxClose = lightbox.querySelector('.close-lightbox');

        lightboxImg.src = "video/" + this.id + ".webm";

        lightboxClose.addEventListener('click', closeLightbox, false);	
      }

      function closeLightbox() {
        //debugger;
		console.log('.media');
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow="visible";
		
		
      }
 		vids.forEach(function(element, index){
			element.addEventListener("click", popLightbox, false);
		});
})();
