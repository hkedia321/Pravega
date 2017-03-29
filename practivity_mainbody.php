<div class="first-section left-section col-md-10 col-md-offset-1">
				<?php
				$headings=["Riviera 17","Drag Race 2016","Rollout 2016","Rollout 2015","Riviera 2015","Calendar Shoot Cornitos","Engage Deodorants Marketing Campaign","Red Bull Calendar Shoot"];
				$paras=["Continuing the tradition this year, we set up a pit during Riviera 17 - An innovative, out-of-the-box, F1 simulator was contrived using the body of PRV 15 to give the enthusiastic F1 fans a little bit of driver experience. Our crazy driver did crazier stunts with the racecar and the crowd went berserk after seeing PRV-16 performing colorful doughnuts.",
				"With little help from BMW India we conducted a drag race between PRV 16 and BMW in our college campus.  Revving of engines raised the heartbeats of the audience to an unmatched level, like never seen before in VIT. The 75m race was flagged off by BMW representative at the event, both the cars made 3 runs towards the finish line, each time PRV was able to beat the Beemer.",
				"Continuing the tradition, we orchestrated the Grand Rollout of our new car PRV16. Our new sponsors BMW and Star sports were presented at the event which was attended by Parents, Faculty members, sponsors and an overwhelming crowd of more than 1000 students. The countdown got everybody’s heartbeat racing, we again had a staggering response from the freshers.",
				"We conducted a grand launch of our car PRV 15. All the sponsors were showcased at the event. All the senior management of VIT, sponsors and alumni attended the launch. More than 800 students we closely packed in CS hall. Excitement amongst the freshers was heartening and it was them who made our event biggest event of the semester.",
				"Riviera is the cultural fest of VIT University which sees a crowd of over 25,000 people. We had an epic pit setup at Riviera with Red Bull providing excitement through its Racing Simulator, Parasol and a beautiful Wings Team sampling Red Bull cans while our PRV’14 entertained the crowd. On Day 1 we performed some donuts in front of an excited crowd and owing to public demand on Day 2 we showed our creative side laying the track with colors to put up an exhilarating show in front of a huge crowd. This was one of the best PR stunts of college in 2014-15 season.",
				"It was a perfect team bonding activity for the team during the summer vacations as it gave a break from the busy testing schedule. Our calendar was themed on the numerous flavors of cornitos. It took a lot of effort to relate chips with our racecar but in the end we were successful to create a very cool and colorful calendar",
				"Engage deodorants from ITC is an exciting brand that has pushed the envelope in Indian advertising and shooting pictures for them was a very exciting endeavour. We themed our pictures based on the various fragrances of Engage integrating sensuality and style to suit the Engage brand. This was a one of a kind opportunity and we made the most of it creating some great pictures in the process.",
				"After continual efforts we got a chance to associate with Red Bull and we decided to do something special to reciprocate this gesture. We did a photo shoot to make a Red Bull calendar with pictures having a mix of emotion, creativity, passion for race cars and the zeal for the perfect picture. Our driver along with our Car and Red Bull cans blended perfectly to create a magnificent calendar. This calendar is an achievement that will be etched in our memories forever."

				];
				$ifr_links=["img/general/practivity/riviera17/1.jpg","img/general/practivity/dragrace2016/0.png","img/general/practivity/rollout2016/1.png","img/general/practivity/rollout2015/1.png","img/general/practivity/riviera/1.png","img/general/practivity/cornitos/1.png","img/general/practivity/engage/2.png","img/general/practivity/redbull/1.png"];
				//$img_folders=["dragrace2016","rollout2016","rollout2015","riviera","cornitos","engage","redbull"];
				$nos=count($ifr_links);
				for($i=0;$i<$nos;$i++)
				{
					$heading=$headings[$i];
					$para=$paras[$i];
					$ifr_link=$ifr_links[$i];
					echo "
					<div class='col-xs-12'>
						<div class='activity-wrapper' id='practivity$i'>
							<h2 class='activity-title text-left'><b>$heading</b></h2>
							<p class='activity-para'>$para</p>
							<div class='iframediv row'>
								<div class='col-sm-10 col-sm-offset-1'>
									<img src='$ifr_link' class='practivityimg'>
									<br>
								</div>
								<div class='col-sm-1'></div>
							</div>
						</div>
					</div>
					";
				}
				?>
			</div>
			