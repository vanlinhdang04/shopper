$(document).ready(function(){
	function checkcategory(){
		$('input[id="t-shirt-cate"]').prop("checked",true);
		$('input[id="shirts-cate"]').prop("checked",true);
		$('input[id="coats-cate"]').prop("checked",true);
		$('input[id="jeans-cate"]').prop("checked",true);
		$('input[id="shorts-cate"]').prop("checked",true);
	}
	if($('input[id="all-cate"]').is(':checked')){
		checkcategory();
	}
	$('input[id="all-cate"]').click(function(){
		$('input[id="all-cate"]:checked').each(function(){
			$('input[id="t-shirt-cate"]').prop("checked",true);
			$('input[id="shirts-cate"]').prop("checked",true);
			$('input[id="coats-cate"]').prop("checked",true);
			$('input[id="jeans-cate"]').prop("checked",true);
			$('input[id="shorts-cate"]').prop("checked",true);
			
		});
		if(!$('input[id="all-cate"]').is(':checked')){
		$('input[id="t-shirt-cate"]').prop("checked",false);
		$('input[id="shirts-cate"]').prop("checked",false);
		$('input[id="coats-cate"]').prop("checked",false);
		$('input[id="jeans-cate"]').prop("checked",false);
		$('input[id="shorts-cate"]').prop("checked",false);
	}
		
	});
	$('input[id="shirts-cate"],input[id="t-shirt-cate"],input[id="shorts-cate"],input[id="coats-cate"],input[id="jeans-cate"]').click(function(){
		$('input[id="all-cate"]').prop("checked",false);
		if($('input[id="shirts-cate"]').is(':checked') && $('input[id="tshirt-cate"]').is(':checked') && $('input[id="jeans-cate"]').is(':checked') && $('input[id="coats-cate"]').is(':checked') && $('input[id="shorts-cate"]').is(':checked')){
			$('input[id="all-cate"]').prop("checked",true);
		}
	});
	
	function checkcolor(){
		$('input[id="white-color"]').prop("checked",true);
		$('input[id="black-color"]').prop("checked",true);
		$('input[id="blue-color"]').prop("checked",true);
		$('input[id="brown-color"]').prop("checked",true);
		$('input[id="gray-color"]').prop("checked",true);
	}
	if($('input[id="all-color"]').is(':checked')){
		checkcolor();
	}
	$('input[id="all-color"]').click(function(){
		$('input[id="all-color"]:checked').each(function(){
			$('input[id="white-color"]').prop("checked",true);
			$('input[id="black-color"]').prop("checked",true);
			$('input[id="blue-color"]').prop("checked",true);
			$('input[id="brown-color"]').prop("checked",true);
			$('input[id="gray-color"]').prop("checked",true);
			
		});
		if(!$('input[id="all-color"]').is(':checked')){
		$('input[id="white-color"]').prop("checked",false);
			$('input[id="black-color"]').prop("checked",false);
			$('input[id="blue-color"]').prop("checked",false);
			$('input[id="brown-color"]').prop("checked",false);
			$('input[id="gray-color"]').prop("checked",false);
	}
	});
	$('input[id="white-color"],input[id="black-color"],input[id="blue-color"],input[id="brown-color"],input[id="gray-color"]').click(function(){
		$('input[id="all-color"]').prop("checked",false);
		if($('input[id="white-color"]').is(':checked') && $('input[id="black-color"]').is(':checked') && $('input[id="blue-color"]').is(':checked') && $('input[id="brown-color"]').is(':checked') && $('input[id="gray-color"]').is(':checked')){
			$('input[id="all-color"]').prop("checked",true);
		}
	});
});
