#Generate Settings File
Input your setttings below and download a framework already setup for you!
<form method="POST" action="save_settings.php">
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-TITLE">Application Name</label>
			<input class="form-control" type="text" name="const-TITLE" id="const-TITLE">
		</div>
		<div class="form-group col-md-6">
			<label for="const-DB_HOSTNAME">Database Host<a class="help">?<span>Normally localhost. Contact your web host if localhost does not work.</span></a></label>
			<input class="form-control" type="text" name="const-DB_HOSTNAME" id="const-DB_HOSTNAME">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-DB_NAME">Database Name</label>
			<input class="form-control" type="text" name="const-DB_NAME" id="const-DB_NAME">
		</div>
		<div class="form-group col-md-6">
			<label for="const-SALT">Salt<a class="help">?<span>This is used to encrypt your data. Make it a long string of random characters</span></a></label>
			<p></p>
			<input class="form-control" type="text" name="const-SALT" id="const-SALT">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-DB_USERNAME">Database Username</label>
			<input class="form-control" type="text" name="const-DB_USERNAME" id="const-DB_USERNAME">
		</div>
		<div class="form-group col-md-6">
			<label for="const-DB_PASSWORD">Database Password</label>
			<input class="form-control" type="text" name="const-DB_PASSWORD" id="const-DB_PASSWORD">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-DEFAULT_CONTROLLER">Default Controller<a class="help">?<span>This is used when you go to domain.com/</span></a></label>
			<input class="form-control" type="text" name="const-DEFAULT_CONTROLLER" id="const-DEFAULT_CONTROLLER">
		</div>
		<div class="form-group col-md-6">
			<label for="const-DEFAULT_ACTION">Default Action <a class="help">?<span>Used when there is no action in the route</span></a></label>
			<input class="form-control" type="text" name="const-DEFAULT_ACTION" id="const-DEFAULT_ACTION">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-DEFAULT_VIEW_TYPE">Default View Type <a class="help">?<span>html, json, xml, etc</span></a></label>
			<input class="form-control" type="text" name="const-DEFAULT_VIEW_TYPE" id="const-DEFAULT_VIEW_TYPE">
		</div>
		<div class="form-group col-md-6">
			<label for="const-AJAX_RETURN_TYPE">Ajax Return Type <a class="help">?<span>html, json, xml, etc</span></a></label>
			<input class="form-control" type="text" name="const-AJAX_RETURN_TYPE" id="const-AJAX_RETURN_TYPE">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-DEFAULT_LAYOUT">Default Layout <a class="help">?<span>If layouts are on this is the layout that will be used by default.</span></a></label>
			<input class="form-control" type="text" name="const-DEFAULT_LAYOUT" id="const-DEFAULT_LAYOUT">
		</div>
		<div class="form-group col-md-6">
			<label for="const-AUTH_TABLE">Authorize Table</label>
			<input class="form-control" type="text" name="const-AUTH_TABLE" id="const-AUTH_TABLE">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-AUTH_USERNAME_FIELD">Authorize Username Field</label>
			<input class="form-control" type="text" name="const-AUTH_USERNAME_FIELD" id="const-AUTH_USERNAME_FIELD">
		</div>
		<div class="form-group col-md-6">
			<label for="const-AUTH_PASSWORD_FIELD">Authorize Password Field</label>
			<input class="form-control" type="text" name="const-AUTH_PASSWORD_FIELD" id="const-AUTH_PASSWORD_FIELD">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-AUTH_REDIRECT_CONTROLLER">Authorize Redirect Controller <a class="help">?<span>When Authentication fails it will go to this controller.</span></a></label>
			<input class="form-control" type="text" name="const-AUTH_REDIRECT_CONTROLLER" id="const-AUTH_REDIRECT_CONTROLLER">
		</div>
		<div class="form-group col-md-6">
			<label for="const-AUTH_REDIRECT_ACTION">Authorize Redirect Action <a class="help">?<span>When Authentication fails it will go to this action.</span></a></label>
			<input class="form-control" type="text" name="const-AUTH_REDIRECT_ACTION" id="const-AUTH_REDIRECT_ACTION">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-AUTH">Authorize</label>
			<div>
				<label class="radio-inline" class="radio_label" for="const-AUTH"><input id="const-AUTH" name="const-AUTH" value="true" type="radio">On</label>
				<label class="radio-inline" class="radio_label" for="const-AUTH_false"><input name="const-AUTH" value="false" id="const-AUTH_false" type="radio">Off</label>
			</div>
		</div>
		<div class="form-group col-md-6">
			<label for="const-LAYOUTS"> Layouts</label>
			<div>
				<label class="radio-inline" class="radio_label" for="const-LAYOUTS"><input id="const-LAYOUTS" name="const-LAYOUTS" value="true" type="radio">On</label>
				<label class="radio-inline" class="radio_label" for="const-LAYOUTS_false"><input name="const-LAYOUTS" value="false" id="const-LAYOUTS_false" type="radio">Off</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-AUTO_RENDER">Auto Render</label>
			<div>
				<label class="radio-inline" class="radio_label" for="const-AUTO_RENDER"><input id="const-AUTO_RENDER" name="const-AUTO_RENDER" value="true" type="radio">On</label>
				<label class="radio-inline" class="radio_label" for="const-AUTO_RENDER_false"><input name="const-AUTO_RENDER" value="false" id="const-AUTO_RENDER_false" type="radio">Off</label>
			</div>
		</div>
		<div class="form-group col-md-6">
			<div>
				<label for="const-REST">Rest <a class="help">?<span>All calls will go to the action of the http request.</span></a></label>
				<div>
					<label class="radio-inline" class="radio_label" for="const-REST"><input id="const-REST" name="const-REST" value="true" type="radio">On</label>
					<label class="radio-inline" class="radio_label" for="const-REST_false"><input name="const-REST" value="false" id="const-REST_false" type="radio">Off</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="const-SESSION">Session</label>
			<div>
				<label class="radio-inline" class="radio_label" for="const-SESSION"><input id="const-SESSION" name="const-SESSION" value="true" type="radio">On</label>
				<label class="radio-inline" class="radio_label" for="const-SESSION_false"><input name="const-SESSION" value="false" id="const-SESSION_false" type="radio">Off</label>
			</div>
		</div>
		<div class="form-group col-md-6">
			<label for="const-DEBUG">Debug</label>
			<div>
				<label class="radio-inline" class="radio_label" for="const-DEBUG"><input id="const-DEBUG" name="const-DEBUG" value="true" type="radio">On</label>
				<label class="radio-inline" class="radio_label" for="const-DEBUG_false"><input name="const-DEBUG" value="false" id="const-DEBUG_false" type="radio">Off</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Extensions</label>
			<div class="checkbox">
				<label for="Scaffolding"><input type="checkbox" name="Core::$extensions[]" id="Scaffolding" value="Scaffolding" />Scaffolding</label>
			</div>
			<div class="checkbox">
				<label or="SoftDeletion"><input type="checkbox" name="Core::$extensions[]" value="SoftDeletion" id="SoftDeletion" />Soft Deletion</label>
			</div>
			<div class="checkbox">
				<label for="Testing"><input type="checkbox" name="Core::$extensions[]" value="Testing" id="Testing" />Unit Testing</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="routes col-xs-12">
			<label>Routes</label>
			<div class="route row">
				<div class="col-xs-3 form-inline">
					<input class="form-control" type="text" name="Core::$routes[0][name]" placeholder="Route" />
					<span>=</span>
				</div>
				<div class="col-xs-5">
					<input class="form-control" type="text" name="Core::$routes[0][controller]" placeholder="Controller" />
				</div>
				<div class="col-xs-4">
					<input class="form-control " type="text" name="Core::$routes[0][action]" placeholder="Action" />
				</div>
			</div>
			<div class="col-xs-12">
				<a id="new_route" href="#new_route" class="button">Add Route</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6 col-md-offset-6">
			<input type="submit" value="Download" class="btn btn-secondary pull-right">
		</div>
	</div>
</form>