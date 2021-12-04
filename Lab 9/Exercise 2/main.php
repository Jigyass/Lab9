<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$q1 = $_POST["q1"];
    	$q2 = $_POST["q2"];
    	$q3 = $_POST["q3"];
    	$q4 = $_POST["q4"];
    	$q5 = $_POST["q5"];

    	echo "What is TenZ real name?";
	echo "<br>";
    	echo "      You answered: $q1";
	echo "<br>";
    	echo "      Correct answer: Tyson";
	echo "<br>";
	echo "<br>";

    	echo "What is the highest rank in Valorant?";
	echo "<br>";
    	echo "      You answered: $q2";
	echo "<br>";
    	echo "      Correct answer: Radiant";
	echo "<br>";
	echo "<br>";

    	echo "What is the best gun in Valorant?";
	echo "<br>";
    	echo "      You answered: $q3";
	echo "<br>";
    	echo "      Correct answer: Op";
	echo "<br>";
	echo "<br>";

    	echo "What is the callout for above you?";
	echo "<br>";
    	echo "      You answered: $q4";
	echo "<br>";
    	echo "      Correct answer: Heaven";
	echo "<br>";
	echo "<br>";

    	echo "What month is was Valorant released in?";
	echo "<br>";
    	echo "      You answered: $q5";
	echo "<br>";
    	echo "      Correct answer: May";
	echo "<br>";
	echo "<br>";

	$num = 0;
	if ($q1 == "Tyson")
	{
		$num++;
	}
	if ($q2 == "Radiant")
	{
		$num++;
	}
	if ($q3 == "Op")
	{
		$num++;
	}
	if ($q4 == "Heaven")
	{
		$num++;
	}
	if ($q5 == "May")
	{
		$num++;
	}

	$percent = ($num/5)*100;

	echo "You got $num correct!";
	echo "<br>";
	echo "Which is a $percent%!";
  ?>