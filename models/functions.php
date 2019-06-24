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
    $query = sprintf("SELECT record.id, record.client_id, record.doctor_id, record.time1, record.time2, clients.full_name FROM record LEFT OUTER JOIN clients ON record.client_id=clients.id WHERE doctor_id=%d",(int)$id);
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
function adding_record($link, $client_id, $doctor_id, $date, $time1, $time2){
    $client_id=trim($client_id);
    $doctor_id=trim($doctor_id);
    $date=trim($date);
    $time1=trim($time1);
    $time2=trim($time2);
    $unixDate=strtotime($date);
    $unixDatetime1=$unixDate+strtotime($time1, 0)+3600;
    $unixDatetime2=$unixDate+strtotime($time2, 0)+3600;

    $t="INSERT INTO record(client_id, doctor_id, time1, time2) VALUES ('%d', '%d','%d','%d')";

    $query=sprintf($t,
        mysqli_real_escape_string($link, $client_id),
        mysqli_real_escape_string($link, $doctor_id),
        mysqli_real_escape_string($link, $unixDatetime1),
        mysqli_real_escape_string($link, $unixDatetime2));

    $result=mysqli_query($link, $query);
    if(!$result)
        die(mysqli_error($link));
    return true;
}
function delete_record($link, $record_id){
    $record_id=(int)$record_id;

    if($record_id==0)
        return false;
    $query=sprintf("DELETE FROM record WHERE id='%d'", $record_id);
    $result=mysqli_query($link,$query);
    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}
?>
