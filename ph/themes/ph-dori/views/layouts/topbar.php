<!-- start: TOPBAR -->
<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
	<!-- start: TOPBAR CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
				<i class="fa fa-bars"></i>
			</a>
			<!-- start: LOGO -->
			<a class="navbar-brand" href="<?php echo Yii::app()->createUrl("/".$this->module->id)?>">
				<?php echo (isset($this->projectImage)) ? '<img height="30" src="'.$this->module->assetsUrl.$this->projectImage.'"/>' : "<i class='fa fa-close'>/i>"; echo (isset($this->projectName)) ? $this->projectName : "Page subTitle";?>
			</a>
			<!-- end: LOGO -->
		</div>
		<div class="topbar-tools">
			<!-- start: TOP NAVIGATION MENU -->
			
			<ul class="nav navbar-right">
				<li id="mbz" style="padding-top:5px;"></li>
				<!-- start: USER DROPDOWN -->
				<li class="dropdown current-user">
					<?php $titleId = (isset(Yii::app()->session["user"])) ? Yii::app()->session["user"]["userId"]."-".Yii::app()->session["user"]["groupId"]."-".Yii::app()->session["userId"] : "";?>
					<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" title="<?php echo $titleId?>" data-placement="bottom" data-close-others="true" href="#">
						<img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/avatar-1-small.jpg" class="img-circle" alt=""> <span class="username hidden-xs"><?php echo (isset(Yii::app()->session["user"]["name"])) ? Yii::app()->session["user"]["name"] : Yii::app()->session["user"]["firstName"]." ".Yii::app()->session["user"]["lastName"]?></span> <i class="fa fa-caret-down "></i>
					</a>
					<ul class="dropdown-menu dropdown-dark">
						<li>
							<a href="<?php echo Yii::app()->createUrl("/".$this->module->id."/person")?>">
								My Profile
							</a>
						</li>
						<li>
							<a href="<?php echo Yii::app()->createUrl("/".$this->module->id."/event/agenda")?>">
								My Calendar
							</a>
						</li>
						<?php /*
						<li>
							<a href="<?php echo Yii::app()->createUrl("/".$this->module->id."/discuss")?>">
								My Messages (3)
							</a>
						</li>
						*/?>
						<li>
							<a href="<?php echo Yii::app()->createUrl("/".$this->module->id."/person/logout")?>">
								Log Out
							</a>
						</li>
					</ul>
				</li>
				<!-- end: USER DROPDOWN -->
				<li class="right-menu-toggle">
					<a href="#" class="sb-toggle-right">
						<i class="fa fa-info-circle toggle-icon"></i> <i class="fa fa-caret-right"></i> <span class="notifications-count badge badge-default hide"></span>
					</a>
				</li>
			</ul>
			<!-- end: TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- end: TOPBAR CONTAINER -->
</header>
<!-- end: TOPBAR -->