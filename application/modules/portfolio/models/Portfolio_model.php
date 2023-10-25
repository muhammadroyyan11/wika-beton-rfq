<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*| --------------------------------------------------------------------------*/
/*| dev : royyan  */
/*| version : V.0.0.2 */
/*| facebook :  */
/*| fanspage :  */
/*| instagram :  */
/*| youtube :  */
/*| --------------------------------------------------------------------------*/
/*| Generate By M-CRUD Generator 26/10/2023 00:00*/
/*| Please DO NOT modify this information*/


class Portfolio_model extends MY_Model{

  private $table        = "portfolio";
  private $primary_key  = "id";
  private $column_order = array('name_portfolio', 'desc_portfolio', 'image', 'client_name', 'category', 'project_date');
  private $order        = array('portfolio.id'=>"DESC");
  private $select       = "portfolio.id,portfolio.name_portfolio,portfolio.desc_portfolio,portfolio.image,portfolio.client_name,portfolio.category,portfolio.project_date";

public function __construct()
	{
		$config = array(
      'table' 	      => $this->table,
			'primary_key' 	=> $this->primary_key,
		 	'select' 	      => $this->select,
      'column_order' 	=> $this->column_order,
      'order' 	      => $this->order,
		 );

		parent::__construct($config);
	}

  private function _get_datatables_query()
    {
      $this->db->select($this->select);
      $this->db->from($this->table);

    if($this->input->post("name_portfolio"))
        {
          $this->db->like("portfolio.name_portfolio", $this->input->post("name_portfolio"));
        }

    if($this->input->post("desc_portfolio"))
        {
          $this->db->like("portfolio.desc_portfolio", $this->input->post("desc_portfolio"));
        }

    if($this->input->post("image"))
        {
          $this->db->like("portfolio.image", $this->input->post("image"));
        }

    if($this->input->post("client_name"))
        {
          $this->db->like("portfolio.client_name", $this->input->post("client_name"));
        }

    if($this->input->post("category"))
        {
          $this->db->like("portfolio.category", $this->input->post("category"));
        }

    if($this->input->post("project_date"))
        {
          $this->db->like("portfolio.project_date", date('Y-m-d',strtotime($this->input->post("project_date"))));
        }

      if(isset($_POST['order'])) // here order processing
       {
           $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
       }
       else if(isset($this->order))
       {
           $order = $this->order;
           $this->db->order_by(key($order), $order[key($order)]);
       }

    }


    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
      $this->db->select($this->select);
      $this->db->from("$this->table");
      return $this->db->count_all_results();
    }



}

/* End of file Portfolio_model.php */
/* Location: ./application/modules/portfolio/models/Portfolio_model.php */
