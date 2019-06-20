<?php
function doctors_get($link, $id){
    $query = sprintf("SELECT * FROM doctors WHERE clinic_id=%d",(int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n=mysqli_num_rows($result);
    $doctors=array();

    for($i=0;$i<$n;$i++)
    {
        $row=mysqli_fetch_assoc($result);
        $doctors[]=$row;
    }
    return $doctors;


}
function get_receipt_time($link, $doctor_id, $day_id){
    $query = sprintf("SELECT * FROM receipt_time WHERE doctor_id=%d AND day=%d ",(int)$doctor_id, (int)$day_id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n=mysqli_num_rows($result);
    $times=array();

    for($i=0;$i<$n;$i++)
    {
        $row=mysqli_fetch_assoc($result);
        $times[]=$row;
    }
    return $times;
}
function records_get($link, $id){
    $query = sprintf("SELECT * FROM record LEFT OUTER JOIN clients ON record.client_id=clients.id WHERE doctor_id=%d",(int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n=mysqli_num_rows($result);
    $records=array();

    for($i=0;$i<$n;$i++)
    {
        $row=mysqli_fetch_assoc($result);
        $records[]=$row;
    }
    return $records;
}
function clinics($link)
{
    $query = "SELECT * FROM clinic ORDER BY id asc ";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n=mysqli_num_rows($result);
    $clinics=array();

    for($i=0;$i<$n;$i++)
    {
        $row=mysqli_fetch_assoc($result);
        $clinics[]=$row;
    }
    return $clinics;
}
function get_clients($link)
{
    $query = "SELECT * FROM clients ORDER BY id asc ";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n=mysqli_num_rows($result);
    $clients=array();

    for($i=0;$i<$n;$i++)
    {
        $row=mysqli_fetch_assoc($result);
        $clients[]=$row;
    }
    return $clients;
}
function get_clinic($link, $id){
    $query = sprintf("SELECT * FROM clinic WHERE id=%d",(int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    $clinic=mysqli_fetch_assoc($result);

    return $clinic;
}
function get_doctor($link, $id){
    $query = sprintf("SELECT * FROM doctors WHERE id=%d",(int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    $doctor=mysqli_fetch_assoc($result);

    return $doctor;
}
function articles_new($link, $title, $date, $content){
    $title=trim($title);
    $content=trim($content);

    if($title=='')
        return false;

    $t="INSERT INTO articles(title, content, date) VALUES ('%s', '%s','%s')";

    $query=sprintf($t,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $date) );
    echo $query;
    $result=mysqli_query($link, $query);
    if(!$result)
        die(mysqli_error($link));
    return true;

}
function articles_edit($link, $id, $title, $date, $content){
    $title=trim($title);
    $content=trim($content);
    $date=trim($date);
    $id=(int)$id;

    if($title=='')
        return false;

    $t="UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";

    $query=sprintf($t,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $date), $id );
    echo $query;
    $result=mysqli_query($link, $query);
    if(!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
}
function articles_delete($link, $id){
    $id=(int)$id;

    if($id==0)
        return false;
    $query=sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result=mysqli_query($link,$query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}
function articles_intro($text, $len=500){
    $intro=mb_substr($text, 0, $len);
    if($text!=$intro) $intro=$intro."...";
    return $intro;
}
function adding_record($link, $client, $date, $time1, $time2){
    include("views/doctors.php");include("views/doctors.php");include("views/doctors.php");

}
?>
