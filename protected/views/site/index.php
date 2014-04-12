<?php $_REQUEST['signed_request']; ?>
<?php

$ss = $date = $debates['expire_date'];

$todays_date = date("Y-m-d");

/*echo strtotime($date);

echo '<br />';

echo strtotime($todays_date);*/

$vote = 0;

if(strtotime($date) >= strtotime($todays_date))
	{
	 
	 $vote = 1;
	 
	}

$date = explode("-",$date);

$month = $date[1];

if($month == 1)
	{
	 
	 $month = 'january';
	 
	}
	 elseif($month == '2')
	 	{
		 
		 $date[1] = 'February';
		 
		}
		 elseif($month == '3')
			{
			 
			 $date[1] = 'March';
			 
			}
			 elseif($month == '4')
				{
				 
				 $date[1] = 'April';
				 
				}
				 elseif($month == '5')
					{
					 
					 $date[1] = 'May';
					 
					}
					 elseif($month == '6')
						{
						 
						 $date[1] = 'June';
						 
						}
						 elseif($month == '7')
							{
							 
							 $date[1] = 'July';
							 
							}
							 elseif($month == '8')
								{
								 
								 $date[1] = 'August';
								 
								}
								 elseif($month == '9')
									{
									 
									 $date[1] = 'September';
									 
									}
									 elseif($month == '10')
										{
										 
										 $date[1] = 'October';
										 
										}
										 elseif($month == '11')
											{
											 
											 $date[1] = 'November';
											 
											}
											 elseif($month == '12')
												{
												 
												 $date[1] = 'December';
												 
												}
		 $date = $date[2]." ".$date[1]." ".$date[0]." 00:00:00";

?>
<?php
 
   $sharingMsgObj = new SharingMessages(0);
 
   $sharingMsg_2 = $sharingMsgObj->FB_MANUAL_POPUP_BOX_GLOBAL($this->user->name);
   
   $imgAbs_2 = $this->canvasPage."/admin/uploads/".$debates['image'];
   
?>
<script type="text/javascript">
  
 var exp_date = '<?php echo $date; ?>';
  var favour = <?php echo $favour_vote; ?>;
  var against = <?php echo $against_vote; ?>;
  
  if(favour == 0&&against == 0)
  	{
	 
	  favour = 1;
	  against = 1;
	 
	}
	
  
 
  
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Debate'],
      ['against', against],
      ['Favour',  favour]
    ]);


    var options = {
      colors:['#9a0000','#40b240'],
      legend:{position: 'top'},
      chartArea:{left:25,top:0,width:"135px"},
	  backgroundColor:{fill:'#f0f0f0'},
	  tooltip:{trigger:'none'},
	  pieSliceBorderColor:['#727c74']
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
<script src="js/countdown.js"></script>
<?php if(count($debates) > 0){
if($debates != ''){
if(strtotime($ss) >= strtotime($todays_date))
{
 ?>
	<script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "<?php echo $date; ?>",
				format: "on"
			},
			
			function() {
				// callback function
			});
		});
	
	</script>
<?php }else{
?>
<script>
$("#countdown").html("Debate is expired");

</script>
<?php 
} } } ?>
	

<div class="wrapper">
		
				<div class="header">
					
					<div class="left_header">
						<img src="images/heading.jpg">
						
						<?php if(count($debates) > 0){
						
						if($debates != ''){
						 ?>
						
						<p>This week's motion is...</p>	
					     <?php } } ?>
					</div>
					
					<div class="right_header">
						<?php if(count($debates) > 0){ 
						if($debates != ''){
						?>	
							<a href="javascript:;" onclick="publish_stream_pop('<?php echo $debates['debate_title']; ?>','<?php echo $sharingMsg_2['DETAILS']; ?>','<?php echo $this->appUrl; ?>/entry-site-<?php echo $debates['id']; ?>.html','<?php echo $imgAbs_2; ?>')"><img src="images/share.jpg"></a>
							 <?php } }?>
					</div>
					
					<div class="clear"></div>
				</div>
				<?php if(count($debates) > 0){ 
				
				if($debates != ''){
				?>
				<div class="second_header">
					
					<div class="second_header_left">
						
						<!--A western company without an Asian strategy risks falling behind permanently.-->
						<?php
						if(count($debates) > 0)
							{
								echo $debates['debate_title'];
						    }
							 else
							     {
								  
								  echo 'Take a Break';
								  
								 }
						?>
						
					</div>
					
					<div class="second_header_right">
					<?php if(count($debates) > 0) { ?>
							<img src="admin/uploads/<?php echo $debates['image']; ?>" width="145" height="164">
					<?php } ?>
					</div>
					
					<div class="clear"></div>
				</div>
				
			<?php 
				} }
				if($debates != ''){
				if(count($debates) > 0)
					{
				
			?>	
				
				<div class="video_portion">
					
					<div class="favour_video margin_left">
						
						<div class="video">
							<?php echo $debates['favour_video']; ?>
							<div class="clear"></div>
						</div>
						
						<div class="text_video text_video_favour">
							
							<p class="head"><?php echo $debates['favour_title']; ?></p>
							
							<p><?php echo $debates['favour_description']; ?></p>
							
							<div class="clear"></div>
						</div>
						
						<div class="vote_btn vote_in_favour">
						    <div class="popup_friends favour_fr">
								
								<ul>
								<?php $us = 0; ?>
								  <?php foreach($favour_voting as $favvot){ ?>
								 <?php
								 
								 	if($favvot->fb_user == $this->user->userid)
										{
										 
										 $us = 1;
										 
										}
								 
								 ?>
									<li><a href="http://facebook.com/<?php echo $favvot->fb_user; ?>" target="_blank"><img src="http://graph.facebook.com/<?php echo $favvot->fb_user; ?>/picture" width="32" height="32" /></a></li>
								  
								  <?php } ?>
								   <div class="clear"></div>
								</ul>
								<p><?php echo count($favour_voting); ?> of your friends have voted for this motion.</p>
							   <div class="clear"></div>
							</div>
							<?php if($vote == 1){ ?>
							<?php if($us == 1){ ?>
							<img class="favour_img" onClick="voteUp('<?php echo $debates['id']; ?>','','','<?php echo $_REQUEST['signed_request']; ?>','1','1');" src="images/you_voted_for.png">
							<?php }else{ ?>
							
							<img class="favour_img" onClick="voteUp('<?php echo $debates['id']; ?>','','','<?php echo $_REQUEST['signed_request']; ?>','1','1');" src="images/vote_for.jpg">
							<?php } }else{?>
							
							<img class="favour_img" src="images/vote_for.jpg" style="opacity:0.4;">
							
							<?php } ?>
							
							<div class="clear"></div>
						</div>
						
						<div class="voteProgressImg_favour" style="display:none;">
							<img src="images/progress.gif">
							<div class="clear"></div>
						</div>
						
					</div>
					
					<div class="performanace_meter" id="change">
							
							<p class="owl"><img src="images/owl.png"></p>
							<p id="chart_div"></p>
							<p id="line"></p>
							
							
					</div>
					
					<div class="againt_video margin_right">
						
						<div class="video">
							<?php echo $debates['against_video']; ?>
							<div class="clear"></div>
						</div>
						
						<div class="text_video">
							
							<p class="head"><?php echo $debates['against_title']; ?></p>
							
							<p><?php echo $debates['against_description']; ?></p>
							
							<div class="clear"></div>
						</div>
						
						<div class="vote_btn vote_in_against">
						    
							<div class="popup_friends against_fr" >
								
								<ul>
								<?php $ug = 0; ?>
								  <?php foreach($against_voting as $agvot){ ?>
									 <?php
									 
										if($agvot->fb_user == $this->user->userid)
											{
											 
											 $ug = 1;
											 
											}
									 
									 ?>
									<li><a href="http://facebook.com/<?php echo $agvot->fb_user; ?>" target="_blank"><img src="http://graph.facebook.com/<?php echo $agvot->fb_user; ?>/picture" width="32" height="32" /></a></li>
								  
								  <?php } ?>
								  
								  <div class="clear"></div>
								</ul>
								<p><?php echo count($against_voting); ?> of your friends have voted against this motion</p>
							    <div class="clear"></div>
							</div>
							<?php if($vote == 1){ ?>
							<?php if($ug == 1) {?>
							 
							 <img class="against_img" onClick="voteUp('<?php echo $debates['id']; ?>','','','<?php echo $_REQUEST['signed_request']; ?>','1','0');" src="images/against.png">
							 
							<?php }else{ ?>
							
							<img class="against_img" onClick="voteUp('<?php echo $debates['id']; ?>','','','<?php echo $_REQUEST['signed_request']; ?>','1','0');" src="images/vote_against.jpg">
							<?php } }else{?>
							<img class="against_img"  src="images/vote_against.jpg" style="opacity:0.4;">
							<?php } ?>
							<div class="clear"></div>
						</div>
						<div class="voteProgressImg_against" style="display:none;">
							<img src="images/progress.gif">
							<div class="clear"></div>
						</div>
					</div>
					
					<div class="clear"></div>
				</div>
			
			<?php 
			}
			      }else{
			?>
					
					<div class="video_portion" style="text-align:center; padding-bottom:50px;">
						
						<img src="images/takeabreak.jpg">
						
						<div class="clear"></div>
					</div>
					
			<?php
						}
			
			?>
				
				<?php if(count($debates) > 0){ 
				if($debates != ''){
				?>
				
				<div class="comments_portions">
					
					<div class="comments_area">
						
						<p>I am FOR this motion because...</p>
						
						<div class="commnets" style="background:#fff;">
							
							<div class="fb-comments" data-href="https://www.ogilvyapplications.com/team1/fb/do_debate/favour-<?php echo $debates['id']; ?>.html" data-width="365" data-num-posts="5"></div>
							
							<div class="clear"></div>
						</div>
						
					</div>
					
					<div class="comments_area cmt_right">
						
						<p>I am AGAINST this motion because...</p>
						
						<div class="commnets">
							
							<div class="fb-comments" data-href="https://www.ogilvyapplications.com/team1/fb/do_debate/against-<?php echo $debates['id']; ?>.html" data-width="365" data-num-posts="5"></div>
							
							<div class="clear"></div>
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
			    
				<?php } }?>
				
				
				<div class="slider">
					
					<p>View Previous Debates</p>
					
					<div class="grand_btm_slider" style="overflow:hidden;">
					
					<?php $count = count($debates_normal); 
						  $divide = round($count/3);
					      
						   $rr = $count%3;
						   
						   if($rr > 0)
						   	{
							 
							 $divide = $divide+1;
							 
							}
						  
					?>
					
					<div class="slider_left">
							<img title="1" src="images/left.jpg" onclick="slide_previous(this.title,<?php echo $divide; ?>)" class="left">
					</div>
					
					<div class="slider_middle">
							
							<?php 
					    
									 $i = 1;
									 $j = 1;
									 foreach($debates_normal as $d)
										{
										
										if($i == 1)
											{
								?>
											  <ul class="list1">
								<?php
											}
								?>
								<li><span><a href="index.php?id=<?php echo $d->id; ?>&signed_request=<?php echo $_REQUEST['signed_request']; ?>"><img src="admin/uploads/<?php echo $d->image; ?>"></a></span>
									<p class="slide_text"><?php echo $d->debate_title; ?></p>
								
								</li>
								
							
							<?php 
					      
						  
						    if($i%3 == 0)
								{
								 $j++;
					?>
								  </ul>
								  <ul class="list<?php echo $j; ?>"  style="display:none;">
								  
					<?php
								}
					
							$i++;
							}
					
					?>
							
					</div>
					
					<div class="slider_right">
							<img title="1" onclick="slide_next(this.title,<?php echo $divide; ?>)" class="right" src="images/right.jpg">
					</div>
				 </div>
					
					<div class="clear"></div>
				</div>
				
				<div class="clear"></div>
			</div>

<script>
	 if(favour > against)
		{
		 
		 $("#change").append('<p class="balance"><img src="images/balance_foot.jpg"></p><p id="countdown" class="timer_2">Time Left: <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span></p>');
		 
		}
		 else if(favour < against)
			{
			  
			  $("#change").append('<p class="balance"><img src="images/balance_foot_1.jpg"></p><p id="countdown" class="timer_2">Time Left: <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span></p>');
			  
			  $(".margin_left").css("margin-top","-29px");
			  
			  $(".margin_right").css("margin-top","29px");
			  
			  $(".balance").css("margin-left","-3px");
			  
			  $(".margin_right").css("margin-left","-2px");
			  
			}
			 else
				 {
				  
				  $("#change").append('<p class="tt"><img src="images/before_balance_foot.jpg" style="z-index:-10;"></p><p id="countdown" class="timer">Time Left: <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span></p>');
				  
				  $(".margin_left").css("margin-top","-22px");
			  
			 	  $(".margin_right").css("margin-top","8px");
				  
				 }
	</script>
	
	
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=183487885129100";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>


			function drawCharts(favour,against) {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Debate'],
				  ['against', against],
				  ['Favour',  favour]
				]);
			
			
				var options = {
				  colors:['#9a0000','#40b240'],
				  legend:{position: 'top'},
				  chartArea:{left:25,top:0,width:"135px"},
				  backgroundColor:{fill:'#f0f0f0'},
				  tooltip:{trigger:'none'},
				  pieSliceBorderColor:['#727c74']
				};
			
				var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			  }
		  
		

function chnage_with_vote(favour,against)
		{
		 
		 favour = parseInt(favour);
		 
		 against = parseInt(against);
		 
		 if(favour == 0 && against == 0)
			{
			 
			  favour = 1;
			  against = 1;
			 
			}
		 
		   $('#chart_div').html('');
		   
		   drawCharts(favour,against);
		  
		  
		  $(".balance").remove();
		  
		  $(".tt").remove();
		  
		  $(".timer").remove();
		  
		  $(".margin_left").css("margin-top","0");
					  
		  $(".margin_right").css("margin-top","0");
		  
		  $(".margin_right").css("margin-left","0");
		  
		  if(favour > against)
				{
				 
				 $("#change").append('<p class="balance"><img src="images/balance_foot.jpg"></p><p id="countdown" class="timer_2">Time Left: <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span></p>');
				 
				}
				 else if(favour < against)
					{
					  
					  $("#change").append('<p class="balance"><img src="images/balance_foot_1.jpg"></p><p id="countdown" class="timer_2">Time Left: <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span></p>');
					  
					  $(".margin_left").css("margin-top","-29px");
					  
					  $(".margin_right").css("margin-top","29px");
					  
					  $(".balance").css("margin-left","-3px");
					  
					  $(".margin_right").css("margin-left","-2px");
					  
					}
					 else
						 {
						  
						  $("#change").append('<p class="tt"><img src="images/before_balance_foot.jpg" style="z-index:-10;"></p><p id="countdown" class="timer">Time Left: <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span></p>');
						  
						  $(".margin_left").css("margin-top","-22px");
					  
						  $(".margin_right").css("margin-top","8px");
						  
						 }
		  
	
		
			$("#countdown").countdown({
				date: exp_date,
				format: "on"
			},
			
			function() {
				// callback function
			});
		
	
	
		}
</script>
<?php if(count($debates) > 0){
if($debates != ''){
if(strtotime($ss) >= strtotime($todays_date))
{
 ?>
	<script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "<?php echo $date; ?>",
				format: "on"
			},
			
			function() {
				// callback function
			});
		});
	
	</script>
<?php }else{
?>
<script>
$("#countdown").html("Debate is expired");

</script>
<?php 
} } } ?>