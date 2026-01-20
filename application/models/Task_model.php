<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model
{
    public function get_all_tasks($user_id)
    {
        return $this->db
            ->where('user_id', $user_id)
            ->order_by('id', 'DESC')
            ->get('tasks')
            ->result();
    }

    public function add_task($data)
    {
        return $this->db->insert('tasks', $data);
    }

     public function get_task_by_id($task_id, $user_id)
    {
        return $this->db
            ->where('id', $task_id)
            ->where('user_id', $user_id)
            ->get('tasks')
            ->row();
    }

    public function update_task($task_id, $user_id, $data)
    {
        return $this->db
            ->where('id', $task_id)
            ->where('user_id', $user_id)
            ->update('tasks', $data);
    }

    public function delete_task($task_id, $user_id)
    {
        return $this->db
            ->where('id', $task_id)
            ->where('user_id', $user_id)
            ->delete('tasks');
    }
}
