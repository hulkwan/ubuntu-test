<?php
//memcache  test
$mem = new Memcache;
$mem->connect("127.0.0.1", 11211);
$mem->set('key', 'This is a memcached test!', 0, 60);
$val = $mem->get('key');
echo $val; 

?>