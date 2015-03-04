<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div id="contents">
<h1>Create a Research Opportunity</h1>
	
	
<form action="/?opportunity=1" method="post" id="researchopportunity" accept-charset="UTF-8">

<label for="name">Name </label>
<input class="" type="text" id="name" name="name" value="" size="30" maxlength="255" />

<label for="description">Description </label>
<textarea class=" " id="description" name="description" cols="60" rows="5"></textarea>
 
<label for="positions">Positions available </label>
 <input class=" " type="text" id="positions" name="positions" value="" size="10" maxlength="5" />

 <label for="startdate">Start Date *</label>
 <input type="date" name="startdate" id="startdate">

 

 <label for="enddate">End Date </label>
 <input type="date" name="enddate" id="enddate">
 


 <label for="deadline">Application Deadline </label>
 <input type="date" name="deadline" id="deadline">


 <label for="locationcity">City </label>
 <input class=" " type="text" id="locationcity" name="locationCity" value="" size="10" maxlength="100" />

 <label for="locationstate">State </label>
 <input class=" " type="text" id="locationstate" name="locationState" value="" size="10" maxlength="100" />

 <label for="institution">Institution </label>
 <input class=" " type="text" id="institution" name="institution" value="" size="10" maxlength="30" />

 <label for="institutiontype">Institution Type </label>
 <input class=" " type="text" id="institutiontype" name="institutiontype" value="" size="10" maxlength="30" />

 <label for="discipline">Discipline </label>
 <input class=" " type="text" id="discipline" name="discipline" value="" size="10" maxlength="30" />

 
 <label for="logo">Logo </label>
 <input class=" " type="file" id="logo" name="logo1"  />

 
<label for="homepage">Opportunity Homepage </label>
 <input class=" " type="text" id="homepage" name="homepage" value="" size="10" maxlength="100" />

 
 <label for="gpareq">GPA Requirement </label>
 <input class=" " type="text" id="gpareq" name="gpareq" value="" size="10" maxlength="5" />

 <label for="gradereq">Grade Level Requirement </label>
 <select class=" " id="gradereq" name="gradereq"><option value="0">Undefined</option><option value="1">Freshman</option><option value="2">Sophomore</option><option value="3">Junior</option><option value="4">Senior</option></select>

 <label for="paid">Paid </label>
 <input type="checkbox" id="paid" name="paid" value="1" class="" />

 <button class="btn btn-success form-submit" id="submit-button" name="op" value="Create!" type="submit">Create!</button>

 </form>
	
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

