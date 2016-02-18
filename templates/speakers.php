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
  public $subtitle;
  public $subtitle2;
  public $twitter;
  public $image;
}

$speakerA = new Speaker();
$speakerA->name = 'Carrie Anne Philbin';
  $speakerA->subtitle = 'Education Pioneer';
  $speakerA->subtitle2 = 'Raspberry Pi Foundation';
  $speakerA->twitter = '@MissPhilbin';
  $speakerA->bio = 'Carrie Anne Philbin is an award winning secondary Computing & ICT teacher who now leads the education mission as Education Pioneer at the Raspberry Pi Foundation. Author of ‘Adventures in Raspberry Pi’ a physical computing book for teenagers wanting to get started with Raspberry Pi and programming. Carrie Anne is the creator of a YouTube series for teenage girls called The Geek Gurl Diaries, which won her a Talk Talk Digital Hero Award in 2013.';
  $speakerA->link = '//about.me/carrieannephilbin';
  $speakerA->linkname = 'Carrie';
  $speakerA->image = 'img/speakers/CarrieAnnePhilbin.jpg';

$speakerB = new Speaker();
$speakerB->name = 'Jocelyn Spence';
  $speakerB->subtitle = 'Performative Experience Design';
  $speakerB->subtitle2 = 'Mixed Reality Laboratory, UoN';
  $speakerB->twitter = '@stronglanguage';
  $speakerB->bio = 'Jocelyn Spence is a human-computer interaction, experience design, and performance researcher working in the field of Performative Experience Design. Her research combines performance theory and practice - performance like the kind on a stage, not like the speed of your processor! - with design-oriented research. After two research fellowships at the University of Surrey, I am now a Visiting Researcher at the Mixed Reality Laboratory at the University of Nottingham.';
  $speakerB->link = '//JocelynSpence.com';
  $speakerB->linkname = 'Jocelyn';
  $speakerB->image = 'img/speakers/JocelynSpence.jpg';

$speakerC = new Speaker();
$speakerC->name = 'Robyn Taylor';
  $speakerC->subtitle = 'Participatory Performance Research';
  $speakerC->subtitle2 = 'Open Lab, Newcastle University';
  $speakerC->twitter = '@humanaquarium';
  $speakerC->bio = 'Robyn Taylor is a Canadian singer and researcher working in Open Lab at Newcastle University. Robyn uses participatory performance as a creative and investigatory medium, inviting members of the public to engage in improvisational performances. Through staging and evaluating playful collaborative experiences, her research explores issues in human-computer interaction surrounding creative agency and social encounters in public spaces.';
  $speakerC->link = '//robyntaylor.com';
  $speakerC->linkname = 'Robyn';
  $speakerC->image = 'img/speakers/RobynTaylor.jpg';

$speakerD = new Speaker(); // done, no link
$speakerD->name = 'Shima Barakat';
  $speakerD->subtitle = 'Research & Teaching Fellow';
  $speakerD->subtitle2 = 'University of Cambridge';
  $speakerD->twitter = '@valuesdoc';
  $speakerD->bio = 'Shima is the director of two programmes for PhDs at the University of Cambridge, supporting the development of technology entrepreneurs and the commercialisation of technology, including the only programme for women STEM researchers. Shima is also one of the founders and a Director of Value in Enterprise, the responsible business consultancy company.';
  $speakerD->link = '//www.cam.ac.uk/women-at-cambridge/profiles/shima-barakat';
  $speakerD->linkname = 'Shima';
  $speakerD->image = 'img/speakers/ShimaBarakat.png';

$speakerE = new Speaker(); // done, no link
$speakerE->name = 'Tash Bromiley';
  $speakerE->subtitle = 'Cloud Security Engineering';
  $speakerE->subtitle2 = 'Capital One';
  $speakerE->twitter = '@TashJBromiley';
  $speakerE->bio = 'Tash is a Forensic Computing graduate at Capital One UK and co-founder of a health hackathon event Hack Cancer and an advocate for diversity in technology teams. She’s all about breaking down stereotypes and challenging the status quo.';
  $speakerE->link = '//www.capitalonecareers.co.uk/our-schemes';
  $speakerE->linkname = 'Capital One';
  $speakerE->image = 'img/speakers/TashBromiley.png';

$speakerF = new Speaker(); // 100% done
$speakerF->name = 'Holly Smith';
  $speakerF->subtitle = 'Freelance VFX Artist';
  $speakerF->subtitle2 = 'Confetti Institute of Creative Technologies';
  $speakerF->twitter = '@hollysmithvfx';
  $speakerF->bio = 'Holly is a Freelance VFX Artist and Media & VFX Tutor at Confetti Institute of Creative Technologies. Working predominantly as a 3D artist creating content for film, TV & music videos; Holly has just begun teaching at Confetti in order to share her knowledge with & help inspire the next generation of VFX artists.';
  $speakerF->link = '//vimeo.com/hollysmithvfx';
  $speakerF->linkname = 'Holly';
  $speakerF->image = 'img/speakers/HollySmith.png';

$speakerG = new Speaker(); // 100% done
$speakerG->name = 'Bec Smith';
  $speakerG->subtitle = 'Multimedia Experimentalist';
  $speakerG->subtitle2 = 'Urban Projections';
  $speakerG->twitter = '@Urb_Projections';
  $speakerG->bio = 'With over ten years experience as a professional audio-visual performer, Bec has lead high quality, cross boundary projects, workshops, and seminars at both educational institutions and from within the community. Sharing her enthusiasm and passion for arts and technology Bec actively encourages new and creative ways of exchanging new media practice.';
  $speakerG->link = '//www.urbanprojections.com/#!about/cjg9';
  $speakerG->linkname = 'Bec';
  $speakerG->image = 'img/speakers/RebeccaSmith.jpg';


$speakers = array(
  $speakerA,
  $speakerB,
  $speakerC,
  $speakerD,
  $speakerE,
  $speakerF,
  $speakerG);

foreach ($speakers as $speaker) {
?>

    <li class="list-item">
      <div class="list-content">
        <h2><?php echo $speaker->name; ?></h2>

        <?php if($speaker->subtitle !== '') { ?>
          <h3><?php echo $speaker->subtitle; ?></h3>
        <?php } ?>

        <?php if($speaker->subtitle2 !== '') { ?>
          <h3><?php echo $speaker->subtitle2; ?></h3>
        <?php } ?>

        <?php if($speaker->twitter !== '') { ?>
          <h3><a target="_blank" href="//twitter.com/<?php echo $speaker->twitter; ?>"><?php echo $speaker->twitter; ?></a></h3>
        <?php } ?>


        <a target="_blank" href="<?php echo $speaker->link; ?>">
          <img src="<?php echo $speaker->image; ?>" alt="" />
        </a>

        <p><?php echo $speaker->bio; ?></p>
        <a target="_blank" href="<?php echo $speaker->link; ?>">More about <?php echo $speaker->linkname; ?></a>
      </div>
    </li>


<?php
}

?>

</ul>
</section>