<h2>Playground</h2>

<form class="form-inline" id="playground">
	<div class="row">
		<div class="col-sm-2">
			<select name="method" class="custom-select">
				<option value="GET">GET</option>
				<option value="POST">POST</option>
				<option value="PUT">PUT</option>
				<option value="DELETE">DELETE</option>
			</select>
		</div>
		<div class="col-sm-8">
			<input type="text" class="form-control" placeholder="URI" name="uri" value="/api/investigators">
		</div>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

<pre id="playground-result"><code class="json"></code></pre>
