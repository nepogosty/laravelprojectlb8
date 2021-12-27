<?php
include_once ('App\Service\curl_query.php');
include_once ('App\Service\simple_html_dom.php');

$html=curl_get('https://www.mvideo.ru/noutbuki-planshety-komputery-8/noutbuki-118/f/category=igrovye-noutbuki-3607?reff=menu_main');
$dom= str_get_html();
file_put_contents('1',$html);
$cources=$dom->find('.product-title__text');
foreach ($cources as $cource){
    $a=$cource->find('a',0);
    echo $a->href. '<br>';
}
@dd($cources);
