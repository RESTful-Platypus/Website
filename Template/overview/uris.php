<h2>URIs</h2>

<p>URIs are validated by <a href="https://github.com/rize/UriTemplate">rize/UriTemplate</a>. If the (requested) URI contains a variable, it'll be passed to the method:</p>

<pre><code class="php">&lt;php
/**
 * @self /posts/{slug}
 */
class Posts {
	/**
	* @method get
	*/
	public method getPost($slug) {}
}</code></pre>

<p>It is possible to use more than one variable and shuffle their order:<p>

<pre><code class="php">&lt;php
/**
 * @self /posts/{year}/{month}/{slug}
 */
class Posts {
	/**
	* @method get
	*/
	public method getPost($slug, $year, $month) {}
}</code></pre>
