require('./bootstrap');

class App {

    constructor() {
        this.Events();
        this.CLoadThemeFromLocalStorage();
    }

    Events() {

        document.getElementById('theme_btn').addEventListener('click', (e) => {
            this.CChangeTheme(e);
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
    CChangeTheme(e){
        console.log();
        if (document.body.className == "mode-dark") {
            e.target.setAttribute("name", "sunny-outline");
            document.body.className = "mode-light";
        }else{
            e.target.setAttribute("name", "moon-outline");
            document.body.className = "mode-dark";
        }

        localStorage.setItem('theme', document.body.className);
    }

    /**
    * @param {MouseEvent} e - Mouse event
    */
    WPBackgroundParalax(e){
        const elem = document.querySelector(".background-wrapper");
        if (elem) {     
            let _w = window.innerWidth/2;
            let _h = window.innerHeight/2;
    
            let _mouseX = e.clientX;
            let _mouseY = e.clientY;
    
            let top = `${(_mouseX - _w) / _w * 5}%`;
            let left = `${(_mouseY - _h) / _h * 5}%`;
    
            elem.style.transform = 'translate(' + top +','+ left +' )';
        }
    }






  }

  document.addEventListener("DOMContentLoaded", () => {
      const app = new App();
  });
