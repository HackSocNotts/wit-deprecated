<section>
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2>Speakers</h2>
      <hr class="star-primary">
    </div>
  </div>

<ul class="list">

<?php

class Speaker
{
  public $name;
  public $bio;
  public $link;
  public $image;
}

$speakerA = new Speaker();
$speakerA->name = 'Carrie Anne Philbin';

$speakerA->subtitle = 'Education Pioneer';
$speakerA->subtitle2 = 'Raspberry Pi Foundation';
$speakerA->twitter = '@MissPhilbin';

$speakerA->bio = 'Carrie Anne Philbin is an award winning secondary Computing & ICT teacher who now leads the education mission as Education Pioneer at the Raspberry Pi Foundation. Author of ‘Adventures in Raspberry Pi’ a physical computing book for teenagers wanting to get started with Raspberry Pi and programming. Carrie Anne is the creator of a YouTube series for teenage girls called The Geek Gurl Diaries, which won her a Talk Talk Digital Hero Award in 2013.';
$speakerA->link = '//about.me/carrieannephilbin';
$speakerA->image = 'img/speakers/CarrieAnnePhilbin.jpg';


$speakerB = new Speaker();
$speakerB->name = 'Jocelyn Spence';
$speakerB->subtitle = 'Performative Experience Design';
$speakerB->subtitle2 = 'Mixed Reality Laboratory, UoN';
$speakerB->twitter = '@stronglanguage';

$speakerB->bio = 'Jocelyn Spence is a human-computer interaction, experience design, and performance researcher working in the field of Performative Experience Design. Her research combines performance theory and practice - performance like the kind on a stage, not like the speed of your processor! - with design-oriented research. After two research fellowships at the University of Surrey, I am now a Visiting Researcher at the Mixed Reality Laboratory at the University of Nottingham.';
$speakerB->link = '//JocelynSpence.com';
$speakerB->image = 'img/speakers/JocelynSpence.jpg';

$speakerC = new Speaker();
$speakerC->name = 'Robyn Taylor';
$speakerC->subtitle = 'Participatory Performance Research';
$speakerC->subtitle2 = 'Open Lab, Newcastle University';
$speakerC->twitter = '@humanaquarium';

$speakerC->bio = 'Robyn Taylor is a Canadian singer and researcher working in Open Lab at Newcastle University. Robyn uses participatory performance as a creative and investigatory medium, inviting members of the public to engage in improvisational performances. Through staging and evaluating playful collaborative experiences, her research explores issues in human-computer interaction surrounding creative agency and social encounters in public spaces.';
$speakerC->link = '//robyntaylor.com';
$speakerC->image = 'img/speakers/RobynTaylor.jpg';


$speakerD = new Speaker();
$speakerD->name = 'Victoria Van Garrett';
$speakerD->subtitle = 'Quality Assurance Lead';
$speakerD->subtitle2 = 'Quantic Dream';
$speakerD->twitter = '@Vic_Van_Garrett';
$speakerD->bio = 'Victoria is a Quality Assurance Lead in the video game industry. Having worked on ‘triple A’ titles such as Assassins Creed, Heavy Rain and the upcoming PS4 exclusive Detroit, she has forged her career through hard work, passion and determination. Victoria studied at Confetti Institute of Creative Technologies in Nottingham before landing her first industry role. She is an avid gamer, and a self-confessed geek whose interests include Dungeons and Dragons, PC & console gaming, fantasy, sci-fi and technology.';
$speakerD->link = '//www.quanticdream.com/en/#!/en/category/studio';
$speakerD->image = 'http://baconmockup.com/250/200';

$speakerE = new Speaker();
$speakerE->name = 'Speaker Name 2';
$speakerE->subtitle = 'Education Pioneer';
$speakerE->subtitle2 = 'Raspberry Pi Foundation';
$speakerE->twitter = '@MissPhilbin';
$speakerE->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quis quasi ut natus dolore doloremque quaerat, animi libero quibusdam sequi alias, placeat voluptatibus aspernatur! Laboriosam reiciendis facere blanditiis, asperiores soluta.';
$speakerE->link = '//www.google.com';
$speakerE->image = 'http://baconmockup.com/250/200';

$speakerF = new Speaker();
$speakerF->name = 'Speaker Name 2';
$speakerF->subtitle = 'Education Pioneer';
$speakerF->subtitle2 = 'Raspberry Pi Foundation';
$speakerF->twitter = '@MissPhilbin';
$speakerF->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quis quasi ut natus dolore doloremque quaerat, animi libero quibusdam sequi alias, placeat voluptatibus aspernatur! Laboriosam reiciendis facere blanditiis, asperiores soluta.';
$speakerF->link = '//www.google.com';
$speakerF->image = 'http://baconmockup.com/250/200';


$speakerG = new Speaker();
$speakerG->name = 'Speaker Name 2';
$speakerG->subtitle = 'Education Pioneer';
$speakerG->subtitle2 = 'Raspberry Pi Foundation';
$speakerG->twitter = '@MissPhilbin';
$speakerG->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quis quasi ut natus dolore doloremque quaerat, animi libero quibusdam sequi alias, placeat voluptatibus aspernatur! Laboriosam reiciendis facere blanditiis, asperiores soluta.';
$speakerG->link = '//www.google.com';
$speakerG->image = 'http://baconmockup.com/250/200';



$speakerH = new Speaker();
$speakerH->name = 'Speaker Name 2';
$speakerH->subtitle = 'Education Pioneer';
$speakerH->subtitle2 = 'Raspberry Pi Foundation';
$speakerH->twitter = '@MissPhilbin';
$speakerH->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quis quasi ut natus dolore doloremque quaerat, animi libero quibusdam sequi alias, placeat voluptatibus aspernatur! Laboriosam reiciendis facere blanditiis, asperiores soluta.';
$speakerH->link = '//www.google.com';
$speakerH->image = 'http://baconmockup.com/250/200';

$speakerI = new Speaker();
$speakerI->name = 'Speaker Name 2';
$speakerI->subtitle = 'Education Pioneer';
$speakerI->subtitle2 = 'Raspberry Pi Foundation';
$speakerI->twitter = '@MissPhilbin';
$speakerI->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quis quasi ut natus dolore doloremque quaerat, animi libero quibusdam sequi alias, placeat voluptatibus aspernatur! Laboriosam reiciendis facere blanditiis, asperiores soluta.';
$speakerI->link = '//www.google.com';
$speakerI->image = 'http://baconmockup.com/250/200';




$speakers = array(
  $speakerA,
  $speakerB,
  $speakerC);

  // $speakerD,
  // $speakerE,
  // $speakerF,
  // $speakerG,
  // $speakerH,
  // $speakerI


foreach ($speakers as $speaker) {
?>

    <li class="list-item">
      <div class="list-content">
        <h2><?php echo $speaker->name; ?></h2>
        <h3><?php echo $speaker->subtitle; ?></h3>
        <h3><?php echo $speaker->subtitle2; ?></h3>
        <h3><a target="_blank" href="//twitter.com/<?php echo $speaker->twitter; ?>"><?php echo $speaker->twitter; ?></a></h3>
        <a target="_blank" href="<?php echo $speaker->link; ?>"><img src="<?php echo $speaker->image; ?>" alt="" /></a>
        <p><?php echo $speaker->bio; ?></p>
        <a target="_blank" href="<?php echo $speaker->link; ?>">See more</a>
      </div>
    </li>


<?php
}

?>

</ul>
</section>
