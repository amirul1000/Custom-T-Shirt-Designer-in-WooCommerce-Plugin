<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<script language="javascript" src="<?=PLUGIN_URL_WOOCUSDESIGN?>/assets/js/fabric.js"></script>
<link rel="stylesheet" href="<?=PLUGIN_URL_WOOCUSDESIGN?>/assets/css/style.css">
<style>
/* Preview */
.preview{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
   position:relative;
}
.preview img{
   display: none;
}

.preview_icon{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
   position:relative;
}
.preview_icon img{
   display: none;
}

/* Button */
.button{
   border: 0px;
   background-color: deepskyblue;
   color: white;
   margin-left: 10px;
}

.hide1{
	display:none;
}
.show1{
	display:block;
}
</style>
<button id="custom_btn"> Customize </button>
<div id="custom_area" class="row" style="display: none;">
  <div class="col-md-4">
   <b>Picture Category</b>
       <div id="product_cat" class="row">
           <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/products/Blue-1.png" class="background" style="width:50px;height:50px;">
           <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/products/Green-1.png" class="background" style="width:50px;height:50px;">
           <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/products/grey-1.png" class="background" style="width:50px;height:50px;">
           <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/products/pink1.png" class="background" style="width:50px;height:50px;">
       </div>
       
       <div class="row" style="padding:10px;">
          
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class='row preview'   style="text-align: center;">
                        <img src="" id="img" width="100" height="100" class="background">
                    </div>
                    <div class="row"   style="text-align: center;">
                        <input type="file" id="file" name="file" />
                        <input type="button" class="button" value="Upload" id="but_upload">
                    </div>
                </form>
            
       </div>
       
  </div>
  <div class="col-md-4">
    <b>Text & Icons</b>
      <div class="row">
     
      <div class="form-group">
       <label for="">Enter Text</label>
       <input type="text" name="front_text"  id="front_text"  class="form-control"   value="" onKeyUp="set_text();">
       </div>
       
       <div class="form-group">
       <div name="front_text_display"  id="front_text_display" class="droptxt form-control" style="height:100px;" draggable="true"></div>
       </div>
       <div class="form-group">
          <button class="button clickMe" onClick="textDesign()">Show Text Design</button>
       </div>
          <div class="form-group hide sh">
      <label for="">Font size</label>
      <input type="number" name="font-size" id="font-size" value="14" class="form-control"  onBlur="set_text()">
      </div>
          <div class="form-group hide sh">
          <label for="">Font family</label>
          <select id="font-family"  class="form-control"  onChange="set_text();">
            <option style="font-family: arial" value="arial" selected>Arial</option>
            <option style="font-family: HelveticaNeue" value="HelveticaNeue" >Helvetica Neue</option>
            <option style="font-family: myriad pro" value="myriad pro">Myriad Pro</option>
            <option style="font-family: delicious" value="delicious">Delicious</option>
            <option style="font-family: verdana" value="verdana">Verdana</option>
            <option style="font-family: georgia" value="georgia">Georgia</option>
            <option style="font-family: courier" value="courier">Courier</option>
            <option style="font-family: comic sans ms" value="comic sans ms">Comic Sans MS</option>
            <option style="font-family: impaqct" value="impaqct">Impact</option>
            <option style="font-family: monaco" value="monaco">Monaco</option>
            <option style="font-family: optima" value="optima">Optima</option>
            <option style="font-family: hoefler text" value="hoefler text">Hoefler Text</option>
            <option style="font-family: plaster" value="plaster">Plaster</option>
            <option style="font-family: engagement" value="engagement">Engagement</option>
          </select>
          </div>
          <div class="form-group hide sh">
               <label for="">Font Style</label>
               <select id="font_style"  class="form-control"  onChange="set_text();">
                <option value="normal" selected>normal</option>
                <option value="italic">italic</option>
                <option value="oblique">oblique</option>
              </select>
          </div>
          <div class="form-group hide sh">
           <label for="">Text Color</label>
           <input type="color" id="color_picker"  class="form-control"  onChange="set_text();">
           </div>
          <div class="form-group hide sh">
              <label for="">Text Shadow</label>
              <select id="text_shadow"  class="form-control"  onChange="set_text();">
                <option value="" selected>None</option>
                <option value="white">White</option>
                <option value="red">Red</option>
                <option  value="green" >Green</option>
                <option  value="blue">Blue</option>
                <option  value="yellow">Yellow</option>
              </select>
          </div>
          <div class="form-group hide sh">
              <label for="">Rotation</label>
              <select id="text_rotation"  class="form-control"  onChange="set_text();">
                <option value="0" selected>0</option>
                <option value="45">45</option>
                <option value="90">90</option>
                <option  value="135" >135</option>
                <option  value="180">180</option>
              </select>
          </div>
       
      </div>
      <div class="form-group">
        <div class="row">
        <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/icons/butterfly-purple-icon.png"  class="drop" style="width:50px;height:50px;">
        <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/icons/Heart-Inside-icon.png"  class="drop" style="width:50px;height:50px;">
        <img src="<?=PLUGIN_URL_WOOCUSDESIGN?>/pictures/icons/paris-eiffel-icon.png"  class="drop" style="width:50px;height:50px;">
       </div>
       <div class="row"  style="padding:10px;">
            <form method="post" action="" enctype="multipart/form-data" id="myform_icon">
                <div class="row preview_icon" style="text-align: center;">
                    <img src="" id="img_icon" width="100" height="100" class="drop">
                </div>
                <div class="row"  style="text-align: center;">
                    <input type="file" id="file_icon" name="file_icon" />
                    <input type="button" class="button" value="Upload" id="but_upload_icon">
                </div>
            </form>
       </div>
     </div>
  </div>
  <div class="col-md-4">
   <b>Canvas</b>
    <canvas id="canvas_front"
        style="border:1px solid #000000"> 
    </canvas> 
    <div class="row">
        <a href="javascript:void();" onClick="clearActiveObject()" class="button">Delete</a>
        <a href="javascript:void();" onClick="saveImg();" class="button">Add to Cart</a>
    </div>
  </div>
</div>
<?php
 global $product;
 $product_id = $product->get_id();
?>
<script language="javascript">
   $("#custom_btn").click(function(){
	  $("#custom_area").toggle();
	});
	
	var canvas = new fabric.Canvas('canvas_front');
	canvas.setDimensions({width:400, height:400});
	
	
	$(".background").on('click',function(e){
		   var url = this.src;
		   fabric.Image.fromURL(url, function(img) {
			   img.scaleToWidth(canvas.width);
			   img.scaleToHeight(canvas.height);
			   canvas.setBackgroundImage(img,canvas.renderAll.bind(canvas));
		   	   canvas.requestRenderAll();
		});
		  
		
	});
	
	$("#front_text").on('keyup',function(e){
	   
	});
	
	function set_text(){
		text = $("#front_text").val();
	    font_family = $("#font-family").val();
		font_size = $("#font-size").val();
		color = $("#color_picker").val();
		text_shadow = $("#text_shadow").val();
		text_rotation = $("#text_rotation").val();
		font_style = $("#font_style").val();
		
		front_text_display = document.getElementById("front_text_display");
		front_text_display.style["font-family"] = font_family;
		front_text_display.style["font-style"] = font_style;
		front_text_display.style["font-size"] = font_size+"px";
		front_text_display.style["color"] = color;
		front_text_display.style["transform"] = 'rotate('+text_rotation+'deg)';
		
		if(text_shadow!=''){
			front_text_display.style["text-shadow"] = "1px 1px "+text_shadow;
		}
		else{
			front_text_display.style["text-shadow"] = "none";
		}
		$("#front_text_display").html(text);	
		
	}
	
	
	$(".drop").on('dragend',function(e){
		
		var element = document.getElementById("canvas_front");
		var rect = element.getBoundingClientRect();
		console.log(canvas);
		// the position related to the viewport
		 x = rect.x;
		 y = rect.y;

		x1=e.clientX;
		y1=e.clientY;
		
		x2 = x1-x;
		y2 = y1-y;
		
		
		 fabric.Image.fromURL(this.src, function(Img) {
			 
			 let width =  Img.width;
			 let height =  Img.height;
			 
			 scale = 30/width;
			 
			
			 
		 var img1 = Img.set({ left: x2, top: y2}).scale(scale);
		 canvas.add(img1); 
		});
	});
	
	$(".droptxt").on('dragend',function(e){
		text = this.innerHTML;
		var element = document.getElementById("canvas_front");
		var rect = element.getBoundingClientRect();
		
		 x = rect.x;
		 y = rect.y;

		x1=e.clientX;
		y1=e.clientY;
		
		x2 = x1-x;
		y2 = y1-y;
		
		
		font_family = $("#font-family").val();
		font_size = $("#font-size").val();
		color = $("#color_picker").val();
		text_shadow = $("#text_shadow").val();
		text_rotation = $("#text_rotation").val();
		font_style = $("#font_style").val();
		if(text_shadow!=''){
			text_shadow = "1px 1px "+text_shadow;
		}
		else{
			text_shadow = "none";
		}
		txtStyles = {
					top: x2,
					left: y2,
					fontFamily: font_family,
					fontStyle: font_style,
					fontSize: font_size, 
					fill:color,
					shadow:text_shadow,
					angle: text_rotation 
				  }
				  
		  console.log(txtStyles);
		  		  
		canvas.add(new fabric.Text(text, txtStyles));
	});
	
	function clearActiveObject(){
		canvas.getActiveObjects().forEach((obj) => {
		  canvas.remove(obj)
		});
		canvas.discardActiveObject().renderAll();
	}
   function saveImg(){    
	  str = canvas.toDataURL('png');
	  
	   $.ajax({
			type: "POST", 
			url: "<?=plugin_dir_url( __FILE__ ) . '../save_picture.php'?>",
			data: { 								
						img_content   :str,
				  },
		success: function (data, text) {				
				console.log(data);
				var obj = JSON.parse(data);
			
			  if(obj.status=='success'){
				  url = obj.url;
				  add_to_cart(url);
			  }
		  },
		  error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(thrownError);
			  }
		});
	 
	  
	  
	}
	
	function add_to_cart(url){
		 $.ajax({
			type: "POST", 
			url: "<?=plugin_dir_url( __FILE__ ) . '../ajax_add_cart.php'?>",
			data: { 								
						url   :url,
						product_id:<?=$product_id?>,
						quantity:1
				  },
		success: function (data, text) {
			  var obj = JSON.parse(data);			
			  if(obj.status=='success'){
				  
				   window.location = '<?=site_url()?>/index.php/cart';
				 
			  }
		  },
		  error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(thrownError);
			  }
		});
	}
	
	//upload picture
	$(document).ready(function(){
    $("#but_upload").click(function(){
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);
        $.ajax({
            url: "<?=plugin_dir_url( __FILE__ ) . '../upload_product.php'?>",
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img").attr("src",response); 
                    $(".preview img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
});
    //upload icon
	$(document).ready(function(){
    $("#but_upload_icon").click(function(){
        var fd = new FormData();
        var files = $('#file_icon')[0].files[0];
        fd.append('file',files);
        $.ajax({
            url: "<?=plugin_dir_url( __FILE__ ) . '../upload_icon.php'?>",
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img_icon").attr("src",response); 
                    $(".preview_icon img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
});

function textDesign(){
   	if($(".sh").hasClass('show')){
			$(".sh").removeClass('show');
			$(".sh").addClass('hide');
			$('.clickMe').html('<i class="fa fa-plus"></i>Show Text Design');
		}
		else if($(".sh").hasClass('hide')){
			$(".sh").removeClass('hide');
			$(".sh").addClass('show');
			$('.clickMe').html('<i class="fa fa-minus"></i>Hide Text Design ');
		} 
}
</script>
	