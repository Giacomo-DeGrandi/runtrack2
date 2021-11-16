<?php

$tab = ['chaise', 'verre', 'chat'];

//  ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','w','x','y','z']
//	[0,1,2,3,4,5,6,7,8,9,0]

$croissant = true;


function bubblesort($tab,$croissant){
	foreach($tab as $k => $v){
		echo $v;
	}
}

bubblesort($tab,$croissant);


?>