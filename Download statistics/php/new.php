<?php
/**
 * Created by PhpStorm.
 * User: arkin
 * Date: 5/18/15
 * Time: 7:37 PM
 */

$day = $_POST["name_value"];

$arr = array(
    '乌鲁木齐' => array(
        'Web' => 10,
        'App' => 20

    ),
    '昌吉' => array(
        'Web' => 130,
        'App' => 842

    ),
    '奎屯' => array(
        'Web' => 10,
        'App' => 29

    ),
    '克州' => array(
        'Web' => 130,
        'App' => 42

    ),
    '阿克苏' => array(
        'Web' => 10,
        'App' => 202

    ),
    '伊犁' => array(
        'Web' => 130,
        'App' => 55
    )
);

$arr3=array();
foreach($arr as $key => $val){
    $location=array('location'=>$key);
    $val=array_merge($val,$location);
    $arr3[$key]=$val;
}
echo(json_encode($arr3));

//echo("<pre>");
//print_r($arr3);