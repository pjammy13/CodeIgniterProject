<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function create($userInfo)
	{
		$query = "INSERT INTO users (first_name, last_name, email_address, password, user_level, created_at, updated_at)
		VALUES(?, ?, ?, ?, 'user', NOW(), NOW() )";
		$value = array($userInfo['first_name'], $userInfo['last_name'], $userInfo['email'], $userInfo['password']);
		$this->db->query($query, $value);
		$id = $this->db->insert_id();

		$query = "SELECT users.id, users.first_name, users.last_name, users.email_address, users.user_level, descriptions, created_at
		FROM users WHERE id = ?";
		$userInfo = $this->db->query($query, $id)->row_array();
		return $userInfo;
	}

	public function showUsers()
	{
		$query = "SELECT users.id, users.first_name, users.last_name, users.email_address, users.user_level, descriptions, created_at
		FROM users";
		$showUsers = $this->db->query($query)->result_array();
		return $showUsers;
	}

}