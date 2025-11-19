<?php
$title  = "Wham Bam Shang-A-Lang";
$artist = "Silver";
$mood   = "retro";

$verseCount    = 3;
$repeatChorus  = 2;

$totalSections = $verseCount + $repeatChorus;

$fullTitle = $title . " by " . $artist;

$nouns = ["time", "nights", "love", "dream", "song"];
$verbs = [ "say", "play"];
$adjectives = [ "warm", "crazy", "bright"];

$typeJuggle1 = "2" + 3;  
$typeJuggle2 = "5 little notes " . 7;

$verse1 = [
    "Starry <b>nights</b>, sunny days",
    "I always thought that <b>love</b> should be that way",
    "Then comes a <b>time</b> when you're ridden with doubt",
    "You've loved all you can and now you're all loved out",
    "Ooh, ooh, baby, we've been a long, long way",
    "That we got a <b>love</b>, is it a <b>love</b> to stay?,"
    
];

$chorus = [
    "We got a wham bam shang-a-lang",
    "And a sha-la-la-la-la-la thing Wham bam shang-a-lang",
    "And a sha-la-la-la-la-la thing",
   
];

$verse2 = [
    "Looking at you, I wanted to <b>say</b>",
    "I think a little emotion goes a long, long way",
    "Careful now, don't get caught in your <b>dreams</b>",
    "Look out, baby, this is not what it seems",
    "Ooh, ooh, baby, you've been so good to me",
    "But please don't make it what it's not",
    "Well, I thought we agreed on what we need",
    "So listen to me, I'll tell you what we've got",
   
];

$chorus = [
    "We got a wham bam shang-a-lang",
    "And a sha-la-la-la-la-la thing Wham bam shang-a-lang",
    "And a sha-la-la-la-la-la thing",
   
];

$verse3 = [
    "I think you're seein' what I've been sayin'",
    "'Cause I hear you singin' to the tune I'm <b>playing</b>",
    "Now that it's said and we both understand",
    "Let's <b>say</b> our goodbyes before it gets out of hand",
    "Bye, bye, baby, I'd really like to stay",
    "But we'll remember the best time in our life",
   
];

$chorus = [
    "We got a wham bam shang-a-lang",
    "And a sha-la-la-la-la-la thing Wham bam shang-a-lang",
    "And a sha-la-la-la-la-la thing",
    "Wham bam shang-a-lang And a sha-la-la-la-la-la thing",
    "Wham bam shang-a-lang",
   
];

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
                background-color: lightblue; 
                text-align: center;
            }
    </style>
</head>
<body>

<h1><?php echo $title; ?></h1>
<div class="subtitle">By <?php echo $artist; ?> • Mood: <?php echo $mood; ?></div>

<h3> Verse 1</h3>
<div class="section">
    <div class="label"></div>
    <div class="lyrics">
    <?php
        foreach ($verse1 as $line) {
            echo $line . "<br>";
        }
    ?>
    </div>
</div>
<h3> Chorus</h3>
<div class="section">
    <div class="label"></div>
    <div class="lyrics">
    <?php
        foreach ($chorus as $line) {
            echo $line . "<br>";
        }
    ?>
    </div>
</div>

<h3> Verse 2</h3>
<div class="section">
    <div class="label"></div>
    <div class="lyrics">
    <?php foreach ($verse2 as $line) echo $line . "<br>"; ?>
    </div>
</div>

<h3> Chorus</h3>
<div class="section">
    <div class="label"></div>
    <div class="lyrics">
    <?php
        foreach ($chorus as $line) {
            echo $line . "<br>";
        }
    ?>
    </div>
</div>

<h3> Verse 3</h3>
<div class="section">
    <div class="label"></div>
    <div class="lyrics">
    <?php foreach ($verse3 as $line) echo $line . "<br>"; ?>
    </div>
</div>

<h3> Chorus</h3>
<div class="section">
    <div class="label"></div>
    <div class="lyrics">
    <?php
        foreach ($chorus as $line) {
            echo $line . "<br>";
        }
    ?>
    </div>

</body>
</html>
