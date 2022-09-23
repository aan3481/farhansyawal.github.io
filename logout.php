<?php


session_start();
session_destroy();
include 'koneksi.php';

header("location: login.php");
