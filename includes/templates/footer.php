  
  <footer class="footer">
		<div class="footer-container-1">
			<div class="footer-information"> <!-- SOBRE MI -->
				<h1 class="logo">X-Daniel'S</h1>
				<p>¡Hola! Este es mi portafolio virtual, donde puedes ver algunos de los proyectos en los que he trabajado. Si quieres saber más sobre mí o contactarme, ¡visita mis páginas de contacto!</p>

				<div class="social">
					<a href="https://portafolio-daniels.netlify.app/" target="_blank" class="social-btn">
                        <?php echo incluirIcono('web'); ?>
                    </a>
					<a href="https://www.linkedin.com/in/daniel-patricio-yautibug-65a656209/" target="_blank" class="social-btn">
                        <?php echo incluirIcono('linkedin'); ?>
                    </a>
					<a href="https://github.com/daniels36999" target="_blank" class="social-btn">
                        <?php echo incluirIcono('github'); ?>
                    </a>
					<a href="https://grabcad.com/daniel.patricio.yautibug-1" target="_blank" class="social-btn">
                        <?php echo incluirIcono('grabcad'); ?>
                    </a>
				</div> 
			</div>

			<div class="footer-information "> <!-- LOCACION -->
				<h2>Address</h2>
                <div class="footer-address">
                    <?php echo incluirIcono('location'); ?> 
                    <p>Ecuador</p>
                </div>
                <div class="footer-address">
                    <?php echo incluirIcono('address'); ?> 
                    <p>Guamote, Chimbprazo</p>
                </div>
                <div class="footer-address">
                    <?php echo incluirIcono('email'); ?> 
                    <p>dx.daniels14@gmail.com</p>
                </div>
			</div>

			<div class="footer-information "> <!-- ENLACES-->
				<h2>Quick Links</h2>
                <div class="footer-links">
                    <a class="btn-link" href="/index.php">&gt;  Inicio</a>
                    <a class="btn-link" href="/build/php/sobremi.php">&gt;  Sobre Mi</a>
                    <a class="btn-link" href="#">&gt;  Our Services</a>
                    <a class="btn-link" href="#">&gt;  Term &amp; Condition</a>
                    <a class="btn-link" href="#">&gt;  Support</a>
                </div>
			</div>

			<div class="footer-information "> <!-- Contactame -->
				<h2>Newsletter</h2>
				<p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
				<div >
					<input class="input" type="text" placeholder="Your Email"/>
					<button type="button" class="signbtn">SignUp</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="footer-container-2">
            <p class="copyrigth"> Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
            <p>Design By: <a href="https://github.com/daniels36999" target="_blank">Daniels Yautibug</a></p>
		</div>
	</footer>

    <script src="/build/js/bundle.min.js"></script>
</body>

</html>