<?php
include('db.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];  
    $hoby=$_POST['hoby'];
    $address=$_POST['address'];

  if(!empty($name) && !empty($email) && !empty($phone) && !empty($gender) && !empty($city) && !empty($hoby) && !empty($address)){

    $sql="INSERT INTO `student`( `name`, `email`, `phone`, `gender`, `city`,`address`, `hoby`) VALUES ('$name','$email','$phone','$gender','$city','$address','$hoby')";
   $res=(mysqli_query($conn,$sql));
   if($res){
    header('location:view.php');
   }
  }

}
?>

<html>

<head>

</head>

<body>
    <div>
        <form method="post" enctype="multipart/form-data">
            <label for="name">Name = </label>
            <input type="text" name="name" id="name" placeholder="Name" required="required" >
            <br><br>
            <label for="email">Email = </label>
            <input type="email" name="email" placeholder="Email">
            <br><br>
            <label for="phone">phone = </label>
            <input type="text" name="phone" placeholder="Phone">
            <br><br>
            <label >Gender = </label>
            Male<input type="radio" name="gender" value="male">
            Femal<input type="radio" name="gender" value="female">
            <br><br>
            <label > City = </label>
            <select name="city">
                <option value="surat" >Surat</option>
                <option value="Baroda">Baroda</option>
                <option value="Amreli">Amreli</option>
                <option value="bardoli">Bardoli</option>
            </select>
            <br><br>
            <label > Address = </label>
            <textarea name="address"  row="4" cols="50"></textarea>
            <br><br>
            <label > Hooby = </label>
            <select name="hoby" multiple>
                <option value="reading" name="hoby">Reading</option>
                <option value="dancing">dancing</option>
                <option value="singing">singing</option>
                <option value="shoping">Shoping</option>
            </select>
            <br><br><br>
            <input type="file" name="img">
            <br><br>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>

</html>