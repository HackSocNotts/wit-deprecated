<!-- * schedule.php start * -->
<!-- Schedule Section -->
<section id="schedule">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Schedule</h2>
        <hr class="star-primary">
      </div>
    </div>

<?php 
	$classes = array("","");
	foreach (array("lg", "md", "sm", "xs") as $n) {
		$classes[0] .= "col-$n-4 col-$n-offset-2 ";
		$classes[1] .= "col-$n-4 ";
 	}
?>
    <div class="row">
      <div class="text-right">
      <div class="<?php echo $classes[0]; ?>">
        <p>09:00 - 09:30</p>
        <p>09:30 - 09:50</p>
        <p>09:50 - 11-10&nbsp;</p>
      </div>
    </div>
      <div class="<?php echo $classes[1]; ?>">
        <p>Registration</p>
        <p>Welcome address</p>
        <p>Speakers</p>
      </div>
    </div>

    <div class="text-center">
        <h4>Tea Break</h4>
    </div>

    <div class="row">
      <div class="text-right">
      <div class="<?php echo $classes[0]; ?>">
        <p>11:30 - 12:50</p>
      </div>
    </div>
      <div class="<?php echo $classes[1]; ?>">
        <p>Speakers</p>
      </div>
    </div>

    <div class="text-center">
        <h4>Lunch</h4>
        <h5>(Networking and workshops)</h5>
    </div>

    <div class="row">
      <div class="text-right">
      <div class="<?php echo $classes[0]; ?>">
        <p>13:30 - 14:30</p>
        <p>14:30 - 15:30</p>
        <p>15:30 - 16:30</p>
      </div>
    </div>
      <div class="<?php echo $classes[1]; ?>">
        <p>Workshops 1</p>
        <p>Workshops 2</p>
        <p>Workshops 3</p>
      </div>
    </div>

    <div class="text-center">
        <h4>Refreshments</h4>
    </div>

    <div class="row">
      <div class="text-right">
      <div class="<?php echo $classes[0]; ?>">
        <p>16:45 - 17:00</p>
      </div>
    </div>
      <div class="<?php echo $classes[1]; ?>">
        <p>Close</p>
      </div>
    </div>

  </div>
</section>
<!-- = schedule.php end = -->
