<?php

$conn=mysql_connect("localhost","root","Your_Mysql_password");
mysql_select_db("hospital", $conn);

mysql_query("create table patient( patientID varchar(20) not null, pname varchar(50) not null, age float(5),gender varchar(10), address varchar(70), phone varchar(15), pimage varchar(50),primary key(patientID))");

mysql_query("create table doctor( doctorID varchar(20) not null, dname varchar(50) not null, address varchar(70), phoneno varchar(15), gender varchar(10), password varchar(15),dimage varchar(50),primary key (doctorID))");

mysql_query("create table report( reportID varchar(20) not null, patientID varchar(20)not null,date date, time time, reportf varchar (100), primary key (reportID),foreign key(patientID)references patient(patientID))");

mysql_query("create table appointment( patientID varchar(20) not null, doctorID varchar(20)not null, app_no varchar(20) not null, date date, time time, primary key(doctorID, app_no), foreign key(patientID) references patient(patientID), foreign key(doctorID) references doctor(doctorID))");

mysql_query("create table history(patientID varchar(20) not null, doctorID varchar(20) not null, details varchar(150), date date, time time,foreign key(patientID) references patient(patientID), foreign key(doctorID) references doctor(doctorID))");

mysql_query("create table docDays(doctorID varchar(20), days varchar(100),time time,primary key (doctorID,days),foreign key(doctorID) references doctor(doctorID))"); 

?>
