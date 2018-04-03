<?php

require(ROOT . "model/calendarModel.php");

function index(){
    $calendars = getAllPersons();

    render("calendar/index", array(
        'calendar' => $calendars)
    );
}

function delete($id){

  $calendar = getBirthday($id);
    render("calendar/delete", array(
      "calendar" => $calendar
    ));
}


function deleteSave($id){
    if (deleteBirthday($id)) {
        header("location:" . URL . "calendar/index");
        exit();
    } else {
        //er is iets fout gegaan..
        header("location:" . URL . "error/error_delete");
        exit();
    }
}
function create(){
    render("calendar/create");
}
function createSave()
{
    if (createBirthday()) {
        header("location:" . URL . "calendar/index");
        exit();
    } else {
        //er is iets fout gegaan..
        header("location:" . URL . "error/error_create");
        exit();
    }
}
function edit($id){
  $calendar = getBirthday($id);

    render("calendar/edit", array(
      "calendar" => $calendar
    ));
}

function editSave($id)
{
    if (editBirthday($id)) {
        header("location:" . URL . "calendar/index");
        exit();
    } else {
        header("location:" . URL . "error/error_edit");
        exit();
    }
}
