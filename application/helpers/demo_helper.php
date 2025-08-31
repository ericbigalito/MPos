<?php
function is_on_demo_host()
{
	return $_SERVER['HTTP_HOST'] == 'demo.stracecoreafrica.com' || $_SERVER['HTTP_HOST'] == 'demo.tracecoreafrica.com';
}
?>