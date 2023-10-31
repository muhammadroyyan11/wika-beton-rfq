<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*| --------------------------------------------------------------------------*/
/*| dev : royyan  */
/*| version : V.0.0.2 */
/*| facebook :  */
/*| fanspage :  */
/*| instagram :  */
/*| youtube :  */
/*| --------------------------------------------------------------------------*/
/*| Generate By M-CRUD Generator 31/10/2023 01:18*/
/*| Please DO NOT modify this information*/


class Portfolio extends Backend{

private $title = "Portfolio";


public function __construct()
{
  $config = array(
    'title' => $this->title,
   );
  parent::__construct($config);
  $this->load->model("Portfolio_model","model");
}

function index()
{
  $this->is_allowed('portfolio_list');
  $this->template->set_title($this->title);
  $this->template->view("index");
}

function json()
{
  if ($this->input->is_ajax_request()) {
    if (!is_allowed('portfolio_list')) {
      show_error("Access Permission", 403,'403::Access Not Permission');
      exit();
    }

    $list = $this->model->get_datatables();
    $data = array();
    foreach ($list as $row) {
        $rows = array();
                $rows[] = $row->name_portfolio;
                $rows[] = $row->desc_portfolio;
                $rows[] = is_image($row->image,'','width:auto;height:40px');
                $rows[] = $row->client_name;
                $rows[] = $row->category;
                $rows[] = date("d-m-Y",  strtotime($row->project_date));
        
        $rows[] = '
                  <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="'.url("portfolio/detail/".enc_url($row->id)).'" id="detail" class="btn btn-primary" title="'.cclang("detail").'">
                        <i class="mdi mdi-file"></i>
                      </a>
                      <a href="'.url("portfolio/update/".enc_url($row->id)).'" id="update" class="btn btn-warning" title="'.cclang("update").'">
                        <i class="ti-pencil"></i>
                      </a>
                      <a href="'.url("portfolio/delete/".enc_url($row->id)).'" id="delete" class="btn btn-danger" title="'.cclang("delete").'">
                        <i class="ti-trash"></i>
                      </a>
                    </div>
                 ';

        $data[] = $rows;
    }

    $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->model->count_all(),
                    "recordsFiltered" => $this->model->count_filtered(),
                    "data" => $data,
            );
    //output to json format
    return $this->response($output);
  }
}

function filter()
{
  if(!is_allowed('portfolio_filter'))
  {
    echo "access not permission";
  }else{
    $this->template->view("filter",[],false);
  }
}

function detail($id)
{
  $this->is_allowed('portfolio_detail');
    if ($row = $this->model->find(dec_url($id))) {
    $this->template->set_title("Detail ".$this->title);
    $data = array(
          "name_portfolio" => $row->name_portfolio,
          "desc_portfolio" => $row->desc_portfolio,
          "image" => $row->image,
          "client_name" => $row->client_name,
          "category" => $row->category,
          "project_date" => $row->project_date,
    );
    $this->template->view("view",$data);
  }else{
    $this->error404();
  }
}

function add()
{
  $this->is_allowed('portfolio_add');
  $this->template->set_title(cclang("add")." ".$this->title);
  $data = array('action' => url("portfolio/add_action"),
                  'name_portfolio' => set_value("name_portfolio"),
                  'desc_portfolio' => set_value("desc_portfolio"),
                  'image' => set_value("image"),
                  'client_name' => set_value("client_name"),
                  'category' => set_value("category"),
                  'project_date' => set_value("project_date"),
                  );
  $this->template->view("add",$data);
}

function add_action()
{
  if($this->input->is_ajax_request()){
    if (!is_allowed('portfolio_add')) {
      show_error("Access Permission", 403,'403::Access Not Permission');
      exit();
    }

    $json = array('success' => false);
    $this->form_validation->set_rules("name_portfolio","* Name portfolio","trim|xss_clean|required");
    $this->form_validation->set_rules("desc_portfolio","* Desc portfolio","trim|xss_clean|htmlspecialchars");
    $this->form_validation->set_rules("image","* Image","trim|xss_clean");
    $this->form_validation->set_rules("client_name","* Client name","trim|xss_clean");
    $this->form_validation->set_rules("category","* Category","trim|xss_clean");
    $this->form_validation->set_rules("project_date","* Project date","trim|xss_clean");
    $this->form_validation->set_error_delimiters('<i class="error text-danger" style="font-size:11px">','</i>');

    if ($this->form_validation->run()) {
      $save_data['name_portfolio'] = $this->input->post('name_portfolio',true);
      $save_data['desc_portfolio'] = $this->input->post('desc_portfolio',true);
      $save_data['image'] = $this->imageCopy($this->input->post('image',true),$_POST['file-dir-image']);
      $save_data['client_name'] = $this->input->post('client_name',true);
      $save_data['category'] = $this->input->post('category',true);
      $save_data['project_date'] = date("Y-m-d",  strtotime($this->input->post('project_date', true)));

      $this->model->insert($save_data);

      set_message("success",cclang("notif_save"));
      $json['redirect'] = url("portfolio");
      $json['success'] = true;
    }else {
      foreach ($_POST as $key => $value) {
        $json['alert'][$key] = form_error($key);
      }
    }

    $this->response($json);
  }
}

function update($id)
{
  $this->is_allowed('portfolio_update');
  if ($row = $this->model->find(dec_url($id))) {
    $this->template->set_title(cclang("update")." ".$this->title);
    $data = array('action' => url("portfolio/update_action/$id"),
                  'name_portfolio' => set_value("name_portfolio", $row->name_portfolio),
                  'desc_portfolio' => set_value("desc_portfolio", $row->desc_portfolio),
                  'image' => set_value("image", $row->image),
                  'client_name' => set_value("client_name", $row->client_name),
                  'category' => set_value("category", $row->category),
                  'project_date' => $row->project_date == "" ? "":date("Y-m-d",  strtotime($row->project_date)),
                  );
    $this->template->view("update",$data);
  }else {
    $this->error404();
  }
}

function update_action($id)
{
  if($this->input->is_ajax_request()){
    if (!is_allowed('portfolio_update')) {
      show_error("Access Permission", 403,'403::Access Not Permission');
      exit();
    }

    $json = array('success' => false);
    $this->form_validation->set_rules("name_portfolio","* Name portfolio","trim|xss_clean|required");
    $this->form_validation->set_rules("desc_portfolio","* Desc portfolio","trim|xss_clean|htmlspecialchars");
    $this->form_validation->set_rules("image","* Image","trim|xss_clean");
    $this->form_validation->set_rules("client_name","* Client name","trim|xss_clean");
    $this->form_validation->set_rules("category","* Category","trim|xss_clean");
    $this->form_validation->set_rules("project_date","* Project date","trim|xss_clean");
    $this->form_validation->set_error_delimiters('<i class="error text-danger" style="font-size:11px">','</i>');

    if ($this->form_validation->run()) {
      $save_data['name_portfolio'] = $this->input->post('name_portfolio',true);
      $save_data['desc_portfolio'] = $this->input->post('desc_portfolio',true);
      $save_data['image'] = $this->imageCopy($this->input->post('image',true),$_POST['file-dir-image']);
      $save_data['client_name'] = $this->input->post('client_name',true);
      $save_data['category'] = $this->input->post('category',true);
      $save_data['project_date'] = date("Y-m-d",  strtotime($this->input->post('project_date', true)));

      $save = $this->model->change(dec_url($id), $save_data);

      set_message("success",cclang("notif_update"));

      $json['redirect'] = url("portfolio");
      $json['success'] = true;
    }else {
      foreach ($_POST as $key => $value) {
        $json['alert'][$key] = form_error($key);
      }
    }

    $this->response($json);
  }
}

function delete($id)
{
  if ($this->input->is_ajax_request()) {
    if (!is_allowed('portfolio_delete')) {
      return $this->response([
        'type_msg' => "error",
        'msg' => "do not have permission to access"
      ]);
    }

      $this->model->remove(dec_url($id));
      $json['type_msg'] = "success";
      $json['msg'] = cclang("notif_delete");


    return $this->response($json);
  }
}


}

/* End of file Portfolio.php */
/* Location: ./application/modules/portfolio/controllers/backend/Portfolio.php */
