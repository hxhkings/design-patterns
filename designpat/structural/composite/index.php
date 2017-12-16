<?php


	require_once('music.php');
	require_once('playlist.php');
	require_once('song.php');

	$songOne = new Song('Lost in Stereo');
	$songTwo = new Song('Running from Lions');
	$songThree = new Song('Guts');
	$playlistOne = new Playlist();
	$playlistTwo = new Playlist();		
	$playlistThree = new Playlist();
	$playlistTwo->addSong($songOne);
	$playlistTwo->addSong($songTwo);
	$playlistThree->addSong($songThree);
	$playlistOne->addSong($songTwo);
	$playlistOne->addSong($songThree);
	$playlistOne->play();



?>