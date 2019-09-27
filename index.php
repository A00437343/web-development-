<!DOCTYPE html>
<head>
<title>Paints color visualizer</title>
<meta name="keywords" content="Wall colors Nepal, visualise, experiment, Paints colour ideas Nepal, Wall painting colours Nepal, color Nepal">
<meta name="description" content="">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<meta http-equiv="Access-Control-Allow-Origin" content="*"> 
<link rel="stylesheet" href="jquery-ui.css">
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="print.css" type="text/css" rel="stylesheet" media="print" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
<script src="jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="context_blender.js"></script>  

<script type="text/javascript">
var pixastic_parseonload = true;
</script>
<script src="pixastic.custom.js" type="text/javascript"></script>
</head>
<body onLoad="">
<div class="overlayImage" style="display:none;"></div>

<div id="wrapper">
<!-- --> 
<div id="tabdemo" style="display:none;">
<h3>Add the effects</h3>
    <div class="actiondemo">
            <span style="margin-left: 20px;">Please use these function if required only.</span>
    <div class="demo-options">

        <div class="sliders_all">
        
        
        
        <div>Brightness: <input type="text" id="value-brightness" value="0" class="demo-input" style="width:30px;"/></div>
            <div id='slider-brightness' class='ui-slider' style="width:150px;margin-top:5px;margin-bottom:5px;">
            <div class="ui-slider-handle"></div><div class="ui-slider-range"></div>
            </div>
            
            <div>Contrast: <input type="text" id="value-contrast" value="0" class="demo-input" style="width:30px;"/></div>
            <div id='slider-contrast' class='ui-slider' style="width:150px;margin-top:5px;margin-bottom:5px;">
            <div class="ui-slider-handle"></div><div class="ui-slider-range"></div>
            </div>
            <div>Amount: <input type="text" style="width:30px;" class="demo-input" value="0" id="value-amount"></div>
            <div style="width:150px;margin-top:5px;margin-bottom:5px;" class="ui-slider" id="slider-amount">
                <a style="outline:none;border:none;" href="#"><div class="ui-slider-handle" style="left: 91px;"></div></a><div class="ui-slider-range" ></div>
            </div>
            
            <!--<input type="button" onClick="demo();" value="Apply"/> -->
            <input type="button" onClick="resetDemo();" value="Reset"/>
            <input type="button" onClick="doneDemo();" value="Done"/>
        
        </div>
        
        
        <div class="image_get">
            <img src="BASE_IMAGE_hi.jpg" id="demoimage" style="margin-top:5px;" alt=""/>
        </div>
    </div>
        
</div>
</div>

<!-- -->
        <div class="preview_image_div" style="display:none;">
            <a href="#" class="close_overlay" onClick="javascript:closeOverlay();return false;"><img src="images/close_btn.png"/></a>
            <div id="print_div" class="preview_image">
                <img id='preview_image'/>
            </div>
            <div class="paint_note">
              
            </div>
        </div>
        <div class="noShapeAlert" style="display:none;">
            <a href="#" class="close_overlay" onClick="javascript:closeOverlay();return false;"><img src="images/close_btn.png"/></a>
            <div class="">
                <p>Please draw a shape first.</p>
            </div>
        </div>
        <!--img src="images/ajax_loader.gif" class="ajax_loader"/-->
        <div class="header">
            <!-- <img src="images/header_logo.jpg" /> -->
        </div>
        <div class="overlay">
     
        </div>
        
        
        <div class="container splash_container">
            <div class="splash_section" >
                <div class="splash_copy">
                <!-- <h2 >Color Visualiser</h2> -->
               <!--  <img src="images/Color-Visualiser.png" alt="Color Visualiser" style="padding: 48px;"> -->

                <div class="copy">
                <!-- <img src="images/sub-heading.png" alt="Options" style="margin-left: 65px;"> -->
            
               <div class="button_splash">
               <a href="#" class="sample_images"><img src="images/Sample-Images.png" /></a>
              <input type="file" id="imageLoader" name="imageLoader">
               
                <a href="#" class="trig_loader btn_myimages"><img src="images/My-Images.png" /></a>
                <!--<a href="#" class="sample_images"><img src="images/My-Images.png" /></a>-->
                
               </div>
                </div>  
                          
                 </div>
            </div>
            
        </div>
        
        <!-- ---------- Splash screen------------- -->
        <div class="container screen_two" style="display:none;">
            <div class="left_section">
                
                <div id="categories">
                    <h2 class="blue">Use sample images</h2>
                    <div class="content" id="menu-active">
                    <ul id="interior">
                        <li class="header_cat">Interior</li>
                        <!-- <li><a href="#" class="bathroom">Bathroom</a></li> -->
                        <li><a href="#" class="bedroom">Bedroom</a></li>
                        <li><a href="#">Dinning Room / Kitchen</a></li>
                        <li><a href="#">Living Room</a></li>
                        <!-- <li><a href="#">Other</a></li> -->
                    </ul>
                    <ul id="exterior">
                        <li class="header_cat">Exterior</li>
                        <!-- <li><a href="#">Buildings</a></li> -->
                        <li><a href="#">Bunglows</a></li>
                    </ul>
                    <!--<img src="images/ad_ap.jpg" />  -->   
                    <a href="index.php"  class="btn_back">HOME</a>  
                    <a id="back_screen" class="btn_back pos2">BACK</a>
                    
                    </div>
                </div>
            </div>
            <div class="right_section" >
                
                </div>   
            </div>
        <!-- Container ends here -->
        <!-- Edit container starts here -->
        <div class="edit_container">
            <div class="left_section">
                <div class="color_section">
                <h2 class="blue">Explore color</h2>
                <div class="colors_main_menu">
                    <p id="Pastels & Melange">PASTELS & MELANGE</p>
                    <p id="Accent">ACCENT</p>
                </div>
                <div class="color_menu">
                    <div class="dropdown">
                    <label>Color Collections</label>
                        <select id="color_sel_new">
                    </select>                     
                    </div>
                    <div class="dropdown colorSearch">
                    <label>Search your color</label>
                     <input type="text" id="search-color-input" />
            <input type="button" id="search-json-submit" value="go" />
                    </div>
                    </div>
                    <div id="colour_palette">
                        <div id="colours">
                         <div class="slider">
                            <div class="outer">
                            </div>
                            </div>
                            <div class="buttons">
 <div class="prev"><img src="images/buttons/btn_previous.jpg"></div><div class="next"><img src="images/buttons/btn_next.jpg"></div>
 </div>
                        </div>
                             
                    </div>
                    <div class="used_color_div">
                        <label>Current Color in the image</label>
                        <div class="used_color">
                        </div>
                        
                    </div>
                </div>
            <!--------- Color Section ends here -------->
            </div>
            <div class="right_section">
                <div class="home_btn_section">
                    <a href="#" class="btn_home">Home</a>
                    <a href="#" class="btn_preview" onClick="javascript:previewImage();return false;">Preview</a>
                    <a id="downloadExp" download="AsianpaintsnepalCV.jpg">Export</a>
                </div>
                <div class="edit_tools">
                  <div class="action">
                    <div class="fill btn_fill">
                        <span class="hover">Paint</span>
                        <span class="button">
                        <button id="b4" class="btn" onClick="fill()">
                            <img src="images/buttons/btn_add_color.png" />
                        </button>
                        </span>
                    </div>
                      <div class="btn_undo_div statechange">
                     </div>
                     <div class="btn_redo_div statechange">
                    </div>
                    <div class="btn_brush">
                    </div>
                    
                    
                    <div class="btn_addBezier state" id="create_shape" style="display:none">
                     <span class="hover">Create Shape</span>   
                     <span class="button">                 
                        <button id="b11"  onClick="start()" class="draw_bazier">
                            <img src="images/buttons/btn_draw_bazier.png" alt="Draw Bazier"/>
                        </button>
                        </span>
                    </div>
                  
                    
                    <div class="btn_removeBezier state" id="remove_shape" style="display:none">
                     <span class="hover">Delete Shape</span>            
                       <span class="button">        
                        <button id="b3" onClick="del()" class="remove_bazier">
                            <img src="images/buttons/btn_deletebezier.png" alt="Remove Bazier"/>
                        </button>
                        </span>
                    </div>
                  
                    
                    <div id="grouping">
                        <button id="grp"></button>      <!--<button id="grp">group</button>-->
                        <button id="ungrp"></button>        <!--<button id="ungrp">ungroup</button>-->
                    </div>
   
                    </div>                   
                    <div class="zoom">
                   </div>
                   
                    <a href="#" id="hrefPrint">Print</a>
                    <a id="back2" class="btn_back">BACK</a>
               </div>
                
            <div class="canvas_wrap">
                <canvas id="dummyCanvas" width="665" height="475"></canvas>
                <canvas id="imageCanvas" width="665" height="475"></canvas>
                <canvas id="eraserCanvas" width="665" height="475"></canvas>
                <canvas id="brushCanvas" width="665" height="475"></canvas>
                <canvas id="myCanvas" width="665" height="475"></canvas>
                <canvas id="myCanvas2" width="665" height="475"></canvas>
            </div>
            
            <div class="remove-paint-msg">
            <span id="paint_msg"> Click on the Walls to Remove Paint</span>
            <span id="save_msg"> Saving Image, Please wait. It might take a minute... </span>
            </div>
          <div class="footer_buttons">
                    <!--button id="imageLink" href="data-uri-here" download="myFilename.png" onClick="javascript:saveImg();return false;"><img src="images/buttons/btn_save_img.png" /></button-->
                    <button id="download" target="_blank" ><img src="images/buttons/btn_save_img.png" /></button>
                    <button style="display:none" onClick="javascript:RemovePaint();return false;"><img src="images/buttons/btn_remove_paint.png" /></button>
                    <button onClick="javascript:seeOrgImage();return false;" class="seeOrg_btn"><img src="images/buttons/btn_org_img.png" /></button>
                    <!--<div id='selected_colour_tooltip' style="display:none; z-index:999999"></div>  New Div Nikhil -->
                    
                    <!-- <a href="#" onClick="javascript:bright();return false;">Bright</a> -->
                    
                    
                    
            </div>
            
            </div>
        </div>
    </div>
<script src="main.js?v=2" type="text/javascript" ></script>
  <script src="jquery-1.9.1.js"></script>
<script src="jquery-migrate-1.2.1.js"></script>
<script src="jquery-ui-1.10.3.custom.js"></script>
<script src="external.js" type="text/javascript"></script>
<script src="template.js" type="text/javascript"></script>
<script type="text/javascript" src="jQuery.print.js"></script>
<script>
$(document).ready(function() {
        $('#paint_msg').hide();
        $('#save_msg').hide();
        
          $(document).on("mouseover",".sample_images", function(){          
            $("ul.sample_images_steps").show(); 
            $("ul.my_images_steps").hide();                                         
        });
        
         $(document).on("mouseover",".btn_myimages", function(){
            $("ul.sample_images_steps").hide(); 
            $("ul.my_images_steps").show();                 
        });
        $(document).on("mouseout",".btn_myimages", function(){
            $("ul.sample_images_steps").show(); 
            $("ul.my_images_steps").hide();                              
        });
        $(document).on("click",".sample_images", function(){

            $(".container.splash_container").hide(); 
            $(".container.screen_two").css('display','block'); 
            $("ul li a.bedroom").trigger('click');                  $('.btn_undo_div').hide();          $('.btn_redo_div').hide();          
        });
        $(document).on("click","#back_screen", function(){      
            $(".container.splash_container").show(); 
            $(".container.screen_two").css('display','none');                              
        });
        $(document).on("click",".btn_home", function(){
            $(".container.screen_two").css('display','none');                              
        });
     $("#menu-active a").on("click", function() {
        $("#menu-active a").removeClass("active");
        $(this).addClass("active");
    }); 
});

</script>
</body>
</html>
