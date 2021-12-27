<?php
namespace app\Service;
use App\Models\Cpu;
use App\Models\Firm;
use App\Models\GraphicCard;
use App\Models\Laptop;
use App\Models\Reviews;

include_once ('curl_query.php');
include_once ('simple_html_dom.php');
class ParserService{

        public function parser()
        {
            $page = ParserService::curlGetPage('https://www.citilink.ru/catalog/noutbuki--igrovyie-noutbuki/?f=discount.any%2Crating.any%2C14630_3ips%2C10969_3&pf=discount.any%2Crating.any%2C10969_3&pc=igrovyie-noutbuki&p=1');
            $html = str_get_html($page);



            $laptops= $html->find('[class=ProductCardHorizontal__header-block]');


            for ($i=0; $i < 5; $i++) {
                $laptopsparser[$i]= $laptops[$i];
            }
            foreach ($laptopsparser as $laptop) {
                $name = $laptop->find('a', 0);
                $arr = $name->title . '<br>';

                $arrfinal = explode(", ", $arr);
                $namelaptop = $arrfinal[0];
                echo $namelaptop;
                $arrname = explode(" ", $namelaptop);
                $firm = $arrname[1];
                echo $firm;


                $diagonal = $arrfinal[1];
                echo $diagonal;
                $ips = $arrfinal[2];
                echo $ips;
                $cpu = $arrfinal[3];
                $split = explode(" ", $cpu);
                $frequency = $split[count($split) - 1];

                $cpu = explode(" " . $frequency, $cpu);

                echo $cpu[0];
                echo $frequency;

                $ram = $arrfinal[4];
                echo $ram;
                $ssd = $arrfinal[5];
                echo $ssd;
                $gpu = $arrfinal[6];
                echo $gpu;
                $os = $arrfinal[7];
                echo $os;
                $model = $arrfinal[8];
                echo $model;
                $a = $laptop->find('a', 0);
                echo $a->href . '<br>';

                $href = "https://www.citilink.ru" . $a->href . "otzyvy/";
                echo $href;

                $pageDetails = ParserService::curlGetPage($href);
                $htmlDetails = str_get_html($pageDetails);

                $laptopsPrice = $htmlDetails->find('[class=ProductHeader__price-default_current-price js--ProductHeader__price-default_current-price]', 0)->plaintext;
                $laptopsPrice = str_replace(" ", '', $laptopsPrice);
                echo $laptopsPrice;
                $laptopsBonuses = $htmlDetails->find('[class=ProductHeader__bonus-block]', 0)->plaintext;
                $laptopsBonuses = str_replace("  ", '', $laptopsBonuses);
                echo $laptopsBonuses;
                $laptopsRating = $htmlDetails->find('[class=IconWithCount__count js--IconWithCount__count]', 0)->plaintext;
                echo $laptopsRating;

                $laptopsPict = $htmlDetails->find('[class=PreviewList__image]', 0)->getAttribute('src');

                echo $laptopsPict;

                $firmif = Firm::where('name', $firm)->get();

                if (count($firmif) == 0) {
                    $firmtable = Firm::create(
                        [
                            'name' => $firm,
                            'description' => ''
                        ]
                    );
                    $firmtable->save;
                    $id_firm=$firmtable->id_firm;

                } else {
                    $id_firm=$firmif[0]->id_firm ;
                }
                $cpusif = Cpu::where('name', $cpu[0])->get();

                if (count($cpusif) == 0) {
                    $cputable = Cpu::create(
                        [
                            'name' => $cpu[0],
                            'countCores' => null,
                            'frequency'=>$frequency
                        ]
                    );
                    $cputable->save;
                    $id_cpu=$cputable->id_cpu;

                } else {
                    $id_cpu=$cpusif[0]->id_cpu ;
                }
                $gcif = GraphicCard::where('name', $gpu)->get();

                if (count($gcif) == 0) {
                    $gputable = GraphicCard::create(
                        [
                            'name' => $gpu
                        ]
                    );
                    $gputable->save;
                    $id_gpu=$gputable->id_gc;

                } else {
                    $id_gpu=$gcif[0]->id_gc ;
                }
                $laptopif = Laptop::where('name', $namelaptop)->get();

                if (count($laptopif) == 0) {
                    $laptoptable = Laptop::create(
                        [
                            'name' => $namelaptop,
                            'href' =>$href,
                            'price'=>$laptopsPrice,
                            'bonuses'=>$laptopsBonuses,
                            'rating'=>$laptopsRating,
                            'SSD'=>$ssd,
                            'RAM'=>$ram,
                            'image'=>$laptopsPict,
                            'code'=>'',
                            'id_firm'=>$id_firm,
                            'id_cpu'=>$id_cpu,
                            'id_gc'=>$id_gpu
                        ]
                    );
                    $laptoptable->save;
                    $id_laptop=$laptoptable->id;

                } else {
                    $id_laptop=$laptopif[0]->id ;
                }


                $reviews = $htmlDetails->find('[class=js--Opinion Opinion]');
                for ($i=0; $i < 2; $i++) {
                    $reviewsparser[$i]= $reviews[$i];
                }
                foreach ($reviewsparser as $review) {

                    $rate = $review->find('[class=UserAvatar__number]', 0)->plaintext;
                    echo $rate;

                    $comment = $review->find('[class=OpinionText__text]', 0)->plaintext;

                    $comment = str_replace("<br>", ' ', $comment);
                    echo $comment;

                    $reviewif = Reviews::where('review', $comment)->get();


                    if (count($reviewif) == 0) {
                        $reviewtable= Reviews::create(
                            [
                                'rating'=>$rate,
                                'review'=>$comment,
                                'id_laptop'=>$id_laptop
                            ]
                        );
                        $reviewtable->save;
                        $id_review=$reviewtable->id;
                    } else {
                        $id_review=$reviewif[0]->id ;
                    }
                }
            }

        }

    function curlGetPage($url, $referer = 'https://google.com/')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $referer);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

}
