<?php include("index.html.twig");

$seeker=mysqli_query("SELECT * FROM symfony WHERE 'name' LIKE LOWER('%".$_POST["search"]."%') ");
$number = mysqli_num_rows($seeker);

?>

<h5>This is what we found:</h5>

<?php while($result = mysqli_fetch_assoc($seeker)) {?>

    <p class="bg-danger"><?php echo $result["name"]; ?> - <?php echo $result["name"]; ?></p>

<?php }?>