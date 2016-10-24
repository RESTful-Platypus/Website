<h2>Encoding</h2>

<p>JSON- and XML-encoding are supported out-of-the-box. If there is need for another type, the called method can return a plain string and the last provided (or first matched) Content-Type (defined by the <code>@provides</code>-annotation) will be used:</p>

<pre><code class="php">&lt;php
/**
 * @self /investigators
 */
class Investigators {
	/**
	 * @method get
	 * @provides text/csv
	 */
	public function get() {
		$users = [
			'Jupiter Jones;First Investigator',
			'Peter Crenshaw;Second Investigator',
			'Bob Andrews;Records and Research'
		];

		return implode(PHP_EOL, $users);
	}
}</code></pre>

<pre><code>GET /investigators HTTP/1.1
Accept: text/csv

Jupiter Jones;First Investigator
Peter Crenshaw;Second Investigator
Bob Andrews;Records and Research</code></pre>
