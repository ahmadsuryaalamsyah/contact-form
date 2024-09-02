<?php 
include('config.php');
$inputNameForm = $_POST['inputNameForm'];
$inputNimForm = $_POST['inputNimForm'];
$kelas = $_POST['kelas'];
$gender = $_POST['gender'];
$inputEmailForm = $_POST['inputEmailForm'];
$Message = $_POST['Message'];

$radioMale = ($gender == 'male') ? 1 : 0;
$radioFemale = ($gender == 'female') ? 1 : 0;

$query = "INSERT INTO `contact-data` (`inputNameForm`, `inputNimForm`, `kelas`, `radioMale`, `radioFemale`, `inputEmailForm`, `Message`) VALUES ('$inputNameForm', '$inputNimForm', '$kelas', '$radioMale', '$radioFemale', '$inputEmailForm', '$Message')";
$result = $mysqli->query($query);
if(!$result){
    echo 'Error: '.$mysqli->error;
} else {
    echo "<script>
            alert('Hallo $inputNameForm, data berhasil disubmit!');
            window.location.href = 'index.php';
          </script>";
}

$mysqli->close();
?>
