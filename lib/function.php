<?php
function antiInj($str){
    return str_replace(['"', "'"], "", $str);
}