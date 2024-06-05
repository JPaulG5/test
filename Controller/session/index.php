<?php

if(!empty($_SESSION)) redirect("/");

view("session/create.view.php");