function task3();{
for($i=0;$i<51;$i++)
{$arr[$i] = mt_rand(1,100);
}

for($i=0;$i<51;$i++)
{echo $arr[$i];
 echo "<br>";}

$foo = fopen ('file.csv', 'w');
	foreach ($arr as $key) {
	fputcsv($foo, $key, ';', '"');
	}
fclose ($foo);

if (($foo = fopen("file.csv", "r")) !== FALSE) {
	while (($data = fgetcsv($foo, 0, ";")) !== FALSE) {
		$arr[] = $data;
	}
	fclose($foo);
	print_r($arr);
}
}
