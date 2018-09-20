<?php
class User 
{
	private $user_id;
	private $user_full_name;
	private $email;

	/**
	 *
	 * construct
	 */
	public function __construct($user_id, $user_full_name, $email)
 	{
 		$this->user_id        = $user_id;
 		$this->user_full_name = $user_full_name;
 		$this->email          = $email;
 	}

 	/**
	 * get user_id
	 * @return array
	 */
 	public function getUID()
 	{
 		return $this->user_id;
 	}

 	/**
	 * get user_full_name
	 * @return array
	 */
 	public function getUserFullname()
 	{
 		return $this->user_full_name;
 	}

 	/**
	 * get email
	 * @return array
	 */
 	public function getEmail()
 	{
 		return $this->email;
 	}
}

?>