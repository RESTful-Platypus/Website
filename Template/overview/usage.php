<h2>Basic Usage</h2>

<p>The most important part is to register a given Resource (or <i>Class</i>). A basic APIs <code>index.php</code> with just one endpoint could begin with the following:</p>

<pre><code class="php">&lt;?php
include('vendor/autoload.php');

$plaqipus = new \Plaqipus\Plaqipus;

$plaqipus->add('\Resources\Users');

echo $plaqipus->go();</code></pre>

<p>If there is no class <code>\Resources\Users</code>, the framework will try to include it by replacing every <code>\</code> with a <code>/</code>.</p>

<p>But Plaqipus don't know anything about the resource (<code>Resources\Users</code>) yet. The class itself has to provide a <code>@self</code>-Annotation, wich defines an unique URI:</p>

<pre><code class="php">&lt;?php
/**
 * @self /users
 */
class Users {
	public function getUserList() {
		return ['Jupiter', 'Peter', 'Bob'];
	}
}</code></pre>

<p>Now, every Request wich matches the URI <code>/users</code> will be directed to the Class <code>Users</code>. Even though the framework now knows the requested resource, it can't be sure about the method. But <i>there's an annotations for that</i>:</p>

<pre><code class="php">/*
 * @method get
 */
public function getUserList() {
	return ['Jupiter', 'Peter', 'Bob'];
}</code></pre>

<p>A <code>GET /users HTTP/1.1</code>-Request would now map to <code>Users</code> → <code>getUserList</code>.</p>

<p><i>For more about annotations see <a href="/annotations/Resources">Annotations/Resources</a> and <a href="/annotations/lists">Annotations/List-Resources</a>.</i></p>
