<h2>Resources</h2>

<p>There are two <i>static</i> annotations relavant for PHP-methods: <code>@method</code> and <code>@provides</code>. The first is requires and defines one ore more HTTP-methods which should map to this specific PHP-method, the latter doesn't have to be set and is the counterpart to the <code>Accept</code>-Header.</p>

<p>Most annotations are handled as an array. Only if a specific value is needed, the last one is used. In most cases - like <code>@method</code> - annotations will be interpreted as follows:</p>

<pre><code class="php">/**
 * @method put
 * @method post
 */</code></pre>

<pre><code class="php">[
	'method' => [
		'put',
		'post'
	]
]</code></pre>

<p>In this case both - <code>put</code> and <code>post</code> - will be checked against the requested HTTP-method.</p>

<p>The usage of <code>@provides</code> is a little different. It is optional but, if set, prioritized. It is possible to handle requests with the same HTTP-method to the same URI differently, based on the <code>Accept</code>-header:</p>

<pre><code class="php">&lt;?php
/**
 * @self /type
 */
class Type {
	/**
	* @method get
	* @provides application/json
	*/
	public function getJson() {
		return ['type' => 'json'];
	}

	/**
	* Why would anyone prefer XML?
	*
	* @method get
	* @provides text/xml
	* @provides application/xml
	*/
	public function getXml() {
		return ['type' => 'xml'];
	}
}</code></pre>

<pre><code class="json">GET /type HTTP/1.1
Accept: application/json

{
	"_links": {
		"self": {
			"href": "/type"
		}
	},
	"result": {
		"type": "json"
	}
}</code></pre>

<p>Note that a request without <code>Accept</code> would result in a 404-response. The best practice to prevent this is an additional method with <code>@provides *\/*</code> (mind the escaping backslash) or without a <code>@provides</code>-annotation at all.
