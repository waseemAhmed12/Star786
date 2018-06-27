<style>


</style>














<script>

			function showTime(){
				var date = new Date();
				var h = date.getHours(); 
				var m = date.getMinutes(); 
				var s = date.getSeconds(); 
				var session = "AM";

				if(h == 0){
					h = 12;
				}

				if(h > 12){
					h = h - 12;
					session = "PM";
				}

				h = (h < 10) ? "0" + h : h;
				m = (m < 10) ? "0" + m : m;
				s = (s < 10) ? "0" + s : s;

				var time = h + ":" + m + ":" + s + " " + session;
				
				document.getElementById("MyClockDisplaytop").innerText = time;
		
				document.getElementById("MyClockDisplaytop").textContent = time;

				setTimeout(showTime, 1000);
			}

			showTime();

		</script>
		<script>
        window.sr = ScrollReveal();
        sr.reveal('#navbarq', {
          duration: 3000,
          origin:'top'
        });
        sr.reveal('.showcase-left', {
          duration: 2000,
          origin:'top',
          distance:'300px'
        });
        sr.reveal('.showcase-right', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
        sr.reveal('.showcase-btn', {
          duration: 1000,
          delay: 0,
          origin:'left'
        });
        sr.reveal('.testimonial', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.info-left', {
          duration: 2000,
          origin:'left',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.info-right', {
          duration: 2000,
          origin:'top',
          distance:'300px',
          viewFactor: 0.2
        });
    </script>

<script>
$(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });
</script>

