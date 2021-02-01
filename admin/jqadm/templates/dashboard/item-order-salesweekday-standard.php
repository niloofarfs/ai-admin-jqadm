<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017-2021
 */

$enc = $this->encoder();

?>

<div class="chart order-salesweekday col-xl-6">
	<div class="box">
		<div class="header"
			data-bs-toggle="collapse" data-bs-target="#order-salesweekday-data"
			aria-expanded="true" aria-controls="order-salesweekday-data">
			<div class="card-tools-left">
				<div class="btn btn-card-header act-show fa"></div>
			</div>
			<span class="header-label">
				<?= $enc->html( $this->translate( 'admin', 'Sales by weekday' ) ); ?>
			</span>
		</div>
		<div id="order-salesweekday-data" class="collapse show content loading"></div>
	</div>
</div>
<?= $this->get( 'orderweekdayBody' ); ?>
