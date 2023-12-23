<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class Task_model extends CI_Model {
    public function get_tasks_by_user_id($user_id) {
        return $this->db->get_where('tasks', ['assigned_to' => $user_id])->result_array();
    }

    public function add_task($data) {
        $this->db->insert('tasks', $data);
    }

    public function get_task_by_id($task_id) {
        return $this->db->get_where('tasks', ['id' => $task_id])->row_array();
    }

    public function edit_task($task_id, $data) {
        $this->db->where('id', $task_id);
        $this->db->update('tasks', $data);
    }

    public function delete_task($task_id) {
        $this->db->delete('tasks', ['id' => $task_id]);
    }

    public function update_task_status($task_id, $status) {
        $valid_statuses = ['pending', 'in progress', 'completed'];

        if (in_array($status, $valid_statuses)) {
            $this->db->where('id', $task_id);
            $this->db->update('tasks', ['status' => $status]);
        } else {
            echo "error";
        }
    }
}
