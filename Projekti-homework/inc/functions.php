<?php
session_start();
$dbconn="";

function dbConnection(){
    global $dbconn;
    $dbconn = mysqli_connect("localhost","root","","reactacademy");
    if (!$dbconn) {
        die(mysqli_error($dbconn));
    }
}
dbConnection();

function login($email,$fjalekalimi){
    global $dbconn;
    $sql = "SELECT pid,emri,mbiemri,email,roli FROM profesoret";
    $sql.= " WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $res = mysqli_query($dbconn, $sql);

    if (mysqli_num_rows($res) == 1) {
        $profesori=array();
        $profesoriData=mysqli_fetch_assoc($res);
        $profesori['pid']=$profesoriData['pid'];
        $profesori['emrimbiemri']=$profesoriData['emri'] . " " . $profesoriData['mbiemri'];
        $profesori['roli']=$profesoriData['roli'];
        $_SESSION['profesori']=$profesori;
        header("Location: Projekti-react.php");
    }else{
        echo "Nuk ka perdorues me keto shenime";
    }
}

function regjistrohu($emri,$mbiemri,$dataelindjes,$dataepunesimit,$nrpersonal,$telefoni,$fjalekalimi,$roli,$email){
    global $dbconn;
    $sql="INSERT INTO profesoret(emri,mbiemri,dataelindjes,dataepunesimit,nrpersonal,telefoni,fjalekalimi,roli,email) VALUES";
            $sql .="('$emri','$mbiemri','$dataelindjes','$dataepunesimit','$nrpersonal','$telefoni','$fjalekalimi',$roli,'$email')";
            $antari=mysqli_query($dbconn,$sql);
            if ($antari) {
                echo "Profesori u regjistrua me sukses";
                header("Location: Projekti-react.php");
            } else {
                echo "Regjistrimi i Profesorit deshtoi";
            }
}


/* Funksionet per kurset */

function merrKurset(){
    global $dbconn;
    $sql = "SELECT kid,emri,dataefillimit,kohezgjatja,qmimi FROM kurset";
    return $res = mysqli_query($dbconn,$sql);
}

function merrKursId($kursiid){
    global $dbconn;
    $sql = "SELECT kid,emri,dataefillimit,kohezgjatja,qmimi FROM kurset";
    $sql .= " WHERE kid='$kursiid'";
    return $res = mysqli_query($dbconn,$sql);
}

function modifikoKurs($kursiid,$emri,$dataefillimit,$kohezgjatja,$qmimi){
    global $dbconn;
    $sql = "UPDATE kurset SET emri='$emri',dataefillimit='$dataefillimit',kohezgjatja='$kohezgjatja',qmimi='$qmimi'";
    $sql .= " WHERE kid='$kursiid'";
    
    $res = mysqli_query($dbconn,$sql);
    if($res){
        echo "Kursi u modifikua me sukses";
    }else{
        die("Deshtoi modifikimi i Kursit" .  mysqli_error($dbconn) );
    }
    }

    function shtoKurs($emri,$dataefillimit,$kohezgjatja,$qmimi){
        global $dbconn;
        $sql = "INSERT INTO kurset(emri,dataefillimit,kohezgjatja,qmimi) VALUES('$emri','$dataefillimit','$kohezgjatja','$qmimi')";        
        $res = mysqli_query($dbconn,$sql);
        if($res){
            echo "Kursi u shtua me sukses";
        }else{
            die("Deshtoi shtimmi i Kursit" .  mysqli_error($dbconn) );
        }
        }

    function fshijKurs($kursiid){
        global $dbconn;
        $sql = "DELETE FROM kurset WHERE kid=$kursiid";
        $res = mysqli_query($dbconn, $sql);
                if ($res) {
                    echo "Kursi u fshi me sukses";
                } else {
                    die("Deshtoi fshirja e Kursit" .  mysqli_error($dbconn));
                }
    
    }

/* Funksioni per studentet */

function merrStudentet() {
    global $dbconn;
    $sql = "SELECT s.sid, s.emri, s.mbiemri, s.emaili, s.telefoni, kurset.emri AS kursi_emri
    FROM studentet s
    INNER JOIN student_kurset ON s.sid = student_kurset.sid
    INNER JOIN kurset ON student_kurset.kid = kurset.kid;
    ";
    return $res = mysqli_query($dbconn,$sql);
}



function merrStudentId($studentiid){
    global $dbconn;
    $sql = "SELECT sid,emri,mbiemri,emaili,telefoni FROM studentet";
    $sql .= " WHERE sid=$studentiid";
    return $res = mysqli_query($dbconn, $sql);
}

function fshijStudent($studentiid){
    global $dbconn;
    $sql = "DELETE FROM studentet WHERE sid=$studentiid";
    $res = mysqli_query($dbconn, $sql);
            if ($res) {
                echo "Studenti u fshi me sukses";
            } else {
                die("Deshtoi fshirja e Studentit" .  mysqli_error($dbconn));
            }

}

function modifikoStudent($studentiid,$emri,$mbiemri,$telefoni,$email){
global $dbconn;
$sql = "UPDATE studentet SET emri='$emri',mbiemri='$mbiemri',telefoni='$telefoni',emaili='$email' ";
$sql .= " WHERE sid='$studentiid'";

$res = mysqli_query($dbconn,$sql);
if($res){
    echo "Studenti u modifikua me sukses";
}else{
    die("Deshtoi modifikimi i Studentit" .  mysqli_error($dbconn) );
}
}

function shtoStudent($emri, $mbiemri, $telefoni, $email, $kursi_emri){
    global $dbconn;
    $kid_query = "SELECT kid FROM kurset WHERE emri = '$kursi_emri'";
    $kid_result = mysqli_query($dbconn, $kid_query); 
    $kid_row = mysqli_fetch_assoc($kid_result);
    $kid = $kid_row['kid'];
    $sql = "INSERT INTO studentet(emri, mbiemri, telefoni, emaili) 
        VALUES ('$emri', '$mbiemri', '$telefoni', '$email')";
    $res1 = mysqli_query($dbconn,$sql);
    $sid = mysqli_insert_id($dbconn);

  if($res1){
      $sql2 = "INSERT INTO student_kurset(sid, kid) 
             VALUES ('$sid', '$kid')";
     $res2 = mysqli_query($dbconn, $sql2);
     if($res2){
        echo "Studenti u shtua me sukses";
    }else{
        echo "Deshtoi shtimi Studentit ne tabelen student_kurset " .  mysqli_error($dbconn) ;
    }
   }else{
    echo "Deshtoi shtimi Studentit ne tabelen studentet " .  mysqli_error($dbconn) ;
  }
}


    function kerkoStudent($keyword) {
        global $dbconn;
        $sql = "SELECT * FROM studentet WHERE emri LIKE '%$keyword%' OR emaili LIKE '%$keyword%' OR telefoni LIKE '%$keyword%'";
        $res = mysqli_query($dbconn, $sql);
        if (mysqli_num_rows($res) > 0) {
            $i=0;
            while ($studenti = mysqli_fetch_assoc($res)) {
                if($i%2==0) {echo "<tr>";}else{echo "<tr class='alt'>";}
                $studentiid=$studenti['sid'];
                echo "<td>". $studenti['emri'] . " " . $studenti['mbiemri'] . "</td>";
                echo "<td>". $studenti['telefoni'] . "</td>";
                echo "<td>". $studenti['emaili'] . "</td>";
                echo "<td><a href='modifikoanetaret.php?aid={$studentiid}'>Edit</a></td>";
                echo "<td><a href='fshijanetar.php?aid={$studentiid}'>Delete</a></td>";
                echo "</tr>";
                $i++;
            }
        } else {
            echo "Nuk ka shenime";
        }
    }

/* Funksionet per Profesoret */


function merrProfesorId($profesoriid){
    global $dbconn;
    $sql = "SELECT pid,emri,mbiemri,nrpersonal,dataepunesimit,telefoni FROM profesoret";
    $sql .= " WHERE pid=$profesoriid";
    return $res = mysqli_query($dbconn, $sql);
}

function merrProfesoret() {
    global $dbconn;
    $sql = "SELECT pid,emri,mbiemri,nrpersonal,dataepunesimit,telefoni FROM profesoret";
    return $res = mysqli_query($dbconn,$sql);
}

function modifikoProfesor($profesoriid,$emri,$mbiemri,$nrpersonal,$dataepunesimit,$telefoni){
    global $dbconn;
    $sql = "UPDATE profesoret SET emri='$emri',mbiemri='$mbiemri',nrpersonal='$nrpersonal',dataepunesimit='$dataepunesimit',telefoni='$telefoni' ";
    $sql .= " WHERE pid='$profesoriid'";
    
    $res = mysqli_query($dbconn,$sql);
    if($res){
        echo "Profesori u modifikua me sukses";
    }else{
        die("Deshtoi modifikimi i Profesorit" .  mysqli_error($dbconn) );
    }
    }

    function fshijProfesor($profesoriid){
        global $dbconn;
        $sql = "DELETE FROM profesoret WHERE sid=$profesoriid";
        $res = mysqli_query($dbconn, $sql);
                if ($res) {
                    echo "Profesori u fshi me sukses";
                } else {
                    die("Deshtoi fshirja e Profesorit" .  mysqli_error($dbconn));
                }
    
    }

    function shtoProfesor($emri,$mbiemri,$nrpersonal,$dataepunesimit,$telefoni){
        global $dbconn;
        $sql = "INSERT INTO profesoret(emri,mbiemri,nrpersonal,dataepunesimit,telefoni) VALUES ('$emri','$mbiemri','$nrpersonal','$dataepunesimit','$telefoni')";
        $res = mysqli_query($dbconn,$sql);
        if($res){
            echo "Profesori u shtua me sukses";
        }else{
            die("Deshtoi shtimi i Profesorit" .  mysqli_error($dbconn) );
        }
        }


?>