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
$workshopA->name = 'Get Appy';
  $workshopA->workshop_host = 'Louise';
  $workshopA->company = 'BCS Women';
  $workshopA->location = 'Computer Lab A';
  $workshopA->description = "This workshop uses MIT App Inventor, an innovative beginner's introduction to programming and app creation that transforms the complex language of text-based coding into visual, drag-and-drop building blocks. The simple graphical interface grants even an inexperienced novice the ability to create a basic, fully functional app within an hour or less.  During the workshop you will create a ‘Meow’ app either on your Android device or on an emulator.";
  $workshopA->time = '15:00-15:45';

$workshopB = new Workshop();
$workshopB->name = 'Sounding Out';
  $workshopB->workshop_host = 'Sonia';
  $workshopB->company = 'Stiff Kittens';
  $workshopB->location = 'Seminar Room B';
  $workshopB->description = "Sonia is a local DJ in Nottingham and pioneer for helping more women take the step into the sound engineering scene. Sonia is currently establishing a series of networks and beginner classes in Nottingham for women who want to get on the decks. At #WIT16 Sonia will be running a workshop on where to start with DJing. Attendess will get the chance to get their hands on some vinyl and make some noise in this interactive session.";
  $workshopB->time = '15:00-15:45';

$workshopC = new Workshop();
$workshopC->name = 'What the Hack';
  $workshopC->workshop_host = 'Zahra';
  $workshopC->company = 'MLH';
  $workshopC->location = 'Seminar Room A';
  $workshopC->description = "Major League Hacking is the student hackathon league. Each year, 75,000+ developers, designers, and makers attend 200+ official MLH hackathons in the United States, Canada, Mexico and Europe. Learn about what Hackathons are and how you can meet like-minded people, learn new things, and create cool technology. MLH EU started in Nottingham at HackNotts and are supporting WIT for the second year running.";
  $workshopC->time = '15:00-15:45';

$workshopD = new Workshop();
$workshopD->name = 'R U OK?';
  $workshopD->workshop_host = 'The 3 Rmigos - Sarah J, Sarah P & Carola';
  $workshopD->description = 'Digging for Data Insight with R - A chance to experience first-hand how to derive insight from data with cleaning, visualisation and classification techniques, as well as an opportunity to work within the R programming environment, which has become widely used for data science in both industry and academia (no prior knowledge of R is needed to attend this workshop).';
  $workshopD->company = 'Capital One';
  $workshopD->location = 'Computer Lab B';
  $workshopD->time = '15:00-15:45';

$workshopE = new Workshop();
$workshopE->name = 'Kittens + Gifs = Smiles';
  $workshopE->workshop_host = 'Katherine';
  $workshopE->company = 'Code Club';
  $workshopE->description = 'Code on the web! Featuring kitten gifs and birthday cards, this workshop is an introduction to the language used for writing web pages, aimed at complete beginners or novices';
  $workshopE->location = 'Computer Lab B';
  $workshopE->time = '16:00-16:45';

$workshopF = new Workshop();
$workshopF->name = 'Programming 101';
  $workshopF->workshop_host = 'Jamie Tanna';
  $workshopF->company = 'HackSoc';
  $workshopF->description = 'In the age where video games focus on graphics and fast-pased gameplay, it is sometimes nice to go back to basics. Learn Python Programming by building your first text-based adventure game. No coding knowledge required.';
  $workshopF->location = 'Computer Lab A';
  $workshopF->time = '16:00-16:45';

$workshopG = new Workshop();
$workshopG->name = 'Top Secret Tech';
  $workshopG->workshop_host = 'Paula';
  $workshopG->company = 'DSTL';
  $workshopG->location = 'Seminar Room B';
  $workshopG->description = 'Paula (previous WIT organiser) is a graduate computer scientist in the Counter Terrorism and Security division at the Defence Security Technology Laboratory of The Ministry Of Defence and will be giving a talk on the World of Defence Science and Technology outside of the Lab.';
  $workshopG->time = '16:00-16:45';

$workshopH = new Workshop();
$workshopH->name = 'Sex Matters';
  $workshopH->workshop_host = 'Sheryasi';
  $workshopH->company = 'Public Speaking Society';
  $workshopH->description = 'In the age where equality is of such great importance, we are still very far away from equality of women in technology. This talk aims to give guidance to women on how to build confidence and stand out through public speaking and leadership in order to breach the gap between men and women in technology.';
  $workshopH->location = 'Seminar Room A';
  $workshopH->time = '16:00-16:45';

$workshopI = new Workshop();
$workshopI->name = 'Innovating Tech';
  $workshopI->workshop_host = 'Holly & Yujin';
  $workshopI->company = 'UsTwo';
  $workshopI->location = 'Seminar Room A';
  $workshopI->description = 'Ustwo is a digital product studio known for many innovative applications, including the award winning Monument Valley app. This workshop will give you a chance to try out some of the tools used to ideate (a crucial part of the technology creation process) and help translate problems into digital products. It will be fast-paced, interactive and fun!';
  $workshopI->time = '17:00-17:45';

$workshopJ = new Workshop();
$workshopJ->name = 'IoT Pong';
  $workshopJ->workshop_host = 'Houman';
  $workshopJ->company = 'Intel Software';
  $workshopJ->description = 'Learn about the Internet of Things using the Intel Edison to run a fun demo of pong. Participants will assemble, write and load part the code required to play a 2 player pong game using the Edison (a tiny Computer-on-module offered by Intel as a development system for Internet of Things and wearable devices). No prior knowledge of code required';
  $workshopJ->location = 'Computer Lab A';
  $workshopJ->time = '17:00-17:45';


$workshopK = new Workshop();
$workshopK->name = 'Develop This';
  $workshopK->workshop_host = 'Cedric';
  $workshopK->company = 'Developer Mentor';
  $workshopK->description = 'Software Development as a Craft: Lessons from Mentees. - Hear and learn from the lessons of software developers who strived to improve their craft. Talk given by Cedric Kisema, a Resident apprentice at 8thLight. When not improving he’s own craft, Cedric spends time helping others improve theirs.';
  $workshopK->location = 'Seminar Room B';
  $workshopK->time = '17:00-17:45';

$workshopL = new Workshop();
$workshopL->name = 'R U OK?';
  $workshopL->workshop_host = 'The 3 Rmigos - Sarah J, Sarah P & Carola';
  $workshopL->description = 'Digging for Data Insight with R - A chance to experience first-hand how to derive insight from data with cleaning, visualisation and classification techniques, as well as an opportunity to work within the R programming environment, which has become widely used for data science in both industry and academia (no prior knowledge of R is needed to attend this workshop).';
  $workshopL->company = 'Capital One';
  $workshopL->location = 'Computer Lab B';
  $workshopL->time = '17:00-17:45';



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
  $workshopK,
  $workshopL);


foreach ($workshops as $workshop) {
?>

    <li class="list-item">
      <div class="list-content">
        <h2><?php echo $workshop->name; ?></h2>
        <h3><?php echo $workshop->workshop_host; ?></h3>
        <h3><?php echo $workshop->company; ?></h3>
        <p><?php echo $workshop->description; ?></p>
        <p><b><?php echo $workshop->time; ?></b> <?php echo $workshop->location; ?></p>
      </div>
    </li>

<?php
}

?>

</ul>
</section>