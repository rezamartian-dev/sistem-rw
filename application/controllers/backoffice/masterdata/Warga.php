<?php
/**
 * Created by PhpStorm.
 * User: annashrulyusuf
 * Date: 2/13/2022
 * Time: 1:25 AM
 */

class Warga  extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$parent=$this->uri->segment(2);
        
		$child=$this->uri->segment(3);
		$v = $parent;
		$this->pathFile = $this->folder . $v . "/warga/";
		$this->indexFile = $this->pathFile. $this->index;
		$this->dataFile = $this->pathFile . 'data';
		$this->tbl  = 'v_warga';
	}

	public function index()
	{
		$data[$this->title] = $this->pathFile;
		$data[$this->page] = $this->indexFile;


		view($this->layout, $data);
	}
	public function getView(){
		$data[$this->title] = $this->pathFile;
		return view($this->indexFile,$data);
	}
	public function read($pages=1){
		$limit                  = $this->limit;
		$uriSegment             = 5;
		$orLike                 = "nama LIKE '%"._get($this->any)."%'";
		$where                  = _get($this->any) && _get($this->any) != null ? $orLike : '';
		$pagin                  = pagin($this->tbl,$this->id,$where,$limit,$uriSegment);
		$row                    = $this->M_crud->read_data($this->tbl,'*',$where,$this->id.' desc',null,$pagin[$this->perPage],$pagin[$this->start]);
		$data[$this->totalRows]      = (int)$pagin[$this->totalRows];
		$data[$this->lastRows]       = (int)$pages * (int)$pagin[$this->perPage];
		$data[$this->currentPages]   = (int)$pages;
		$data[$this->countPerPage]   = count($row);
		$data[$this->no]             = ($pages*$limit)-$limit;
		$data[$this->pages]          = 'warga';
		$data['pagination']= $pagin;
		return view($this->dataFile,['data'=>$data,'row'=>$row]);
	}

	public function simpan()
	{
		$data['nama'] = _post('nama');
		$data['jenis_kelamin'] = _post('jenis_kelamin');
		$data['no_hp'] = 081289798734;
		$data['nik'] = _post('nik');
		$data['no_kk'] = _post('no_kk');
		$data['tempat_lahir'] = _post('tempat_lahir');
		$data['tanggal_lahir'] = date("YYYY-MM-DD",strtotime(_post("tanggal_lahir")));
		$data['alamat'] = "kebon manggu rt 02/04";
		$data['status_perkawinan'] = _post('status_perkawinan');
		$data['id_pekerjaan'] = _post('pekerjaan');
		$data['id_golongan_darah'] = _post('golongan_darah');
		$data['id_status_keluarga'] = _post('status_keluarga');
		$data['id_agama'] = _post('agama');
		$configUpload = upload("warga",_post($this->fileUploaded),$_FILES[$this->fileUpload]);
		if($configUpload!=null) $data['foto']=$configUpload;

		$response[$this->status]=createData($this->tbl,$data,[$this->param=>_post($this->param),$this->id=>_post($this->id)]);
		echo json_encode($response);

//		$exec = createData($this->tbl, $data, [$this->param => _post($this->param), $this->id => _post($this->id)]);
//		$response[$this->status] = $exec;
//
//
//		echo json_encode($response);
	}
	public function hapus()
	{
		echo json_encode([$this->status => deleteData("warga", _post($this->id))]);
	}

	public function edit()
	{
		echo json_encode(editData($this->tbl, _post($this->id)));
	}
	public function check_column()
	{
		$judul = _post('nik');
		$where = "nik='" . $judul . "'";
		_post('param') == 'edit' ? ($where .= " AND nik <>'" . $judul . "'") : null;
		$isExist = $this->M_crud->get_data($this->tbl, 'nik', $where);
		echo $isExist == null ? 'true' : 'false';
	}

	public function getAll(){
		$read_data = $this->M_crud->read_data($this->tbl,'id,name as nama',null,"FIELD(name,'None') DESC");
		echo json_encode($read_data);
	}
}