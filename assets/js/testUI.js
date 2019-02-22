
// question page
function setUI() {

  document.addEventListener("DOMContentLoaded", function() {

    // set option active on click
    document.querySelectorAll('.answer').forEach(a => 
      a.addEventListener('click', function(e) {

        if(!this.classList.contains('is--active')) {
          document.querySelectorAll('.answer').forEach(
            e => {e.classList.contains('is--active') ? e.classList.remove('is--active') : null; }
          );
          this.classList.add('is--active');
        }
      })
    );

    // WiFi icon as rating
    let answerCheck = [];
    document.querySelectorAll('.answer').forEach((a, i) => {
      if (5 - a.querySelector('label').innerHTML.slice(-1) == i) {
        answerCheck.push(true);
      } else {
        answerCheck.push(false);
      }
    });

    if (document.querySelector('.question')) {
      answerCheck.includes(false) ? null : document.querySelector('.question').classList.add('is--wifi');
    }


    // Progress bar
    // wrap steps-counter el in new div element
    if(document.querySelector('.wpt_test_form')) {
      const progressData = JSON.parse(document.querySelector('.wpt_test_form').getAttribute('data-questions'));
      const stepsCounterEl = document.querySelector('.steps-counter');
      const wrapper = document.createElement('div');
      wrapper.classList.add('progress');
  
      stepsCounterEl.parentNode.insertBefore(wrapper, stepsCounterEl);
      wrapper.appendChild(stepsCounterEl);
  
      // create and add progressbar
      const progressBar = document.createElement('div');
      const progression = document.createElement('span');
  
      progressBar.classList.add('progressbar');
      progression.style.width = 100 / progressData.total * progressData.answered + '%';
  
      document.querySelector('.progress').append(progressBar);
      document.querySelector('.progressbar').append(progression);
  
  
    }
    

    console.log(document.body.querySelector('.results'));

    // result page
    if (document.querySelector('.results')) {
      
      // add body class for menu-icon color change
      document.body.classList.add('test');

      // add button to result page

      // wrap h2 el in new div element
      const resultTitleEl = document.querySelector('.results h2');
      const wrapper = document.createElement('div');
      wrapper.classList.add('results-title');

      resultTitleEl.parentNode.insertBefore(wrapper, resultTitleEl);
      wrapper.appendChild(resultTitleEl);

      // create and add contact button
      const contactButton = document.createElement('a');
      const url = window.location.origin;
      const currentLang = window.location.pathname.split( '/' )[1];

      console.log(currentLang);

      contactButton.setAttribute('href', `${url}/contact-${currentLang == 'en' ? 'en' : 'nl'}`);
      contactButton.classList.add('button-outline');
      contactButton.innerHTML = 'contact';
      document.querySelector('.results-title').append(contactButton);
    }
  });
} setUI();