<?php

if(!empty($_SESSION)) redirect("/");

view("registration/create.view.php");