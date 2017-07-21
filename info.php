<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>


<div class="">
                    <select id="day_val" onmouseover="//change_date($('#month_val').val(),'day')">
                        
                        <?php
                        $rec_day = 6;
                        $rec_mnth = 7;
                        $rec_tyear = 2017;
                        $sl="";
                        for($n=1;$n<=31;$n++){
                            if($n==$rec_day){
                                $sl="selected";
                            }else{
                                $sl="";
                            }
                            ?><option <?php echo $sl; ?> value="<?php echo $n; ?>"><?php echo $n; ?></option><?php 
                        }
                        ?>
                    </select>
                    
                    <select id="month_val" onchange="change_date(this.value,'month')">
                        <?php
                      $slm="";
                        for($n=1;$n<=12;$n++){
                              if($n==$rec_mnth){
                                  $slm="selected";
                              }else{
                                  $slm="";
                              }
                            ?><option <?php echo $slm; ?> value="<?php echo $n; ?>"><?php echo $n; ?></option><?php 
                        }
                        ?>
                    </select>
                    <select id="year_val" >
                         <?php
                        $sly="";
                        for($n=2013;$n<=2030;$n++){
                            if($n==$rec_tyear){
                                $sly="selected";
                            }else{
                                $sly="";
                            }
                            ?><option <?php echo $sly; ?> value="<?php echo $n; ?>"><?php echo $n; ?></option><?php 
                        }
                        ?>
                    </select>
                    <button onclick="goto_date()">
                        Go
                    </button>
                </div>


            <script type="text/javascript">
            	invalid = 0;

            function change_date(month_val,click_item){

            		console.log(month_val);
            		var selectd_day = $('#day_val').val()-1+1;

            		var month_days_leap = ",31,29,31,30,31,30,31,31,30,31,30,31";
            		var month_days_normal = ",31,28,31,30,31,30,31,31,30,31,30,31";
            		year = $('#year_val').val()-1+1;
            		if(year%4 == 0){
            			var month_days_arr = month_days_leap.split(","); // convers eac elements to array
            		}else{
            			var month_days_arr = month_days_normal.split(",");

            		}
            		
            		max_day = month_days_arr[month_val]-1+1;

            		 $('#day_val').html('');
            			 for(i=1; i<= max_day;i++){
            			 	if(i == selectd_day)
            			  		$('#day_val').append('<option selected>'+i+'</option>');
            			  	else
            			  		$('#day_val').append('<option >'+i+'</option>');


            			 }
            		

            		var check_day = 0;	
            		if(max_day >=  selectd_day){
            			console.log('correct date');
            			if(invalid == 1){
            			 $('#day_val').html('');

            				invalid = 0;

            				for(i=1; i<= max_day;i++) 
            			  		$('#day_val').append('<option >'+i+'</option>');
            			}

            		}else{
            			invalid = 1;
            			 $('#day_val').html('');
            			 console.log('invalid date'+max_day+" <= "+selectd_day);
            			 for(i=1; i<= max_day;i++) 
            			  		$('#day_val').append('<option >'+i+'</option>');
            			 
            		}
            			




            }
            </script>
</body>
</html>