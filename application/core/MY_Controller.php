<?php
/**
 * Created by PhpStorm.
 * User: annashrulyusuf
 * Date: 4/8/2022
 * Time: 12:35 AM
 */

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->output->set_header('Cache-Control: no-store, no-cache, max-age=0, post-check=0, pre-check=0');
        $this->sessionId= $this->session->id;
        if($this->sessionId==null||$this->sessionId==""){redirect("backoffice/auth/logout");}

        $this->limit    = 10;
        $this->segment  = 5;

        $this->url              = base_url();
        $this->assets           = "assets/backoffice/bo/";
        $this->noImage          = base_url().'assets/backoffice/no_image.png';
        $this->avatar           = base_url()."assets/backoffice/bo/assets/img/avatars/1.png";
        $this->layout           = "backoffice/layout/index";
        $this->folder           = "backoffice/pages/";


        $this->buttonForm       = "backoffice/component/buttonForm";
        $this->generalHeader    = "backoffice/component/generalHeader";
        $this->statusForm       = "backoffice/component/statusForm";
        $this->paginHtml        = "backoffice/component/paginHtml";
        $this->detailModal        = "backoffice/component/detail_modal";
        $this->tahunAjaran        = "backoffice/component/tahunAjaran";
        $this->semester        = "backoffice/component/semester";


        $this->section      = "section";
        $this->title        = "title";
        $this->page         = "page";
        $this->index        = "index";
        $this->list         = "list";
        $this->totalRows    = "totalRows";
        $this->lastRows     = "lastRows";
        $this->currentPages = "currentPages";
        $this->countPerPage = "countPerPage";
        $this->no           = "no";
        $this->pages        = "pages";
        $this->perPage      = "perPage";
        $this->start        = "start";
        $this->id           = "id";
        $this->idKategori  = "id_kategori";
        $this->any          = "any";
        $this->nama         = "nama";
        $this->judul        = "judul";
        $this->deskripsi    = "deskripsi";
        $this->kategori     = "kategori";
        $this->level     = "level";
        $this->namaKategori = "nama_kategori";
        $this->jenis        = "jenis";
        $this->gambar       = "image";
        $this->status       = "status";
        $this->tags         = "tags";
        $this->slug         = "slug";
        $this->daftar       = "daftar";
        $this->link         = "link";
        $this->param        = "param";
        $this->fileUploaded = "file_uploaded";
        $this->fileUpload   = "file_upload";
        $this->msgNoData = "Data tidak tersedia";
    }
}
