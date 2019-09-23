<?php

namespace App\Controller;

use App\Entity\Action;
use App\Entity\News;
use App\Form\ActionRedactType;
use App\Form\ActionType;
use App\Form\NewsRedactType;
use App\Form\NewsType;
use App\Form\SubscriberType;
use App\Repository\ActionRepository;
use App\Repository\NewsRepository;
use App\Repository\RenterRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends BaseController
{
    /**
     * @Route("/news2", name="news")
     */
    public function index(NewsRepository $newsRepository,ActionRepository $actionRepository)
    {
//        $work_time = $this->getWorktime();
        $news = $newsRepository->findby(['active'=>true],['date'=> 'Desc']);
        $actions = $actionRepository->findby(['active'=>true],['sort'=> 'ASC']);
//        $form = $this->createForm(SubscriberType::class);
//        return $this->render('news.html.twig', ['news'=>$news,
//            'form'=>$form->createView(),
//            'work_time' => $work_time,
//            'actions'=>$actions]);

        $array_news = $this->make_array($news);
        $array_actions = $this->make_array($actions);

        $app_state = json_encode(['news' => $array_news,
            'actions' => $array_actions
        ]);
        return $this->render('news.html.twig',[
            'app_state'=>$app_state]);
    }

    /**
     * @Route("/news/test", name="news_item_test")
     */
    public function newsItemTest(NewsRepository $newsRepository)
    {

        return $this->render('new.html.twig'
           );
    }

    /**
     * @Route("/news2/{id}", name="news_item")
     */
    public function newsItem($id, NewsRepository $newsRepository)
    {
//        $work_time = $this->getWorktime();

        $new = $newsRepository->findoneBy(['active'=>true,'id'=>$id]);
        $news = $newsRepository->findby(['active'=>true],['date'=> 'Desc']);

        $new = $new->getArrayParam();
        $news = $this->make_array($news);


        $app_state = json_encode(['item_new' => $new,
            'entity_items' => $news
        ]);
        return $this->render('new.html.twig',[
            'app_state'=>$app_state]);

    }
    /**
     * @Route("/action2/{id}", name="action_item")
     */
    public function actionItem($id,ActionRepository $actionRepository)
    {
//        $work_time = $this->getWorktime();

        $action = $actionRepository->findoneBy(['active'=>true,'id'=>$id]);
        $actions = $actionRepository->findby(['active'=>true],['sort'=> 'ASC']);

        $action = $action->getArrayParam();
        $actions = $this->make_array($actions);

        $app_state = json_encode(['item_new' => $action,
            'entity_items' => $actions
        ]);
        return $this->render('action.html.twig',[
            'app_state'=>$app_state]);
    }


    /**
     * @Route("admin/action_list", name="action_list_admin")
     */
    public function adminActionList(ActionRepository $actionRepository)
    {
        $actions = $actionRepository->findby([],['sort'=> 'ASC']);
        return $this->render('admin/actions/actions_list.html.twig',
            [
                'actions'=>$actions
            ]);
    }
    /**
     * @Route("admin/news_list", name="news_list_admin")
     */
    public function adminNewsList(NewsRepository $newsRepository)
    {
        $news = $newsRepository->findby([],['date'=> 'Desc']);;
        return $this->render('admin/news/news_list.html.twig',
            [
                'news'=>$news
            ]);
    }
    /**
 * @Route("admin/news/new", name="create_news")
 */
    public function createNews(Request $request, ObjectManager $manager)
    {
        $news = new News();
        $form = $this->createForm(
            NewsType::class,
            $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $image = $form->get('image')->getData();
            $imageName = $this->generateUniqueFileName() . '.' . $image->guessExtension();

            $image->move(
                $this->getParameter('upload_file'),
                $imageName
            );
            $news->setImage($imageName);


            $manager->persist($news);
            $manager->flush();

            return $this->redirect('/admin/news_list');
        }

        return $this->render('admin/news/new_news.html.twig',[
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("admin/news/redact/{id}", name="redact_news")
     */
    public function redactNews(News $news, Request $request, ObjectManager $manager)
    {

        $form = $this->createForm(
            NewsRedactType::class,
            $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){


            $image = $form->get('image_upload')->getData();

            if (isset($image) and $image!=null) {

                $imageName = $this->generateUniqueFileName() . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('upload_file'),
                    $imageName
                );
                $news->setImage($imageName);

            }

            $manager->persist($news);
            $manager->flush();

            return $this->redirect('/admin/news_list');
        }

        return $this->render('admin/news/redact_news.html.twig',[
            'form' => $form->createView(),
            'news' => $news
        ]);

    }

    /**
     * @Route("admin/action/new", name="create_action")
     */
    public function createAction(Request $request, ObjectManager $manager,RenterRepository $renterRepository)
    {

        $action = new Action();
        $form = $this->createForm(
            ActionType::class,
            $action);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){


            $image = $form->get('image')->getData();
            $imageName = $this->generateUniqueFileName() . '.' . $image->guessExtension();

            $image->move(
                $this->getParameter('upload_file'),
                $imageName
            );
            $action->setImage($imageName);


            $renters = $form->get('renter_id')->getData();

            $action->addRenter($renters);


            $manager->persist($action);
            $manager->flush();

            return $this->redirect('/admin/action_list');
        }
        $renters = $renterRepository->findAll();
        return $this->render('admin/actions/new_action.html.twig',[
            'form' => $form->createView(),

        ]);

    }
    /**
     * @Route("admin/action/redact/{id}", name="redact_action")
     */
    public function redactAction(Action $action, Request $request, ObjectManager $manager,RenterRepository $renterRepository)
    {


        $form = $this->createForm(
            ActionRedactType::class,
            $action);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){


            $image = $form->get('image_upload')->getData();

            if (isset($image) and $image!=null){

                $previewName = $this->generateUniqueFileName() . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('upload_file'),
                    $previewName
                );
                $action->setImage($previewName);
            }

            $renters = $form->get('renter_id')->getData();

            $action->addRenter($renters);


            $manager->persist($action);
            $manager->flush();

            return $this->redirect('/admin/action_list');
        }
        $renters = $renterRepository->findAll();
        return $this->render('admin/actions/redact_action.html.twig',[
            'form' => $form->createView(),
            'action' => $action
        ]);

    }
    /**
 * @Route("admin/news/delet/{id}", name="news_delete")
 */
    public function deleteNews(News $news)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($news);
        $entityManager->flush();

        return $this->redirectToRoute('news_list_admin');
    }
    /**
     * @Route("admin/action/delet/{id}", name="action_delete")
     */
    public function deleteAction(Action $action)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($action);
        $entityManager->flush();

        return $this->redirectToRoute('action_list_admin');
    }
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }


}
