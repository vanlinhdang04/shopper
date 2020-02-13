<?php
include('class/sanpham.class.php');
class PhanTrang extends SanPham{
	public $start;		//vi tri bat dau
	public $limit=9;	//so san pham 1 trang
	public $total;		//tong so trang
	public $next;		//button next;
	public $back;		//button back
	public $page_current;	//trang hien tai
	public $page;		//lay page ben file phantrang.php 
	public $dk="";			//dieu kien where
	function __construct($page=null,$dk=""){
		parent::__construct();
		$this->dk=$dk;
		if($page!=null){
			$this->page=$page;
			$this->getPage();	//goi ham getPage()
		}
	}
	function getPage(){
		if($this->page!=1){
			$this->start=($this->page-1)*$this->limit;
			$this->page_current=$this->page;
		}
		else{
			$this->start=$this->page-1;
			$this->page_current=$this->page;
		}
		
	}
	function totalRow(){
		$sql="SELECT * FROM products WHERE Status=1 $this->dk";
		SanPham::select($sql);
		if(SanPham::select_count()>0){
			$this->total=ceil(SanPham::select_count()/$this->limit);
			return($this->total);
		}
	}
	function select_products(){
		$sql="SELECT * FROM products WHERE Status=1 $this->dk LIMIT $this->start,$this->limit";
		
		SanPham::select($sql);
		$str='<div class="row mb-5" id="products">';
		
		//if(!SanPham::fetch_array_table(SanPham::select($sql))) die('k sp');
		while($row=SanPham::fetch_array_table()){
			$str.='<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">';
			$str.='<div class="block-4 text-center border">';
			$str.='<figure class="block-4-image">';
			$str.='<a href="shop-single.php?id='.$row['ProductID'].'"><img src="'.$row["Image"].'" alt="Image placeholder" class="img-fluid"></a>';
			$str.='</figure>';
			$str.='<div class="block-4-text p-4">';
			$str.='<h3><a href="shop-single.php?id='.$row['ProductID'].'">'.$row["ProductName"].'</a></h3>';
			$str.='<p class="mb-0">Finding perfect products</p>';
			$str.='<p class="text-primary font-weight-bold">$'.$row["Price"].'</p>';
			$str.='</div></div></div>';
		}
		$str.='</div>';
		
		return($str);
	}
	function nut_phantrang(){
		$link='<div class="row" data-aos="fade-up">';
		$link.='<div class="col-md-12 text-center">';
		$link.='<div class="site-block-27">';
		$link.='<ul class="phantrang">';
		if($this->page_current>1){
			$this->back=$this->page_current-1;
			$link.='<li page="'.$this->back.'"><a>&lt;</a></li>';
		}
		for($i=1;$i<=$this->totalRow();$i++){
			if($i>=$this->page_current-2 && $i<=$this->page_current+2){
				if($i==$this->page_current){
					$link.='<li class="active" page="'.$i.'"><span>'.$i.'</span></li>';
				}
				else{
					$link.='<li page="'.$i.'"><a>'.$i.'</a></li>';

				}
			}
		}
		if($this->page_current<$this->totalRow()){
			$this->next=$this->page_current+1;
			$link.='<li page="'.$this->next.'"><a>&gt;</a></li>';
		}
		$link.='</ul></div></div></div>';
		return($link);
	}
	public function close(){
		SanPham::close();
	}
}
?>