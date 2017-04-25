<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
}
?>
<form class="form-horizontal">
<div class="panel panel-info" style="height: 100%;">
	<div class="panel-heading" role="tab">
		<h4 class="panel-title">
			Plugin worxLandroid
		</h4>
	</div>
	<div class="form-group">
		<br>
		<label class="col-sm-4 control-label">{{Configuration}} :</label>
		<div class="col-lg-4">
			<a class="btn btn-info" href=/index.php?v=d&m=worxLandroid&p=worxLandroid> {{Accès à la configuration}}</a>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">{{Faire un don au développeur}} :</label>
		<div class="col-lg-8">
			{{Ce plugin est gratuit pour que chacun puisse en profiter simplement.}}<br>
			{{Il a ete testé avec le modele WG791E.1 (firmware 2.45)}}<br>
			{{Si vous souhaitez tout de même faire un don au développeur du plugin, utilisez le lien suivant.}}<br><br>
			<a class="btn" id="bt_paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=HM5MQ7APM44PY&lc=FR&item_name=plugin%20jeedom%20worxlandroid&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_new" >
				<img src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" alt="{{Faire un don via Paypal au développeur Virux}}">
			</a>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">{{Source}} :</label>
		<div class="col-lg-8">
			{{Ce plugin a ete développé avec l'aide de l'analyse du serveur web embarqué}}<br>
			{{ainsi que du projet worx-landroid-nodejs de mjiderhamn}}
		</div>
	</div>
</div>

<fieldset>
	<div class="form-group">
		<label class="col-lg-4 control-label">{{Global param 1}}</label>
		<div class="col-lg-2">
			<input class="configKey form-control" data-l1key="param1" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-4 control-label">{{Global param 2}}</label>
		<div class="col-lg-2">
			<input class="configKey form-control" data-l1key="param2" value="80" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-4 control-label">{{Global param 2}}</label>
		<div class="col-lg-2">
			<select class="configKey form-control" data-l1key="param3">
				<option value="value1">value1</option>
				<option value="value2">value2</option>
			</select>
		</div>
	</div>
</fieldset>
</form>

