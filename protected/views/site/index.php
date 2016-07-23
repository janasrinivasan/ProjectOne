
            <script>
                $(document).ready(function () {

                    $('#searching').hide();
                    $('#search_box').hide();
                    $('#search-bredcrumps').show();
                    $('.commedy-tap-content').hide();
                    $('.comments-tap-content').hide();
                    $('.image-tap-content').hide();


                    $('#commedy-tap').click(function () {

                        $('#dd').hide(250);
                        $('.comments-tap-content').hide();
                        $('.image-tap-content').hide();
                        $('.commedy-tap-content').show();
                    });
                    
                    
                      $('#comments-tap').click(function () {
                        $('#dd').hide(250);
                        $('.commedy-tap-content').hide();
                        $('.image-tap-content').hide();
                        $('.comments-tap-content').show();
                    });
                    
                    
                     $('#image-tap').click(function () {
                        $('#dd').hide(250);
                        $('.commedy-tap-content').hide();
                        $('.comments-tap-content').hide();
                        $('.image-tap-content').show();
                    });
 

                    $('#search').click(function () {

                        $('.container').hide();
                        $('#search').hide();
                        $('#searching').show();
                        $('#search_box').show();
                        $('#search-bredcrumps').show();

                    });


                    $('#text-search').on('change', function () {

                         //var text_search = $('#text-search').val();
                         //  alert(text_search);
                    });

                });

            </script>

    </head>

    <body>

        <div class="head" style="background-color: brown;height: 40px;color:white;">

            <div class="row"> 

                <div class="col-xs-1" style="margin-left: 15px;">Title</div>

                <div class="col-xs-8" id="search_box">
                    
                    
                    <form method="post" action="image_load.php" id="form-search">
                        
                    <input type="text" name="text-search" id="text-search" class="form-control">
                    <input type="submit" name="search-find" value="Search" class="btn btn-default pull-right" id="search-find" style="margin-top: -37px;margin-right: -70px;">
                        
                    </form>
                        
                </div>

                <div class="col-xs-3 pull-right" id="search">Search</div>

            </div>

        </div>
 
        
        <div id="searching" style="text-align: center;margin-top: 50px;">Searching Process..</div>

        <div class="container" style="background-color: #F0F0F0;height: 300px;">

            <div class="fav-bar" style="border-bottom: 1px;border-bottom-color: black;border-bottom-style: solid;height: 47px;background-color: white;margin-left: -10px;">

                <ul class="nav nav-pills">
                    <li class="active"><a href="#" id="commedy-tap">Comedy</a></li>
                    <li><a href="#" id="comments-tap">Comments</a></li>
                    <li><a href="#" id="image-tap">Images</a></li>
                </ul>
            </div>

            <br/>

           

            <!---   Tap Contents ---->
            <div class="commedy-tap-content">Commedy</div>
            <div class="comments-tap-content">comments-tap open</div>
            
            
            
            <!-- Image Tap Contents--->
            <div class="image-tap-content">
              
                <?php
                    $image_base_url =  Yii::app()->request->baseUrl."/images/";
                    foreach ($image as $image_details)
                    {   
                 ?>
                
                <div class="row">
                    <div class="col-sm-4"><a onclick="javascript:images(<?php echo $image_details['image_name']; ?>);"><img class="img img-responsive" src="<?php echo $image_base_url.$image_details['image_name']; ?>"/></a></div>
                </div>
                 <?php
                    }
                ?>
            
					
            
            <div class="panel panel-default" style="height:35px;">
    	       <div class="panel-body" style="margin-top:-8px;">Image Related I</div>
	   </div>

	
        </div>

        <!---Searching Image Load place--->
        <div class="container" id="search-bredcrumps"> 

        </div>


        <script> 
            
            
            $(document).ready(function () {
                
                function images($images)
                {
                      alert("Working");
                }
 
                
            });
            </script>