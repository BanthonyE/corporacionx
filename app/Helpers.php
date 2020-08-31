<?php
function setAction($url){
    return request()->routeIs($url)?' active':'';
}
