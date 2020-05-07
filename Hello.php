<?php
$score=80;
switch ($score){
    case 90<=$score:
        echo("优秀");
        break;
    case 80<=$score:
        echo("良");
        break;
    case 70<=$score:
        echo("中");
        break;
    case 60<=$score:
        echo("及格");
        break;
    default:
        echo("不及格");
}