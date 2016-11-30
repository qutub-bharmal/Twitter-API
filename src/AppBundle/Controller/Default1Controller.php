<?php

namespace AppBundle\Controller;

//use AppBundle\Entity\TblUsers;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Default1Controller extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
		echo "<pre>";
		if($request->get('search', false)){
			$repository = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
			$query = $repository->createQueryBuilder('t')
				->where('t.tText > :k')
				->setParameter('k', $request->get('search', false))
				->orderBy('t.id', 'DESC')
				->getQuery();
			
			$result = $query->getResult();
			print_R($result);
		}
		exit;
		
		$repository = $this->getDoctrine()->getRepository('AppBundle:TblUsers');
		$query = $repository->createQueryBuilder('t')
			->where('t.id > :id')
			->setParameter('id', '0')
			->orderBy('t.id', 'ASC')
			->getQuery();
			
			$users = $query->getResult();
			 return $this->render('default/index.html.twig', array('users'=>$users));
    }

	public function addUserAction($name){
		if($name){
            echo "<pre>";
            $twitter = $this->get('endroid.twitter');
            // Retrieve the user's timeline
            /*$tweets = $twitter->getTimeline(array(
                    'count' => 5
            ));*/
            $response = $twitter->query('users/search', 'GET', 'json',array('q'=>$name,'page'=>1,'count'=>20));
            //print_R($response);exit;
            // Or retrieve the timeline using the generic query method
            //$response = $twitter->query('statuses/user_timeline', 'GET', 'json');
            if($response->getContent()){
                $org_res_user = $response->getContent();
                $tweets = json_decode($response->getContent());
                print_R($tweets[0]);
                $user = $tweets[0];
                //echo $user->id_str;
                $twitter = $this->get('endroid.twitter');
                $user_timeline = $twitter->query('statuses/user_timeline', 'GET', 'json',array("screen_name"=>$name));
                $org_res_timeline = $user_timeline->getContent();
                $user_tweets = json_decode($user_timeline->getContent());
                print_R($user_tweets);
            }

            exit;
            /*$objUser = new TblUsers();
            $objUser->setIdentifier($user->id_str);
            $objUser->setWebSiteURL($user->url);
            $objUser->setPhotoURL($user->profile_image_url);
            $objUser->setDisplayName($user->screen_name);
            $objUser->setDescription($user->description);
            $objUser->setFirstName($user->name);
            $objUser->setLanguage($user->lang);
            $objUser->setAddress($user->location);
            $objUser->setResponse($org_res_user);
            //print_r($objUser);exit;
            $em = $this->getDoctrine()->getManager();
            //print_r($em);
            $em->persist($objUser);
            //print_r($em);
            $em->flush();*/
            //print_r($em);
            //echo $objUser->getId();
            //exit;
            //return new Response('Saved new user with id '.$product->getId());
			//return $this->render('default/view.html.twig', array('user'=>array()));
            exit;
        }
	}
}
