<?
class AppController extends Controller{

	var $debug = true;

	function beforeFilter()
	{

	}
	
	function validate()
	{
		//todo add actual security
		if( !empty($_POST) && $_POST['secret'] != 'secret')
		{
			$this->insecure();
		}		
		#TODO:
			#ensure that user_id and uid match up
		/*
			get model of $this->data
			grab uid and user_id and hit the users table to make sure it ,matches up
		*/
		if(!empty($this->data))
		{
			#list($model) = array_keys($this->data);
			#$user = $this->User->find('first',array("User.uid"=>$this->data[$model]['uid'],'User.id'=>$this->data[$model]['user_id']));
			#if(empty($user)){$this->insecure();}
		#end security code to verify that uid and user_id are the same
	
		}
	}

	function insecure()
	{
		$message = array('error'=>"Invalid Request");
		echo json_encode($message);
		exit;
	}
}
?>
