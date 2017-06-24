<?php

use Worthem\App;

?>
<footer>
	<row auto_height>
	  <column>
	      <h3><?=App::get('name')?></h3>
	      <ul class="list">
	        <li><?= App::get('address')?></li>
	        <li><?= App::get('postalCode')?> <?= App::get('city')?></li>
	        <li>Tlf.: <?= App::get('phone')?></li>
	        <li>Email: <a href="mailto:<?= App::get('email')?>"><?= App::get('email')?></a></li>
	      </ul>    
	  </column>
	  <column>
	      <h3>Find Vej</h3>
	      <map-widget map_id="map"></map-widget>
	  </column>
	 <column>
	      <h3>Nyhedsbrev</h3>
	      <subscribe-widget></subscribe-widget>
	  </column>
	</row>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>