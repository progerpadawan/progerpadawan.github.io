<!DOCTYPE html>
<html type="en">
    <head>
        <title>Programming Blog - About Me</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="list.css" />
		<link rel="shortcut icon" href="logo16x16e.png" type="image/x-icon">
		<h1>Programming Blog</h1>
		<img src="../logo.png" class="logo" alt="Logo">
    	<a href="mailto:max.m.zelensky@gmail.com"><img src ="../mail.png" class="mail" alt="mail"></a>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.html">Main</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="aboutme.html">About Me</a></li>
                </ul>
            </nav>
        </header>
        <main>
			<h2 id="ueber">About me </h2>
		<p>
		Hi, Im Max <br>
		Currently I`m a student of <a href="https://tbz.ch/" target="_blank"> Technical High School Zurich</a> in Switzerland <br>
        and in the same time I have practise in SoXes GmbH.
		</p>
<?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $text = $_POST["text"];
      $date = date("h:i:sa [d.m.Y]");
      $ip = $_SERVER["REMOTE_ADDR"];
      $info = $_SERVER['HTTP_USER_AGENT'];
      $br = "\n";
      $line = "-------------------------";

      $log = file_put_contents('logs.txt', $line.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "date: " . $date.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "ip: " . $ip.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "browser info: " . $info.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "name: " . $name.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "email: " . $email.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "subject: " . $subject.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', "message: " . $text.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', $line.PHP_EOL , FILE_APPEND | LOCK_EX);
      $log = file_put_contents('logs.txt', $br.PHP_EOL , FILE_APPEND | LOCK_EX);
     ?>
			<p><a href="index.html">Back to start</a></p>
        </main>
    </body>
    <footer>

      <script>
      window.onload = function() {
      startTime();
      };
      </script>

      <div class="nixcont">

          <div class="nixpair">

            <div class="nixbg">
              <div id="nix_h1_0" class="nix">0</div>
              <div id="nix_h1_1" class="nix">1</div>
              <div id="nix_h1_2" class="nix">2</div>
              <div id="nix_h1_3" class="nix">3</div>
              <div id="nix_h1_4" class="nix">4</div>
              <div id="nix_h1_5" class="nix">5</div>
              <div id="nix_h1_6" class="nix">6</div>
              <div id="nix_h1_7" class="nix">7</div>
              <div id="nix_h1_8" class="nix">8</div>
              <div id="nix_h1_9" class="nix">9</div>
            </div>

            <div class="nixbg">
              <div id="nix_h2_0" class="nix">0</div>
              <div id="nix_h2_1" class="nix">1</div>
              <div id="nix_h2_2" class="nix">2</div>
              <div id="nix_h2_3" class="nix">3</div>
              <div id="nix_h2_4" class="nix">4</div>
              <div id="nix_h2_5" class="nix">5</div>
              <div id="nix_h2_6" class="nix">6</div>
              <div id="nix_h2_7" class="nix">7</div>
              <div id="nix_h2_8" class="nix">8</div>
              <div id="nix_h2_9" class="nix">9</div>
            </div>

          </div>


          <div class="nixpair">

            <div class="nixbg">
              <div id="nix_m1_0" class="nix">0</div>
              <div id="nix_m1_1" class="nix">1</div>
              <div id="nix_m1_2" class="nix">2</div>
              <div id="nix_m1_3" class="nix">3</div>
              <div id="nix_m1_4" class="nix">4</div>
              <div id="nix_m1_5" class="nix">5</div>
              <div id="nix_m1_6" class="nix">6</div>
              <div id="nix_m1_7" class="nix">7</div>
              <div id="nix_m1_8" class="nix">8</div>
              <div id="nix_m1_9" class="nix">9</div>
            </div>

            <div class="nixbg">
              <div id="nix_m2_0" class="nix">0</div>
              <div id="nix_m2_1" class="nix">1</div>
              <div id="nix_m2_2" class="nix">2</div>
              <div id="nix_m2_3" class="nix">3</div>
              <div id="nix_m2_4" class="nix">4</div>
              <div id="nix_m2_5" class="nix">5</div>
              <div id="nix_m2_6" class="nix">6</div>
              <div id="nix_m2_7" class="nix">7</div>
              <div id="nix_m2_8" class="nix">8</div>
              <div id="nix_m2_9" class="nix">9</div>
            </div>

          </div>


          <div class="nixpair">

            <div class="nixbg">
              <div id="nix_s1_0" class="nix">0</div>
              <div id="nix_s1_1" class="nix">1</div>
              <div id="nix_s1_2" class="nix">2</div>
              <div id="nix_s1_3" class="nix">3</div>
              <div id="nix_s1_4" class="nix">4</div>
              <div id="nix_s1_5" class="nix">5</div>
              <div id="nix_s1_6" class="nix">6</div>
              <div id="nix_s1_7" class="nix">7</div>
              <div id="nix_s1_8" class="nix">8</div>
              <div id="nix_s1_9" class="nix">9</div>
            </div>

            <div class="nixbg">
              <div id="nix_s2_0" class="nix">0</div>
              <div id="nix_s2_1" class="nix">1</div>
              <div id="nix_s2_2" class="nix">2</div>
              <div id="nix_s2_3" class="nix">3</div>
              <div id="nix_s2_4" class="nix">4</div>
              <div id="nix_s2_5" class="nix">5</div>
              <div id="nix_s2_6" class="nix">6</div>
              <div id="nix_s2_7" class="nix">7</div>
              <div id="nix_s2_8" class="nix">8</div>
              <div id="nix_s2_9" class="nix">9</div>
            </div>

          </div>

        </div>

         <script src="index.js"></script>

    </footer>
</html>
<!--https://caniuse.com/#search=css%20grid
https://www.imgonline.com.ua/replace-white-background-with-transparent.php-->