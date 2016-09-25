<?php
	require(DB_CONFIG); check_session($conn);
	require(MODEL_HOME);
	$title = "Home";
	$active_home = ' class="active"';
	require ADMIN_HEADER;
	require ADMIN_SIDEBAR;
?>
<div class="main-panel">
	<?php
		require ADMIN_PANEL_TOP;
	?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="header">
							<h4 class="title">Video Slider</h4>
						</div>
						<div class="content">
							<form method="POST" action="<?php echo ROOT_PATH.'admin/api/home/videoslider'; ?>">
							<?php $rows = model_get_video_slider($conn); for($i=0; $i<4; $i++){ ?>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Video URL #<?php echo ($i+1);?></label>
											<input type="text" class="form-control" name="videourl<?php echo ($i+1);?>" placeholder="https://www.youtube.com/watch?v=j1q4-tzMI28" value="<?php echo $rows[$i]['video_url'];?>">
										</div>
									</div>
								</div>
							<?php } ?>
								<button type="submit" class="btn btn-info btn-fill pull-right">Update List</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="header">
							<h4 class="title">News</h4>
						</div>
						<div class="content">
							<form>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Title(English)</label>
											<input type="text" class="form-control" placeholder="Title (en)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title (Nepali)</label>
											<input type="text" class="form-control" placeholder="Title (ne)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">URL</label>
											<input type="text" class="form-control" placeholder="News url">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Title(English)</label>
											<input type="text" class="form-control" placeholder="Title (en)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title (Nepali)</label>
											<input type="text" class="form-control" placeholder="Title (ne)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">URL</label>
											<input type="text" class="form-control" placeholder="News url">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Title(English)</label>
											<input type="text" class="form-control" placeholder="Title (en)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title (Nepali)</label>
											<input type="text" class="form-control" placeholder="Title (ne)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">URL</label>
											<input type="text" class="form-control" placeholder="News url">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Title(English)</label>
											<input type="text" class="form-control" placeholder="Title (en)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title (Nepali)</label>
											<input type="text" class="form-control" placeholder="Title (ne)">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">URL</label>
											<input type="text" class="form-control" placeholder="News url">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="header">
							<h4 class="title">Social Network</h4>
						</div>
						<div class="content">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Facebook</label>
											<input type="text" class="form-control" placeholder="facebookid" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Twitter</label>
											<input type="text" class="form-control" placeholder="twitterid" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Youtube</label>
											<input type="text" class="form-control" placeholder="youtubeid" >
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="header">
							<h4 class="title">Latest Videos</h4>
						</div>
						<div class="content">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Video URL #1</label>
											<input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=j1q4-tzMI28" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Video URL #2</label>
											<input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=xnP396-1U0s" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Video URL #3</label>
											<input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=j1q4-tzMI28" >
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-fill pull-right">Update List</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		require ADMIN_FOOTER;
	?>