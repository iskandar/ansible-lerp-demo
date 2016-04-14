<?php

$CONFIG = require_once 'config.php';

$redisHost = false;
$pageViews = 0;

foreach($CONFIG['hosts']['data'] as $name => $host) {
    $redisHost = $host['rax_networks']['private'][0];
    break;
}
$redis = new Redis();
if ($redisHost) {
    $redis->connect($redisHost, 6379);
    $redis->incr('pageViews');
    $pageViews = $redis->get('pageViews');
}

$allKeys = $redis->keys("*");
?>
<h1>This is the app!</h1>

<p>That is all.</p>

<ul>
    <li>Host: <?php echo gethostname(); ?></li>
    <li>Page Views: <?php echo $pageViews ?></li>
</ul>

<h1>Redis Keys:</h1>
<pre>
<?php print_r($allKeys); ?>
</pre>
