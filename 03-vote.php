<?php

if(rand(1,10) > 4)
{
	$cnt = file_get_contents('./vote.txt');
	$cnt += 1;
	file_put_contents('./vote.txt',$cnt);

	echo '1';


}
else
{
	echo '0';
}
?>
