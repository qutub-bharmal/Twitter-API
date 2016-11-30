<?php
namespace AppBundle\Controller;
use AppBundle\Entity\TblUsers;
use AppBundle\Entity\TblTimeline;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\Tools\Pagination\Paginator;

class DefaultController extends Controller{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request){
		$users = $arr_timeline = array();
		$search = '';
		$maxPages1 = $thisPage1 = $sel_user = 0;
		$page = $request->get('page', 1);
		$page1 = $request->get('pageTimeline', 1);
		//echo $request->get('search', false);exit;
		if($request->get('search', false)){
			$search = $request->get('search', false);
			$sel_user = $request->get('sel_user', 0);
			/*$repository = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
			$query = $repository->createQueryBuilder('t')
				->where('t.tText LIKE :k')
				->setParameter('k', '%'.$request->get('search', false).'%')
				->orderBy('t.id', 'DESC')
				->getQuery();
			$result = $query->getResult();*/
			$result = $this->getAllTimelines($page1,$search,$sel_user);
			$totalPostsReturned1 = $result->getIterator()->count();
			$totalPosts1 = $result->count();
			$iterator1 = $result->getIterator();
			//echo '<pre>';print_r($iterator1);exit;
			$limit1 = $this->getParameter('num_timelineSearch');
			$maxPages1 = ceil($result->count() / $limit1);
			$thisPage1 = $page1;
			$arr_timeline = array();
			$i = 0;
			foreach ($result as $value) {
				//echo '<pre>';print_r($value);exit;
				$arr_timeline[$i]['Tid'] = $value['tId'];
				$arr_timeline[$i]['Tdate'] = $value['tDate'];
				$arr_timeline[$i]['Ttext'] = $value['tText'];
				$arr_timeline[$i]['TUserIdentifier'] = $value['tUserIdentifier'];
				$arr_timeline[$i]['TUserDisplayname'] = $value['tUserDisplayname'];
				$arr_timeline[$i]['TUserProfileurl'] = $value['tUserProfileurl'];
				$arr_timeline[$i]['TUserPhotourl'] = $value['tUserPhotourl'];

				/*
				$arr_timeline[$i]['Tid'] = $value->getTId();
				$arr_timeline[$i]['Tdate'] = $value->getTdate();
				$arr_timeline[$i]['Ttext'] = $value->getTText();
				$arr_timeline[$i]['TUserIdentifier'] = $value->getTUserIdentifier();
				$arr_timeline[$i]['TUserDisplayname'] = $value->getTUserDisplayname();
				$arr_timeline[$i]['TUserProfileurl'] = $value->getTUserProfileurl();
				$arr_timeline[$i]['TUserPhotourl'] = $value->getTUserPhotourl();
				*/
				$i++;
			}
		}
		/*$repository = $this->getDoctrine()->getRepository('AppBundle:TblUsers');
		$query = $repository->createQueryBuilder('t')
			->where('t.id > :id')
			->setParameter('id', '0')
			->orderBy('t.id', 'ASC')
			->getQuery();
		$users = $query->getResult();
		return $this->render('default/index.html.twig', array('users'=>$users,'result'=>$arr_timeline,'search'=>$search));*/
		$users = $this->getAllUsers($page);
		$totalPostsReturned = $users->getIterator()->count();
		$totalPosts = $users->count();
		$iterator = $users->getIterator();
		//echo '<pre>';print_r($iterator);exit;
		$limit = $this->getParameter('num_users');
		$maxPages = ceil($users->count() / $limit);
		$thisPage = $page;
		return $this->render('default/index.html.twig',array('users'=>$iterator,'result'=>$arr_timeline,'search'=>$search,'maxPages'=>$maxPages,'thisPage'=>$thisPage,'maxPages1'=>$maxPages1,'thisPage1'=>$thisPage1,'sel_user'=>$sel_user)
			);

	}
	public function addUserAction($name){
		if($name){
			$arr_timeline = $userArr = array();
			$repository = $this->getDoctrine()->getRepository('AppBundle:TblUsers');
			$users = $repository->findByDisplayname($name);
			//echo count($users);
			//exit;
			if(count($users)>0){

				$user = $users[0];
				$uId = $user->getId();

				$repository_newTimeline = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
				$q = $repository_newTimeline->createQueryBuilder('t')->select('t.tId')->where('t.userId = :k')->setMaxResults(1)
						->setParameter('k', $uId)->orderBy('t.tId', 'DESC')->getQuery();
				$r = $q->getOneOrNullResult();
				$last_t_id = $r['tId'];
				//echo '<pre>';print_r($r);exit;
				$twitter = $this->get('endroid.twitter');
				//https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=NimeshVagadiya&count=2&since_id=801723075997757440
				$num_timelineCount = $this->getParameter('num_timelineCount');
				$user_timeline = $twitter->query('statuses/user_timeline', 'GET', 'json',array("screen_name"=>$name,"count"=>$num_timelineCount,"since_id"=>$last_t_id));
				$org_res_timeline = $user_timeline->getContent();
				$user_tweets = json_decode($user_timeline->getContent());
				//echo '<pre>';print_r($user_tweets);exit;
				//$arr_timeline = array();
				$i = 0;
				foreach ($user_tweets as $value) {
					/*$arr_timeline[$i]['UserId'] = $uId;
					$arr_timeline[$i]['Tid'] = $value->id_str;
					$arr_timeline[$i]['Tdate'] = $value->created_at;
					$arr_timeline[$i]['Ttext'] = $value->text;
					$arr_timeline[$i]['TUserIdentifier'] = $value->user->id_str;
					$arr_timeline[$i]['TUserDisplayname'] = $value->user->screen_name;
					$arr_timeline[$i]['TUserProfileurl'] = $value->user->url;
					$arr_timeline[$i]['TUserPhotourl'] = $value->user->profile_image_url;*/

					$objTimeline = new TblTimeline();
					$objTimeline->setUserId($uId);
					$objTimeline->setTid($value->id_str);
					$objTimeline->setTdate($value->created_at);
					$objTimeline->setTtext($value->text);
					$objTimeline->setTUserIdentifier($value->user->id_str);
					$objTimeline->setTUserDisplayname($value->user->screen_name);
					$objTimeline->setTUserProfileurl($value->user->url);
					$objTimeline->setTUserPhotourl($value->user->profile_image_url);
					$objTimeline->setResponse($org_res_timeline);
					$em1 = $this->getDoctrine()->getManager();
					$em1->persist($objTimeline);
					$em1->flush();
					$i++;
				}

				//echo $user->getAddress();exit;
				$userArr['name'] = $user->getFirstName();
				$userArr['screen_name'] = $user->getDisplayName();
				$userArr['description'] = $user->getDescription();
				$userArr['location'] = $user->getAddress();
				$userArr['profile_image_url'] = $user->getPhotourl();
				// /print_r($userArr);exit;
				$repositoryTimeline = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
				//$timeline = $repositoryTimeline->findByUserId($uId);
				$timeline = $repositoryTimeline->findBy(array('userId'=> $uId), array('tId' => 'DESC'));
				//echo '<pre>';print_r($timeline);exit;
				$i = 0;
				foreach ($timeline as $value) {
					$arr_timeline[$i]['Tid'] = $value->getTId();
					$arr_timeline[$i]['Tdate'] = $value->getTdate();
					$arr_timeline[$i]['Ttext'] = $value->getTText();
					$arr_timeline[$i]['TUserIdentifier'] = $value->getTUserIdentifier();
					$arr_timeline[$i]['TUserDisplayname'] = $value->getTUserDisplayname();
					$arr_timeline[$i]['TUserProfileurl'] = $value->getTUserProfileurl();
					$arr_timeline[$i]['TUserPhotourl'] = $value->getTUserPhotourl();
					$i++;
				}
			}else{
				$twitter = $this->get('endroid.twitter');
				/*$tweets = $twitter->getTimeline(array(
						'count' => 5
				));*/
				//https://api.twitter.com/1.1/users/lookup.json?screen_name=twitterapi,twitter
				//https://api.twitter.com/1.1/users/search.json?q=Twitter%20API&page=1&count=3
				//$response = $twitter->query('users/search', 'GET', 'json',array('q'=>'@'.$name,'page'=>1,'count'=>20));
				$response = $twitter->query('users/lookup', 'GET', 'json',array('screen_name'=>$name));
				if($response->getContent()){
					$org_res_user = $response->getContent();
					$tweets = json_decode($response->getContent());
					$userArr = $user = $tweets[0];
					$objUser = new TblUsers();
					$objUser->setIdentifier($user->id_str);
					$objUser->setWebSiteURL($user->url);
					$objUser->setPhotoURL($user->profile_image_url);
					$objUser->setDisplayName($user->screen_name);
					$objUser->setDescription($user->description);
					$objUser->setFirstName($user->name);
					$objUser->setLanguage($user->lang);
					$objUser->setAddress($user->location);
					$objUser->setResponse($org_res_user);
					$objUser->setFollowersCount($user->followers_count);
					$objUser->setFriendsCount($user->friends_count);
					$objUser->setListedCount($user->listed_count);

					$em = $this->getDoctrine()->getManager();
					$em->persist($objUser);
					$em->flush();
					$uId = $objUser->getId();

					$twitter = $this->get('endroid.twitter');
					//https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=twitterapi&count=2

					$num_timelineCount = $this->getParameter('num_timelineCount');

					$user_timeline = $twitter->query('statuses/user_timeline', 'GET', 'json',array("screen_name"=>$name,"count"=>$num_timelineCount));
					$org_res_timeline = $user_timeline->getContent();
					$user_tweets = json_decode($user_timeline->getContent());
					//echo '<pre>';print_r($user_tweets);exit;
					$arr_timeline = array();
					$i = 0;
					foreach ($user_tweets as $value) {
						$arr_timeline[$i]['UserId'] = $uId;
						$arr_timeline[$i]['Tid'] = $value->id_str;
						$arr_timeline[$i]['Tdate'] = $value->created_at;
						$arr_timeline[$i]['Ttext'] = $value->text;
						$arr_timeline[$i]['TUserIdentifier'] = $value->user->id_str;
						$arr_timeline[$i]['TUserDisplayname'] = $value->user->screen_name;
						$arr_timeline[$i]['TUserProfileurl'] = $value->user->url;
						$arr_timeline[$i]['TUserPhotourl'] = $value->user->profile_image_url;

						$objTimeline = new TblTimeline();
						$objTimeline->setUserId($uId);
						$objTimeline->setTid($value->id_str);
						$objTimeline->setTdate($value->created_at);
						$objTimeline->setTtext($value->text);
						$objTimeline->setTUserIdentifier($value->user->id_str);
						$objTimeline->setTUserDisplayname($value->user->screen_name);
						$objTimeline->setTUserProfileurl($value->user->url);
						$objTimeline->setTUserPhotourl($value->user->profile_image_url);
						$objTimeline->setResponse($org_res_timeline);
						$em1 = $this->getDoctrine()->getManager();
						$em1->persist($objTimeline);
						$em1->flush();
						$i++;
					}
				}
			}
			//return $this->render('default/view.html.twig', array('user'=>$user,'timeline'=>$arr_timeline ));
			return $this->render('default/view.html.twig', array('user'=>$userArr,'timeline'=>$arr_timeline ));
			exit;
		}
	}
	public function getAllUsers($currentPage = 1){
		$repository = $this->getDoctrine()->getRepository('AppBundle:TblUsers');
		$query = $repository->createQueryBuilder('t')
			->where('t.id > :id')
			->setParameter('id', '0')
			->orderBy('t.id', 'ASC')
			->getQuery();
		$num_users = $this->getParameter('num_users');
		$paginator = $this->paginate($query, $currentPage, $num_users);
		return $paginator;
	}
	public function getAllTimelines($currentPage = 1,$search = '',$sel_user = 0){
		/*$repository = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
		$query = $repository->createQueryBuilder('t')
			->addSelect("MATCH_AGAINST (t.tText, :searchterm 'IN NATURAL MODE') as score")
			->add('where', 'MATCH_AGAINST(t.tText, :searchterm) > 0.8')
			->setParameter('searchterm', $search)
			->orderBy('score', 'DESC')
			->getQuery()
			->getResult();*/
		$repository = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
		$query = $repository->createQueryBuilder('t')
			->select('t.id,t.userId,t.tId,t.tDate,t.tText,t.tUserIdentifier,t.tUserDisplayname,t.tUserProfileurl,t.tUserPhotourl,t.response')
			->addSelect("MATCH_AGAINST (t.tText, :searchterm 'IN BOOLEAN MODE') as score")
			->add('where', 'MATCH_AGAINST(t.tText, :searchterm) > 0.8');
		if($sel_user > 0){
			$query->andWhere('t.userId = '.$sel_user);
		}
			$query->setParameter('searchterm', $search)
			->orderBy('score', 'DESC')
			->getQuery();
			//->getResult();
		//echo '<pre>';print_r($query);exit;
		/*$repository = $this->getDoctrine()->getRepository('AppBundle:TblTimeline');
		$query = $repository->createQueryBuilder('t')->select('t.id,t.userId,t.tId,t.tDate,t.tText,t.tUserIdentifier,t.tUserDisplayname,t.tUserProfileurl,t.tUserPhotourl,t.response')->where('t.tText LIKE :k');
		if($sel_user > 0){
			$query->andWhere('t.userId = '.$sel_user);
		}
		$query->setParameter('k', '%'.$search.'%')->orderBy('t.id', 'DESC')->getQuery();*/
		$num_timelineSearch = $this->getParameter('num_timelineSearch');
		$paginator = $this->paginate($query, $currentPage, $num_timelineSearch);
		//echo '<pre>';print_r($paginator);exit;
		return $paginator;
	}
	public function paginate($dql, $page = 1, $limit = 3){
		$paginator = new Paginator($dql);
		$paginator->setUseOutputWalkers(false);
		$paginator->getQuery()
			->setFirstResult($limit * ($page - 1)) // Offset
			->setMaxResults($limit); // Limit
		return $paginator;
	}
}
