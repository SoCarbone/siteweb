<li class="<?php if((isset($_GET['page']) AND $_GET['page'] == 'home') OR !isset($_GET['page'])) { echo 'uk-active'; } ?>"><a class="" href="home.html">Qui sommes nous ?</a></li>
<li class="<?php if(isset($_GET['page']) AND $_GET['page'] == 'services') { echo 'uk-active'; } ?>"><a class="" href="services.html">Services</a></li>
<li class="<?php if(isset($_GET['page']) AND $_GET['page'] == 'portfolio') { echo 'uk-active'; } ?>"><a class="" href="portfolio.html">Réalisations</a></li>
<li class="<?php if(isset($_GET['page']) AND $_GET['page'] == 'contact') { echo 'uk-active'; } ?>"><a class="" href="contact.html">Contact</a></li>
