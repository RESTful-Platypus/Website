<h2>Platypus</h2>

<p>Platypus is a simple Framework written in PHP for reusing existing Objects as a base for REST-APIs. It supports automatic generation of <a href="https://en.wikipedia.org/wiki/HATEOAS">HATEOAS</a>-links and makes use of annotations - so (in most cases) the code can stay the same.</p>

<p>A <i>very</i> basic example could look like this:</p>

<pre><code class="php">&lt;?php
/**
 * @self /user/{name}
 */
class User {
	/**
	 * @method get
	 */
	public function get($name) {
		return ['name' => $name];
	}
}</code></pre>

<p>Add it to your <code><a href="https://getcomposer.org/">composer.json</a></code>:</p>

<pre><code class="json">{
	"require": {
		"restful-platypus/platypus": "@dev"
	}
}</code></pre>

<p><i>This page is build with Platypus (=^･^=).</i></p>
