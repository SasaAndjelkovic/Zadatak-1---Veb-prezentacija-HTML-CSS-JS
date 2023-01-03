<?php

include "model/basic_information.php";
include "model/person_information.php";
include "model/user.php";
include "model/manager.php";
include "model/theater_information.php";
include "model/show.php";
include "model/avatar.php";

$user1 = new User(1, "Sreten", "sreten.jovanovic@gmail.com", "sreten123", "premium");
$user2 = new User(2, "Stasha", "stanislava.petrovic@gmail.com", "stasha123", "standard");
$user3 = new User(3, "Ivana", "ivana.babic@gmail.com", "ivana123", "standard");
$user4 = new User(4, "Zoran", "zoran.veljkovic@gmail.com", "zoran123", "standard");

$manager = new Manager(1, "Masha", "masha.neshkovic@gmail.com", "topsek123");

$show1 = new Show(1, "Kameno Jezero", "Lorem ipsum drama", 20, "Zeljko Obrenovic");
$show2 = new Show(2, "Konji Svetog Marka", "Lorem ipsum istorijski", 20, "Milorad Pavic");
$show3 = new Show(3, "Devojka koja je citala u metrou", "Lorem ipsum tragedija", 20, "Kristin Fere-Fleri");
$show4 = new Show(4, "Uska staza ka dalekom severu", "Lorem ipsum avantura", 20, "Ricard Flaragan");
$show5 = new Show(5, "Ljubav na zadnji pogled", "Lorem ipsum komedija", 20, "Vedrana Rudan");
$show6 = new Show(6, "U zagrljaju purpurnih kisa", "Lorem ipsum triler", 20, "Marjana Rajic");

$avatar1 = new Avatar(1, "Fjodor", "Lorem ipsum mistican", 20);
$avatar2 = new Avatar(2, "David", "Lorem ipsum osoben", 20);
$avatar1 = new Avatar(3, "Katrin", "Lorem ipsum senzualna", 20);
$avatar1 = new Avatar(1, "Ricard", "Lorem ipsum dinamican", 20);

