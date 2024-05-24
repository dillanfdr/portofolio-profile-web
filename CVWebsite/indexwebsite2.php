<?php 
  $name = "Dilla";
  $name_first = "Nur Fadillah";
  $name_last = "Dwi Rahma";
  $name_website = "BLOEWBEWY";
  $about = ["Education", "Experience", "Skill", "Hobbies & Interest"];
  $education = [
    "years" => ["2010 - 2016", "2016 - 2019", "2019 - 2022", "2022 - Now"],
    "school" => ["SDN Mojosari", "SMPN 1 Ngoro", "SMAN 1 Mojosari", "UPN \"Veteran\" Jawa Timur"],
  ];
  $exp_years = ["2022", "2022 - 2023", "2023", "2023 - 2024"];
  $skill = ["Communication", "Time Management", "Teamwork", "Professional"];
  $hobbies = [
    "item" => ["Painting", "Listen to Music", "Cooking", "Vloging", "Dance"],
    "rate" => ["8.9/10", "9/10", "9.2/10", "8.9/10", "9/10"],
  ];
  $contact_info = array(
    array(
      "image" => "picture/telp.png",
      "alt" => "Phone",
      "link" => "https://wa.me/+6281615534635",
      "content" => "+62 816-1553-4635"
    ),
    array(
      "image" => "picture/message.png",
      "alt" => "Email",
      "link" => "http://nurfadillahdwirahma@gmail.com",
      "content" => "nurfadillahdwirahma@gmail.com"
    )
  );
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Welcome to Bloewbewy</title>
		<link rel="stylesheet" href="style.css" />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="
		https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
		"></script>
	</head>

	<body>
		<header>
			<h2><a href="indexwebsite1.php"><?= $name_website ?></a></h2>
			<h5><a href=#about>About</a></h5>
			<h5><a href=#contact>Contact</a></h5>
		</header>

		<div id="about">
			<div id="main">
			<div class="left  opacity-0">
					<h1>
          <?= $name_first ?> <br />
					<?= $name_last ?>
					</h1>
					<h2>
						Hi there! My nickcame is Dilla. I am a 20 years old. I was born in Mojokerto on June 4th, 2003, with my last
						educational background being from high school in 2022. Currently, I am pursuing higher education at one of
						the universities in Surabaya, namely UPN "Veteran" Jawa Timur, majoring in Informatics. I have good
						communication skills and I am currently deepening my knowledge in communication and informatics, especially
						in design.
					</h2>
				</div>
			</div>
			<div class="about-right opacity-0">
				<ul>
					<li>
						<img src="picture/icon edu.png" alt="" />
						<a href="#education"><p><?= $about[0] ?></p></a>
					</li>
					<li>
						<img src="picture/icon exp.png" alt="" />
						<a href="#experience"><p><?= $about[1] ?></p></a>
					</li>
					<li>
						<img src="picture/icon skill.png" alt="" />
						<a href="#skill"><p><?= $about[2] ?></p></a>
					</li>
					<li>
						<img src="picture/icon hobby.png" alt="" />
						<a href="#hobbies"><p><?= $about[3] ?></p></a>
					</li>
				</ul>
			</div>
		</div>

		<div id="education">
			<img src="picture/edu1.png" alt="">
			<h3><?= $about[0] ?></h3>
			<div class="timeline">
				<div class="timeline-item">
					<p class="timeline-item-text"><?= $education["years"][0] ?></p>
					<p  class="timeline-item-title"><?= $education["school"][0] ?></p>
				</div>
				<div class="timeline-item">
					<p class="timeline-item-text"><?= $education["years"][1] ?></p>
					<p class="timeline-item-title"><?= $education["school"][1] ?></p>
				</div>
				<div class="timeline-item">
					<p class="timeline-item-text"><?= $education["years"][2] ?></p>
					<p class="timeline-item-title"><?= $education["school"][2] ?></>
				</div>
				<div class="timeline-item">
					<p class="timeline-item-text"><?= $education["years"][3] ?></p>
					<p class="timeline-item-title"><?= $education["school"][3] ?></p>
				</div>
			</div>
		</div>


		<div id="experience">
			<img src="picture/exp1.png" alt="">
			<h3><?= $about[1] ?></h3>
			<div class="experience-content">
				<ul class="experience-left">
          <?php
            foreach ($exp_years as $year) {
              echo "<li>$year</li>";
            }
          ?>
				</ul>
				<div class="experience-right">
					<p>Member of Event Division at Conection Day 2022 at UPN “Veteran” Jawa Timur
					</p>
					<p>Member of Global Language Club at UPN “Veteran” Jawa Timur
					</p>
					<p>Chief Comitte of "Ospek & Hampers Kit 2023" at HIMATIFA UPN "Veteran" Jawa Timur
					</p>
					<p>Member of Consumption Division of "Safari Kampus 2023" at HIMATIFA UPN "Veteran" Jawa Timur
					</p>
					<p>Mentor of "Building Character Day 2023" at HIMATIFA UPN "Veteran" Jawa Timur
					</p>
					<p>Treasure of "Kunjung Panti 2023" at HIMATIFA UPN "Veteran" Jawa Timur
					</p>
					<p>Member of Creative Economies Department at HIMATIFA UPN “Veteran” Jawa Timur</p>
				</div>
			</div>
		</div>

		<div id="skill">
			<img src="picture/skill1.png" alt="">
			<h3><?= $about[2] ?></h3>
			<div class="skill-content">
				<div class="skill-right">
					<p><?= $skill[0] ?></p>
					<div class="skill-main"></div>
					<div class="skill1"></div>
					<p><?= $skill[1] ?></p>
					<div class="skill-main"></div>
					<div class="skill2"></div>
				</div>
				<div class="skill-left">
					<p><?= $skill[2] ?></p>
					<div class="skill-main"></div>
					<div class="skill3"></div>
					<p><?= $skill[3] ?></p>
					<div class="skill-main"></div>
					<div class="skill4"></div>
				</div>
			</div>
		</div>

		<div id="hobbies">
			<img src="picture/hobby1.png" alt="">
			<h3><?= $about[3] ?></h3>
			<div class="hobbies-content">
				<div class="hobbies-top">
          <?php
            $i = 0;
            foreach ($hobbies["item"] as $hobby) {
              if ($i < 3) {
                echo "<p>$hobby</p>" . "<br>";
                $i++;
              }
            }
          ?>
				</div>
				<div class="hobbies-top-icon">
				<div class="hobbies-top-icon1"></div>
				<div class="hobbies-top-icon2"></div>
				<div class="hobbies-top-icon3"></div>
				</div>
				<div class="hobbies-top-rate">
					<p class="hobbies-top-rate1"><?= $hobbies["rate"][0] ?></p>
					<p class="hobbies-top-rate2"><?= $hobbies["rate"][1] ?></p>
					<p class="hobbies-top-rate3"><?= $hobbies["rate"][2] ?></p>
				</div>
				<div class="hobbies-bottom">
          <?php
            $i = 0;
            foreach ($hobbies["item"] as $hobby) {
              if ($i >= 3 && $i < 5) {
                echo "<p>$hobby</p>" . "<br>";
              }
              $i++;
            }
          ?>
				</div>
				<div class="hobbies-bottom-icon">
					<div class="hobbies-bottom-icon4"></div>
					<div class="hobbies-bottom-icon5"></div>
				</div>
				<div class="hobbies-bottom-rate">
					<p class="hobbies-bottom-rate4"><?= $hobbies["rate"][3] ?></p>
					<p class="hobbies-bottom-rate5"><?= $hobbies["rate"][4] ?></p>
				</div>
			</div>
		</div>

		<div id="contact">
			<h1>Contact Me</h1>
      <div class="content">
        <table class="contact-table">
          <?php foreach ($contact_info as $row): ?>
          <tr>
            <td><img src="<?php echo $row['image']; ?>" alt="<?php echo $row['alt']; ?>" class="img-1"></td>
            <td>
              <?php if (isset($row['link'])): ?>
              <a href="<?php echo $row['link']; ?>">
              <?php endif; ?>
                <p><?php echo $row['content']; ?></p>
              <?php if (isset($row['link'])): ?>
              </a>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>

    <script src="./style.js"></script>
	</body>
</html>
