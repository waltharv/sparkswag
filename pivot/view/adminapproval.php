<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">
	<h1><?php echo $pageTitle; ?></h1>
	<?php if(isset($approved)){ ?>
		<div class="container">

		<div class="container">
			<?php
				echo '<div class="container">'. count($approved['succeeded']) . ' approvals succeeded.</div>';
				foreach($approved['succeeded'] as $listingNum){
					echo '<div class="row">
							<div class="col-md-2">
							Opportunity Number: '.$listingNum.'
							</div>	
						</div>';
				}
			?>
		</div>
		<div class="container">
				<?php echo '<div class="container">'.count($approved['failed']) . ' approvals failed.</div>';
					foreach($approved['failed'] as $listingNum){
						echo '<div class="row">
								<div class="col-md-2">
								Opportunity Number: '.$listingNum.'
								</div>	
							</div>';
					}

			?>
		</div>
		</div>
	<?php } ?>
	<div class="container">
		<form action="" method="post" role="form" id="approvalform">
		
                
		<?php if(count($needsApproval) > 0){
			foreach($needsApproval as $key => $listing){
			echo '<label for="selectall">select all</label>
				<input type="checkbox" id="selectall" name="selectall" onclick="$(\'input\').each(function(index, element){ element.checked = checked; 
});  ">

				<div class="row opplisting">
					<div class="col-md-2">
						<input type="checkbox" name="ListingNum[]" value="'.$listing['ListingNum'].'">
					</div>
					<div class="col-md-2">
						<a href="'.$thisSite. 'admin/delete/opportunity/' .$listing['ListingNum'].'">
							<i class="fa fa-trash-o"></i>
						</a>
					</div>
					<div class="col-md-4">
						<a href="'.$thisSite.'opportunities/'.$listing['ListingNum'].'">
							Project Title: '.$listing['title'].'
						</a>
					</div>
					<div class="col-md-2" style="color: #f28b54;">
						Deadline: '.$listing['deadline'].'
					</div>
					<div class="col-md-4">
						Start Date: '.$listing['startDate'].' End Date: '.$listing['endDate'].'
					</div>
					<div class="col-md-10 hidden-xs hidden-s">
						Description: '.$listing['detailedDescription'].'
					</div>
			</div>';
			
		}?>
		<button class="btn btn-default">Approve</button>
		</form>
		<?php }else{ ?>
		<div class="container">
		<p>There are no pending approvals.</p>
		</div>

		<?php }?>
		
	</div>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

