<?php

function task1()
{
    $xml = simplexml_load_file('data1.xml');
    $handle = fopen('data1.xml', "r");
    $contents = fread($handle, filesize('data1.xml'));
    echo $contents;
    fclose($handle);
}

task2($list){

$list = array (
    array('Susanna', 'Robert', 'Ksenia', 'Roman'),
    array('2013', '2016', '1986' , '1987'),
    array('"aaa"', '"bbb"'=>'8','12','911');

$jsStr = json_encode($list);// преобразовываем в json
file_put_contents('output.json', $jsStr);// записываем в файл


$random = rand(0,1);//если 0 добавляем
if ($random == 0){
    $jsRout = 'output.json';
    $jsFile = file_get_contents($jsRout);
    $jsArr = json_decode($jsFile, true);
    $arrayBonus = [
        'Family' => 'Older',
        'Sister' => 'Sibling',
    ];
    $jsArr['New Array'] = $arrayBonus;
    $jsStr2 = json_encode($jsArr);
    file_put_contents('output2.json', $jsStr2);
} elseif ($rand == 1) {
    $jsRout = 'output.json';
    $jsFile = file_get_contents($jsRout);
    $jsArr = json_decode($jsFile, true);
    $arrayBonus = [
        'Family' => 'Older',
        'Sister' => 'blue',
    ];
    $jsArr['Nintendo Switch'] = $arrayBonus;
    $jsStr2 = json_encode($jsArr);
    file_put_contents('output.json', $jsStr2);
}

$jsR1 = 'output.json';//Открываем сравниваем
$jsR2 = 'output2.json';
$jsFile1 = file_get_contents($jsR1);
$jsFile2 = file_get_contents($jsR2);
$jsArray1 = json_decode($jsFile1, true);
$jsArray2 = json_decode($jsFile2, true);

if (count($jsArray1) > count($jsArray2)) {
    echo 'Первый массив больше второго <br>';
} elseif (count($jsArray2) > count($jsArray1)) {
    echo 'Второй массив больше первого <br>';
} elseif (count($jsArray1) === count($jsArray2)) {
    echo rec($jsArray2, $jsArray1);
}

}
function task3(){
    for($i=0; $i < 51; $i++)
    {$arr[$i] = mt_rand(1,100);
    }

    for($i=0; $i<51 ; $i++)
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
function task4()
{
    
    $link = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
    $json = file_get_contents($link);
    
    $data = json_decode($json, true);
    echo '<br>';
    
    $title = find_value($data, 'title');
    if (!empty($title)) {
        echo 'title = ' . $title . '<br>';
    }
    
    $pageid = find_value($data, 'pageid');
    if (!empty($pageid)) {
        echo 'pageid = ' . $pageid . '<br>';
    }
}


/**
 * Created by PhpStorm.
 * User: 1
 * Date: 12.03.2018
 * Time: 22:13
 */
