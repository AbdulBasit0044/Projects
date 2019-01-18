<?php

//including the database connection file
include_once(".\config\config.php");

 // using mysqli_query instead
//while($records = mysqli_fetch_array($result))
//var_dump($records);
?>
<!doctype>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cricket home.css" />
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/table.css">
  <script>function displayWinner(score1,team1,score2,team2)
  { 
    if (score1>score2)
    {
      document.getElementById('displaywinner').innerHTML = "<h3 style='color:blue;'>" + team1 + " Won by " + (score1-score2) + " runs!</h3> ";
    }
    else if (score1 < score2)
        document.getElementById('displaywinner').innerHTML = "<h3>" + team2 + " Won by " + (score2-score1) + " runs!<h3>";
    else 
        document.getElementById('displaywinner').innerHTML = "<h3>" + "Match Drawn! </h3>";
    
  }
  </script>
</head>

<body>

	<div id='cssmenu-nav' class="col-m-12 col-12">
    <ul>
       <li><a href='..\index.html'><span>Home</span></a></li>
       <li class='active has-sub'><a href='Cricket Home.php'><span>Cricket</span></a>
          <ul>
             <li class='has-sub'><a href='Cricket Home.php'><span>Today Matches</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details1.php'><span>Highlights</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='#'><span>International</span></a>
                <ul>
                   <li><a href='Cricket Home.php'><span>Upcoming</span></a></li>
                   <li class='last'><a href='details2.php'><span>Completed</span></a></li>
                </ul>
             <li class='has-sub'><a href='Cricket Home.php'><span>Domestic</span></a>
                <ul>
                   <li><a href='Cricket Home.php'><span>Upcoming</span></a></li>
                   <li class='last'><a href='details3'><span>Completed</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='details1'><span>Leagues</span></a>
                <ul>
                   <li><a href='Cricket Home.php'><span>Upcoming</span></a></li>
                   <li class='last'><a href='details2'><span>Completed</span></a></li>
                </ul>
             </li>
             </li>
          </ul>
       </li>
       <li class='active has-sub'><a href='#'><span>Football</span></a>
          <ul>
             <li class='has-sub'><a href='#'><span>Live</span></a>
                <ul>
                   <li><a href='#'><span>Highlights</span></a></li>
                   <li class='last'><a href='#'><span>News</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='#'><span>Recent Matches</span></a>
                <ul>
                   <li><a href='#'><span>Results</span></a></li>
                   <li class='last'><a href='#'><span>Points Table</span></a></li>
                </ul>
             </li>
              <li class='has-sub'><a href='#'><span>Upcoming Matches</span></a>
             </li>
          </ul>
       </li>
        <li class='last'><a href='#'><span>Entertainment News</span></a></li>
        <li class='last'><a href='#'><span>Contact</span></a></li>
        <li class='last'><a href='#'><span>Help</span></a></li>
    </ul>
  </div>


<div class="clear"></div>
<div class="row1">

  <div id='cssmenu' class="col-3 col-m-3 col-sm-2 sidenav leftmenu">
    <ul>
       <li class='active'><a href='Cricket Home.php'><span>Live</span></a></li>
       <li class='has-sub'><a href='International.php'><span>International</span></a>
          <ul>
             <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details1'><span>News</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details3.php'><span>News</span></a></li>
                </ul>
             <li><a href='#'><span>Upcoming</span></a>
             </li>
          </ul>
       </li>
       <li class='has-sub'><a href='Domestic.php'><span>Domestic</span></a>
          <ul>
             <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details1'><span>News</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details3.php'><span>News</span></a></li>
                </ul>
             <li><a href='#'><span>Upcoming</span></a>
             </li>
          </ul>
       </li>
       <li class='has-sub'><a href='T20League.php'><span>T20 League</span></a>
          <ul>
             <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details1'><span>News</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details3.php'><span>News</span></a></li>
                </ul>
             <li><a href='#'><span>Upcoming</span></a>
             </li>
          </ul>
       </li>
       <li class='has-sub'><a href='T10League.php'><span>T10 League</span></a>
          <ul>
             <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details1'><span>News</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
                <ul>
                   <li><a href='score.php'><span>Scorecard</span></a></li>
                   <li class='last'><a href='details3.php'><span>News</span></a></li>
                </ul>
             <li><a href='#'><span>Upcoming</span></a>
             </li>
          </ul>
       </li>
    </ul>
  </div>  


<div class="scoreheading col-9 col-m-12" style=" padding: 20px;"><u><h2>Scorecard:</h2></u>
  <div id="displaywinner"></div>
<div style="overflow-x:auto; width: 800px; padding: 20px;">
  
  <?php

  $teamsarray = mysqli_query($mysqli, "SELECT teamName FROM teams;");
  $team=array();
  while($res = mysqli_fetch_array($teamsarray)) {
  	array_push($team, $res['teamName']);
  }

  if ($team[0]) {
    echo "<hr>";
    echo "<h2>".$team[0]." ". "Batting"."</h2>";
    echo "<hr>";
  
  echo "<table border='0'>";
  echo "<header>";
  echo "<th>Batsman</th>";
  echo "<th></th>";
  echo "<th>Score</th>";
  echo "<th>Balls</th>";
  echo "<th>4s</th>";
  echo "<th>6s</th>";
  echo "<th>SR</th>";
  echo "</header>";
  
  if ($team[0]=="Pakistan") {
    $team1id=1;
    $team2id=2;
  }
  else{
    $team1id=2;
    $team2id=1;
  }
    $bat = mysqli_query($mysqli, "SELECT * FROM ct2017final JOIN teams ON ct2017final.teamID=teams.teamID join batting on 
  teams.teamID=batting.teamID where batting.teamID = $team1id and batting.B<>'0';");
    $team0totalscore=0;
    while($res = mysqli_fetch_array($bat)) {
      echo "<tr>";
      echo "<td>".$res['playerName']."</td>";
      echo "<td>".$res['howsOut']."</td>";
      echo "<td>".$res['R']."</td>";
      echo "<td>".$res['B']."</td>";
      echo "<td>".$res['4s']."</td>";
      echo "<td>".$res['6s']."</td>";
      $SR=round(($res['R']/$res['B'])*100.0,2);
      echo "<td>".$SR."</td>";
      echo "</tr>";

      $team0totalscore=$team0totalscore+$res['R'];
    }
    $extrasRes=mysqli_query($mysqli,"SELECT extras FROM ct2017final where teamID=$team1id;");
    while($res = mysqli_fetch_array($extrasRes)) {
    $extras=$res['extras'];
  }
  $team0totalscore=$team0totalscore+$extras;
  echo "<tr>";
  echo "<td>"."<b>Extras: ".$extras."</td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td colspan='2'>"."<b>Total Score:    ".$team0totalscore."</td>";
  echo "</tr>";
  
  echo "</table>";
    
    echo "<h4>"."Did not bat:"."</h4>";
    $notbat=mysqli_query($mysqli, "SELECT * FROM ct2017final JOIN teams ON ct2017final.teamID=teams.teamID join batting on 
  teams.teamID=batting.teamID where batting.teamID = $team1id and batting.B='0';");
    while ($res=mysqli_fetch_array($notbat)) {
      echo $res['playerName'].", ";
    }
    echo "<hr>";
    echo "<h2>".$team[1]." ". "Bowling"."</h2>";
    echo "<hr>";

    echo "<table border='0'>";
    echo "<header>";
    echo "<th>Bowler</th>";
    echo "<th>Overs</th>";
    echo "<th>Maiden</th>";
    echo "<th>Runs</th>";
    echo "<th>Wickets</th>";
    echo "<th>NB</th>";
    echo "<th>WD</th>";
    echo "<th>Economy</th>";
    echo "</header>";


    $ball = mysqli_query($mysqli, "SELECT * FROM ct2017final JOIN teams ON ct2017final.teamID=teams.teamID join bowling on 
      teams.teamID=bowling.teamID where bowling.teamID = $team2id;");
      while($res = mysqli_fetch_array($ball)) {
        echo "<tr>";
        echo "<td>".$res['playerName']."</td>";
        echo "<td>".$res['O']."</td>";
        echo "<td>".$res['M']."</td>";
        echo "<td>".$res['R']."</td>";
        echo "<td>".$res['W']."</td>";
        echo "<td>".$res['NB']."</td>";
        echo "<td>".$res['WD']."</td>";
        echo "<td>".$res['ECO']."</td>";
        echo "</tr>";
        }
    echo "</table>";    
  }

  if ($team[1]) {
    echo "<hr>";
    echo "<h2>".$team[1]." ". "Batting"."</h2>";
    echo "<hr>";
  
  echo "<table border='0'>";
  echo "<header>";
  echo "<th>Batsman</th>";
  echo "<th></th>";
  echo "<th>Score</th>";
  echo "<th>Balls</th>";
  echo "<th>4s</th>";
  echo "<th>6s</th>";
  echo "<th>SR</th>";
  echo "</header>";
  
  if ($team[1]=="Pakistan") {
    $team1id=1;
    $team2id=2;
  }
  else{
    $team1id=2;
    $team2id=1;
  }
    $bat = mysqli_query($mysqli, "SELECT * FROM ct2017final JOIN teams ON ct2017final.teamID=teams.teamID join batting on 
  teams.teamID=batting.teamID where batting.teamID = $team1id and batting.B<>'0';");
    $team1totalscore=0;
    while($res = mysqli_fetch_array($bat)) {
      echo "<tr>";
      echo "<td>".$res['playerName']."</td>";
      echo "<td>".$res['howsOut']."</td>";
      echo "<td>".$res['R']."</td>";
      echo "<td>".$res['B']."</td>";
      echo "<td>".$res['4s']."</td>";
      echo "<td>".$res['6s']."</td>";
      $SR=round(($res['R']/$res['B'])*100.0,2);
      echo "<td>".$SR."</td>";
      echo "</tr>";

      $team1totalscore=$team1totalscore+$res['R'];
    }
    $extrasRes=mysqli_query($mysqli,"SELECT extras FROM ct2017final where teamID=$team1id;");
    while($res = mysqli_fetch_array($extrasRes)) {
    $extras=$res['extras'];
  }
  $team1totalscore=$team1totalscore+$extras;
  echo "<tr>";
  echo "<td>"."<b>Extras: ".$extras."</td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td colspan='2'>"."<b>Total Score:    ".$team1totalscore."</td>";
  echo "</tr>";
  
  echo "</table>";
    
    echo "<h4>"."Did not bat:"."</h4>";
    $notbat=mysqli_query($mysqli, "SELECT * FROM ct2017final JOIN teams ON ct2017final.teamID=teams.teamID join batting on 
  teams.teamID=batting.teamID where batting.teamID = $team1id and batting.B='0';");
    while ($res=mysqli_fetch_array($notbat)) {
      echo $res['playerName'].", ";
    }
    echo "<hr>";
    echo "<h2>".$team[0]." ". "Bowling"."</h2>";
    echo "<hr>";

    echo "<table border='0'>";
    echo "<header>";
    echo "<th>Bowler</th>";
    echo "<th>Overs</th>";
    echo "<th>Maiden</th>";
    echo "<th>Runs</th>";
    echo "<th>Wickets</th>";
    echo "<th>NB</th>";
    echo "<th>WD</th>";
    echo "<th>Economy</th>";
    echo "</header>";


    $ball = mysqli_query($mysqli, "SELECT * FROM ct2017final JOIN teams ON ct2017final.teamID=teams.teamID join bowling on 
      teams.teamID=bowling.teamID where bowling.teamID = $team2id;");
      while($res = mysqli_fetch_array($ball)) {
        echo "<tr>";
        echo "<td>".$res['playerName']."</td>";
        echo "<td>".$res['O']."</td>";
        echo "<td>".$res['M']."</td>";
        echo "<td>".$res['R']."</td>";
        echo "<td>".$res['W']."</td>";
        echo "<td>".$res['NB']."</td>";
        echo "<td>".$res['WD']."</td>";
        echo "<td>".$res['ECO']."</td>";
        echo "</tr>";
        }
    echo "</table>";    
    echo "<script>displayWinner($team0totalscore,'$team[0]',$team1totalscore,'$team[1]');</script>";
    mysqli_close($mysqli);
  }


  

  

  ?>
  
   
  


</div>
</div>

	



<div class="clearleft"></div>
<div class="footer">This is all about scores.</div>

</body>
</html>