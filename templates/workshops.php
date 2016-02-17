<section>
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2>Workshops</h2>
      <hr class="star-primary">
    </div>
  </div>

<ul class="list">

<?php

class Workshop
{
  public $name;
  public $workshop_host;
  public $company;
  public $location;
  public $time;
  public $image;
}

$workshopA = new Workshop();
$workshopA->name = 'Get Apply';
  $workshopA->workshop_host = 'Louise';
  $workshopA->company = 'BCS Women';
  $workshopA->location = 'Computer Lab A';
  $workshopA->title = 'App Inventor Workshop';
  $workshopA->description = "This workshop uses MIT App Inventor, an innovative beginner's introduction to programming and app creation that transforms the complex language of text-based coding into visual, drag-and-drop building blocks. The simple graphical interface grants even an inexperienced novice the ability to create a basic, fully functional app within an hour or less.  During the workshop you will create a ‘Meow’ app either on your Android device or on an emulator.";
  $workshopA->time = '15:00-15:45';
  $workshopA->image = '';

// need todo
$workshopB = new Workshop();
$workshopB->name = 'Standing Out';
  $workshopB->workshop_host = 'Sonia';
  $workshopB->company = 'Stiff Kittens';
  $workshopB->location = 'Seminar Room B';
  $workshopB->title = '';
  $workshopB->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, ad sed impedit nihil et illo omnis. Sequi fugiat delectus quae distinctio porro, quo illo, explicabo neque repellendus architecto nulla id.';
  $workshopB->time = '15:00-15:45';
  $workshopB->image = '';

$workshopC = new Workshop();
$workshopC->name = 'What the Hack';
  $workshopC->workshop_host = 'Zarah';
  $workshopC->company = 'MLH';
  $workshopC->location = 'Seminar Room A';
  $workshopC->title = '';
  $workshopC->description = "Major League Hacking is the student hackathon league. Each year, 75,000+ developers, designers, and makers attend 200+ official MLH hackathons in the United States, Canada, Mexico and Europe. Hackathons are weekend-long technology festivals. They’re somewhere you can meet like-minded people, learn new things, and create cool technology. MLH EU started in Nottingham at HackNotts so we're excited to support WIT for the second year running!";
  $workshopC->time = '15:00-15:45';
  $workshopC->image = '';

$workshopD = new Workshop();
$workshopD->name = 'R U OK?';
  $workshopD->workshop_host = 'The 3 Rmigos';
  $workshopD->title = 'Digging for Data Insight with R';
  $workshopD->description = 'The profession of data scientist has been touted as one of the most in-demand for the 21st century, but what does a data scientist actually do? In this workshop, three data scientists from Capital One’s UK Data Labs provide an introduction to some of the data mining approaches that are fundamental to any data science role. You will have a chance to experience first-hand how to derive insight from data with cleaning, visualisation and classification techniques, as well as an opportunity to work within the R programming environment, which has become widely used for data science in both industry and academia (no prior knowledge of R is needed to attend this workshop).';
  $workshopD->company = 'Capital One';
  $workshopD->location = 'Computer Lab B';
  $workshopD->time = '15:00-15:45';
  $workshopD->image = 'img/workshops/';

$workshopE = new Workshop();
$workshopE->name = 'Kittens + Gifs = Smiles';
  $workshopE->workshop_host = 'Katherine';
  $workshopE->company = 'Code Club';
  $workshopE->title = 'Code on the web!';
  $workshopE->description = 'Featuring kitten gifs and birthday cards, this workshop is an introduction to the language used for writing web pages, aimed at complete beginners or novices';
  $workshopE->location = 'Computer Lab B';
  $workshopE->time = '16:00-16:45';
  $workshopE->image = '';

// need todo
$workshopF = new Workshop();
$workshopF->name = 'Programming 101';
  $workshopF->workshop_host = 'Jamie Tanna';
  $workshopF->company = 'HackSoc';
  $workshopF->title = '';
  $workshopF->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas facere consequatur quidem cupiditate sequi sed soluta adipisci! Dolorem nihil ex, necessitatibus doloribus vero facilis, esse fuga tempora. Sint consequuntur, porro.';
  $workshopF->location = 'Computer Lab A';
  $workshopF->time = '16:00-16:45';
  $workshopF->image = '';

$workshopG = new Workshop();
$workshopG->name = 'Top Secret Tech';
  $workshopG->workshop_host = 'Paula';
  $workshopG->company = 'DSTL';
  $workshopG->location = 'Seminar Room B';
  $workshopG->title = 'Shhhhhhh';
  $workshopG->description = 'The World of Dstl/Defence Science and Technology Outside the Lab/Science and Technology on the battlefield (I don’t focus too much on the battlefield though). I’m a (graduate) computer scientist in the Counter Terrorism and Security division at the Defence Security Technology Laboratory of MOD.';
  $workshopG->time = '16:00-16:45';
  $workshopG->image = '';

$workshopH = new Workshop();
$workshopH->name = 'Sex Matters';
  $workshopH->workshop_host = 'Sheryasi';
  $workshopH->company = 'Public Speaking Society';
  $workshopH->title = '';
  $workshopH->description = 'In the age where equality is of such great importance, we are still very far away from equality of women in technology. This talk aims to give guidance to women on how to build confidence and stand out through public speaking and leadership in order to breach the gap between men and women in technology.';
  $workshopH->location = 'Seminar Room A';
  $workshopH->time = '17:00-17:45';
  $workshopH->image = '';

$workshopI = new Workshop();
$workshopI->name = 'Innovating Tech';
  $workshopI->workshop_host = 'Holly & Yujin';
  $workshopI->company = 'UsTwo';
  $workshopI->location = 'Seminar Room A';
  $workshopI->title = '';
  $workshopI->description = 'Ustwo is a digital product studio. We work on our own products as well as for clients. This workshop will give you a chance to try out some of the tools we use to ideate to help us translate problems into digital products. It will be fast-paced, interactive and fun!';
  $workshopI->time = '17:00-17:45';
  $workshopI->image = '';

$workshopJ = new Workshop();
$workshopJ->name = 'IoTPong';
  $workshopJ->workshop_host = 'Houman';
  $workshopJ->company = 'UsTwo';
  $workshopJ->title = '';
  $workshopJ->description = 'Using the Intel Edison to run a fun little demo of pong. Participants will assemble, write and load part the code required to play 2 player pong using the Edison.';
  $workshopJ->location = 'Computer Lab A';
  $workshopJ->time = '17:00-17:45';
  $workshopJ->image = '';


$workshopK = new Workshop();
$workshopK->name = 'Develop This';
  $workshopK->workshop_host = 'Cedric';
  $workshopK->company = '8thlight';
  $workshopK->title = 'Software Development as a Craft: Lessons from Mentees.';
  $workshopK->description = 'Hear and learn from the lessons of software developers who strived to improve their craft. Talk given by Cedric Kisema, a Resident apprentice at 8thLight. When not improving he’s own craft, Cedric spends time helping others improve theirs.';
  $workshopK->location = 'Seminar Room B';
  $workshopK->time = '17:00-17:45';
  $workshopK->image = '';



$workshops = array(
  $workshopA,
  $workshopC,
  $workshopB,
  $workshopD,
  $workshopE,
  $workshopF,
  $workshopG,
  $workshopH,
  $workshopI,
  $workshopJ,
  $workshopK);


foreach ($workshops as $workshop) {
?>

    <li class="list-item">
      <div class="list-content">
        <h2><?php echo $workshop->name; ?></h2>
        <?php if($workshop->title !== "") { echo "<h3>" . $workshop->title . "</h3>"; } ?>
        <h3><?php echo $workshop->workshop_host . ", " . $workshop->company; ?></h3>
        <p><?php echo $workshop->description; ?></p>
        <p><b><?php echo $workshop->time; ?></b> <?php echo $workshop->location; ?></p>
      </div>
    </li>

<?php
}

?>

</ul>
</section>
