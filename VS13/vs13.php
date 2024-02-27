<!DOCTYPE html>
<html>
<head>
    <style>
        *
        {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        body
        {
            background-image: url(1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #d1
        {
            text-align: center; 
            line-height: 20px;
            width: 100%;
            height: 70px;
            color: white;
            background-color: black;
        }

        #d2
        {
            padding-top: 40px;
            color: white;
            font-size: 30px;
            text-transform: capitalize;
            font-family: serif;
            text-align: center;
        }

        .p1
        {
            text-align: center;
            margin: 10px 0px 18px 0px;
            font-family: serif;
            font-size: 23px;
        }
    </style>
    <title>APP</title>
    <script language="javascript">
        function validateForm() {
            var name = document.getElementById("g1").value;
            var dob = document.getElementById("g2").value;
            var place = document.getElementById("g3").value;
            var time = document.getElementById("g4").value;

            if (name === "" || dob === "" || place === "" || time === "") {
                alert("Please fill in all fields");
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="d1">
        <h1>Astrology Prediction</h1>
        <br>
        <h2>"Unlock Your Celestial Destiny: Explore Personalized Astrology Prediction"</h2>
    </div>
    <div id="d2">
        <form method="post" onsubmit="return validateForm()">
            <p>enter your name</p>
            <input type="text" placeholder="Name in caps" name="f1" id="g1" class="p1">
            <p>enter your DOB</p>
            <input type="date" name="f2" id="g2" class="p1">
            <p>enter your birth place</p>
            <input type="text" placeholder="enter birth place" name="f3" id="g3" class="p1">
            <p>enter your birth time</p>
            <input type="text" placeholder="enter birth time" name="f4" id="g4" class="p1">
            <br>
            <input type="submit" name="f5" id="g5" class="p1">
        </form>
        <?php
        if($_POST)
        {
          $a1=$_POST['f2'];
         
          $a = "$a1";
          $a = str_replace("-", "", $a);
          
          
            $total=0;
            $tot1=0;
            while($a>0)
            {
              $b=$a%10;
              $total=$total+$b;
              $a=$a/10;
            } 
           
            
                  if($total>=10)
            {
              while($total>0)
              {
                  $c=$total%10;
                  $tot1=$tot1+$c;
                  $total=$total/10;
              }
              echo $tot1;
            }
            else{
              echo $total;
            }
            echo "<br>";
            switch($tot1)
            {
                case 1:
                    echo "AWESOME,Your Lucky Number is 1";
                    echo "<br>";
                    echo "SUN:Someone with a kingly demeanor,possessing,leadership quality";
                    echo "<br>";
                    echo "and occasionally diplaying egoistic tendencies.They may lead a";
                    echo "<br>";
                    echo "lifestyle characteristics by assertiveness,seeking position of authority and";
                    echo "<br>";
                    echo "pursuing recognition.";
                    break;
                case 2:
                    echo "AWESOME,Your Lucky Number is 2";
                    echo "<br>";
                    echo "MOON: Exhibiting qualities of a queen, being in tune with";
                    echo "<br>";
                    echo "emotions and nurturing instincts. Their lifestyle";
                    echo "<br>";
                    echo "may involve prioritizing emotional connections, seeking";
                    echo "<br>";
                    echo "comfort, and nurturing relationships.";
                    break;
                case 3:
                    echo "AWESOME,Your Lucky Number is 3";
                    echo "<br>";
                    echo "JUPITER: Like a guru, minister, or counselor, they are creative";
                    echo "<br>";
                    echo "and hungry for knowledge. Their lifestyle may revolve around";
                    echo "<br>";
                    echo "sharing wisdom, seeking new experiences, and";
                    echo "<br>";
                    echo "constantly learning.";
                    break;
                case 4:
                    echo "AWESOME,Your Lucky Number is 4";
                    echo "<br>";
                    echo "RAHU: A bit mischievous, akin to the shadow of the Sun, and adept";
                    echo "<br>";
                    echo "at planning. They may lead a lifestyle marked by strategic thinking,";
                    echo "<br>";
                    echo "calculated moves, and sometimes veering into deception.";
                    break;
                case 5:
                    echo "AWESOME,Your Lucky Number is 5";
                    echo "<br>";
                    echo "MERCURY: Similar to a prince, they excel in accounting and maintaining mental";
                    echo "<br>";
                    echo "and emotional balance. Their lifestyle may involve intellectual pursuits,";
                    echo "<br>";
                    echo "communication, and maintaining equilibrium in various aspects of life.";
                    break;
                case 6:
                    echo "AWESOME,Your Lucky Number is 6";
                    echo "<br>";
                    echo "VENUS: Comparable to a guru or bad minister, skilled in strategy and";
                    echo "<br>";
                    echo "indulgence in luxury.Their lifestyle may include appreciation for beauty,";
                    echo "<br>";
                    echo "artistry, cultivating relationships, and enjoying the finer things in life.";
                    break;
                case 7:
                    echo "AWESOME,Your Lucky Number is 7";
                    echo "<br>";
                    echo "KETU: Often operating in the shadows like the Moon's counterpart,";
                    echo "<br>";
                    echo "they can be secretive and adept at facing challenges. Their lifestyle";
                    echo "<br>";
                    echo "may involve introspection, seeking hidden knowledge, and";
                    echo "<br>";
                    echo "navigating life's mysteries.";
                    break;
                case 8:
                    echo "AWESOME,Your Lucky Number is 8";
                    echo "<br>";
                    echo "SATURN: Taking on the role of a judge or servant, they";
                    echo "<br>";
                    echo "understand struggle and are adept at managing money.";
                    echo "<br>";
                    echo "Their lifestyle may be marked by discipline, responsibility,";
                    echo "<br>";
                    echo "hard work, and prudent financial management.";
                    break;
                case 9:
                    echo "AWESOME,Your Lucky Number is 9";
                    echo "<br>";
                    echo "MARS: Like a commander, they embody principles of humanity,";
                    echo "<br>";
                    echo "though they may struggle with anger. Their lifestyle may involve";
                    echo "<br>";
                    echo "taking decisive action, championing causes,";
                    echo "<br>";
                    echo "and upholding honor and integrity in all endeavors.";
                    break;
            }
          }
          else{
              echo "invalid";
          }


              ?>
    </div>
</body>
</html>
    