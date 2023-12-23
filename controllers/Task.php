<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class Task extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('Task_model');

     }
    public function index() {
        $this->load->library('session');
        $user_data = $this->session->userdata('user_data');
        $user_id = $user_data['id'];
        $user_role = $user_data['role'];

        // Get tasks based on user role
        $data['user_id']=$user_data['id'];
        $data['username']=$user_data['username'];
        $data['user_designation']=$user_data['role'];

        $data['tasks'] = $this->Task_model->get_tasks_by_user_id($user_id);

        // Load the employee dashboard view
        $this->load->view('employee_dashboard', $data);
    }

    public function add_task() {
        // Assuming form submission and validation
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'deadline' => $this->input->post('deadline'),
            'assigned_to' => $this->input->post('assigned_to'),
            'status' => $this->input->post('status'),
        );

        // Load the Task_model
        $this->load->model('Task_model');

        // Add task
        $this->Task_model->add_task($data);

        // Redirect back to the employee dashboard
        redirect('task/index');
    }

    public function edit_task($task_id) {
        // Load the Task_model
        $this->load->model('Task_model');

        // Get task details
        $data['task'] = $this->Task_model->get_task_by_id($task_id);

        // Load the edit task form
        $this->load->view('employee_edit_task', $data);
    }

    public function update_task($task_id) {
        // Assuming form submission and validation
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'deadline' => $this->input->post('deadline'),
            'assigned_to' => $this->input->post('assigned_to'),
            'status' => $this->input->post('status'),
        );

        // Load the Task_model
        $this->load->model('Task_model');

        // Edit task
        $this->Task_model->edit_task($task_id, $data);

        // Redirect back to the employee dashboard
        redirect('task/index');
    }

    public function delete_task($task_id) {
        // Load the Task_model
        $this->load->model('Task_model');

        // Delete task
        $this->Task_model->delete_task($task_id);

        // Redirect back to the employee dashboard
        redirect('task/index');
    }
}
