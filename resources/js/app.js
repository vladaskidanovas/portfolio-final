const { clippingParents } = require('@popperjs/core');

require('./bootstrap');

class App {

    constructor() {
        this.Events();
        this.CLoadThemeFromLocalStorage();
    }

    Events() {

        document.getElementById('theme_btn').addEventListener('click', (e) => {
            this.CChangeTheme();
        });

        document.addEventListener("mousemove", (e) => {
            this.WPBackgroundParalax(e);
        });

    }

    CLoadThemeFromLocalStorage(){
        if (localStorage.getItem('theme')) {
            document.body.className = localStorage.getItem('theme');
        }else{
            // choose by time
            var time = new Date().toLocaleString('en-US', { hour: 'numeric', hour12: false });
            console.log(time);

            if (time >= 18 || time <= 6) {
                document.body.className = "mode-dark";
            }else{
                document.body.className = "mode-light";
            }

            localStorage.setItem('theme', document.body.className);
        }
    }

    /**
     * Change theme for dark or white and save it to web cache
     */
    CChangeTheme(){

        if (document.body.className == "mode-dark") {
            document.body.className = "mode-light";
        }else{
            document.body.className = "mode-dark";
        }

        localStorage.setItem('theme', document.body.className);
    }

    /**
    * @param {MouseEvent} e The date
    */
    WPBackgroundParalax(e){
        const elem = document.querySelector(".background-wrapper");
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;

        let _mouseX = e.clientX;
        let _mouseY = e.clientY;

        let top = `${(_mouseX - _w) / _w * 5}%`;
        let left = `${(_mouseY - _h) / _h * 5}%`;

        elem.style.transform = 'translate(' + top +','+ left +' )';
    }






  }

  document.addEventListener("DOMContentLoaded", () => {
      const app = new App();
  });

//Backgranoud gradient move

// (function() {
//     // Add event listener
//     document.addEventListener("mousemove", parallax);
//     const elem = document.querySelector(".background-wrapper > img");
//     // Magic happens here
//     function parallax(e) {
//         let _w = window.innerWidth/2;
//         let _h = window.innerHeight/2;
//         let _mouseX = e.clientX;
//         let _mouseY = e.clientY;
//         let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
//         let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
//         let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
//         let x = `${_depth3}, ${_depth2}, ${_depth1}`;
//         console.log(x);
//         elem.style.backgroundPosition = x;
//     }

// })();
