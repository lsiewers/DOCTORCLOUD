// video button
let videoPlay = false;

function convertLink(link) {
  var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
  var match = link.match(regExp);

  if (match && match[2].length == 11) {
      return match[2];
  } else {
      return 'error';
  }
}

function playVideo(videoSrc) {
  videoPlay = true;
  const src = '//www.youtube.com/embed/' + convertLink(videoSrc) + '?feature=oembed&autoplay=1&modestbranding=1&showinfo=0&controls=0';
  const video = document.querySelector('.modal-video');
  video.setAttribute('src', src);
  video.classList.add('video--open');
}

function closeModal() {
  const video = document.querySelector('.modal-video');
  video.classList.remove('video--open');
  video.setAttribute('src', '');
  videoPlay = false;
}

document.onkeydown = function(evt) {
  if(videoPlay) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
      closeModal();
    }
  };
}