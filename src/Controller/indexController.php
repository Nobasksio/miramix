<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 27/04/2019
 * Time: 19:29
 */

namespace App\Controller;

use App\Form\SubscriberType;
use App\Repository\ActionRepository;
use App\Repository\CategoryRepository;
use App\Repository\NewsRepository;
use App\Repository\PlainpageRepository;
use App\Repository\PlusRepository;
use App\Repository\RenterRepository;
use App\Repository\SliderRepository;
use App\Utilit\Utilit;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends BaseController
{
    /**
     * @Route("/", name="index_t")
     */
    public function index(NewsRepository $newsRepository,
                          ActionRepository $actionRepository,
                          RenterRepository $renterRepository,
                          PlusRepository $plusRepository,
                          SliderRepository $sliderRepository)
    {

        return $this->render('twork.html.twig',[
        ]);
    }

    /**
     * @Route("/main", name="index")
     */
    public function index2(NewsRepository $newsRepository,
                          ActionRepository $actionRepository,
                          RenterRepository $renterRepository,
                          PlusRepository $plusRepository,
                         PlainpageRepository $pr,
                           CategoryRepository $categoryRepository,
                          SliderRepository $sliderRepository)
    {
        $news = $newsRepository->findAll(['active'=>true],['date'=> 'Desc']);
        $actions = $actionRepository->findby(['active'=>true],['sort'=> 'ASC']);
        $renters = $renterRepository->findby(['active'=>true],['sort'=> 'ASC']);
        $sliders = $sliderRepository->findby(['active'=>true],['sort'=> 'ASC']);
        $categories = $categoryRepository->findBy([],['sort'=> 'ASC']);

        $plainpages = $pr->findBy(['active'=>true]);

        $plain_pages_array = [];

        foreach ($plainpages as $plain_page){
            $plain_pages_array[] = array(
                'name_page'=>$plain_page->getName(),
                'link_name'=>$plain_page->getLinkName(),
                'text_page'=>$plain_page->getText()
            );
        }


        $form = $this->createForm(SubscriberType::class);

        $array_actions = $this->make_array($actions);
        $array_renters = $this->make_array($renters);
        $array_sliders = $this->make_array($sliders);
        $array_news = $this->make_array($news);
        $categories = $this->make_array($categories);

        $array_news_and_actions = [];

        foreach ($array_news as $key=>$news){
            $array_news_and_actions[] = $news;

            if ((isset($array_actions[$key]))){
                $array_news_and_actions[] = $array_actions[$key];
            }
        }

        $place = $this->getParameter('myseting_place');
        $work_time = $this->getWorktime();
        //$about = file_get_contents($place.'/about.txt');

        $app_state = json_encode([
            'renters' => $array_renters,
            'sliders' => $array_sliders,
            'news' => $array_news_and_actions,
            'news_real'=> $array_news,
            'actions' => $array_actions,
            'work_time' =>$work_time,
            'departments' => $categories,
            'plainpages' => $plain_pages_array
        ], JSON_HEX_APOS | JSON_HEX_QUOT);



        return $this->render('index.html.twig',[
            'app_state'=>$app_state]);
    }
    /**
     * @Route("/test", name="index_test")
     */
    public function index_test(NewsRepository $newsRepository,
                          ActionRepository $actionRepository,
                          RenterRepository $renterRepository,
                          PlusRepository $plusRepository,
                          SliderRepository $sliderRepository)
    {
        $news = $newsRepository->findAll(['active'=>true],['date'=> 'Desc']);
        $actions = $actionRepository->findby(['active'=>true],['sort'=> 'ASC']);
        $renters = $renterRepository->findby(['active'=>true],['sort'=> 'ASC']);
        $sliders = $sliderRepository->findby(['active'=>true],['sort'=> 'ASC']);
        $form = $this->createForm(SubscriberType::class);

        $place = $this->getParameter('myseting_place');
        $work_time = $this->getWorktime();
        $about = file_get_contents($place.'/about.txt');
        return $this->render('index.html.twig',['news'=>$news,
            'actions'=>$actions,
            'renters' => $renters,
            'about' => $about,
            'form' => $form->createView(),
            'pluses' => $plusRepository->findby(['active'=>true],['sort'=> 'ASC']),
            'work_time'=>$work_time,
            'sliders'=>$sliders]);
    }


    /**
     * @Route("/our_map2", name="our_map")
     */
    public function ourMap(RenterRepository $rr)
    {   $work_time = $this->getWorktime();

        $renters = $rr->findby(['active'=>true],['sort'=> 'ASC']);

        $array_renters = $this->make_array($renters);

        $app_state = json_encode([
            'work_time' =>$work_time,
            'renters' =>$array_renters
        ],JSON_HEX_APOS | JSON_HEX_QUOT);
        return $this->render('our_map.html.twig',['app_state'=>$app_state]);
    }

    /**
     * @Route("/our_map2/{floor}/{renter_id}", name="show_on_map")
     */
    public function showOnMap($floor,$renter_id,RenterRepository $rr)
    {
        $work_time = $this->getWorktime();
        $renter = $rr->find($renter_id);
        return $this->render('our_map.html.twig',[
            'renter' => $renter,
            'work_time'=>$work_time,
            'floor' => $floor
            ]);
    }
    /**
     * @Route("/path2", name="path")
     */
    public function path()
    {
        $place = $this->getParameter('myseting_place');
        $file_content = file_get_contents($place.'/contact.txt');
        $arr_str = explode("\n", $file_content);
        $contact = [];
        foreach ($arr_str as $item){
            $item_arr = explode(":", $item);
            $contact[$item_arr[0]] = $item_arr[1];
        }

        $work_time = $this->getWorktime();

        $app_state = json_encode([
            'work_time'=>$work_time,
            'path_show'=>true,
        ]);

        return $this->render('path.html.twig', [
            'press_phone'=>$contact['phone'],
            'press_name'=>$contact['name'],
            'press_mail'=>$contact['mail'],
            'work_time'=>$work_time,
            'app_state' =>$app_state

        ]);
    }

}