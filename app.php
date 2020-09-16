
<!doctype html>
<html>
     <head>
         <meta charset ="utf-8"/>
         <title></title>
     </head>
      <style>
        body
        {
          background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS45cYCzeQROF6emnXDWyY68iE8vdaMz3bqsQ&usqp=CAU");
          background-repeat:no-repeat;
	        background-size: cover;
        }
          #lab
          {
              font-size: 30px;
          }
          #prop
          {
              position:absolute;
              left: 3%;
          }
          #Nom
          {
            height:30px;
	        width:170px;
	        font-size:20px;
	        border-radius:10px;
          }
          #Prenom
          {
            height:30px;
	        width:170px;
	        font-size:20px;
	        border-radius:10px;
          }
          #Age
          {
            height:30px;
	        width:170px;
	        font-size:20px;
	        border-radius:10px;
          }
          #Specia
          {
            height:30px;
	        width:220px;
	        font-size:20px;
	        border-radius:10px;
          }
          #btn
          {
            position:absolute;
	          left:15%;
	          top:55%;
	          transform: translate(-50%,-60%);
            background-color:#000;
	          border-radius:40px;
	          padding:60px 60px;
          }
          #Aff
          {
            background-color:greenyellow;
	        border: solid 3px;
	        border-radius:20px;
	        width:220px;
	        height:60px;
	        font-size:45px;
            color: honeydew;
          }
          #Ajou
          {
            background-color:blue;
	        border: solid 3px;
	        border-radius:20px;
	        width:220px;
	        height:60px;
	        font-size:45px;
            color: honeydew;
          }
          #supp
          {
            background-color:red;
	        border: solid 3px;
	        border-radius:20px;
	        width:220px;
	        height:60px;
	        font-size:45px;
            color: honeydew;
          }
          #mod
          {
            background-color:#FFD700;
	        border: solid 3px;
	        border-radius:20px;
	        width:220px;
	        height:60px;
	        font-size:45px;
            color: honeydew;
          }
          table{
                border:solid 5px;
                position:absolute;
	              width:50%;
                left:40%;
                top:30%;
                border-collapse: collapse;
                font-size:100px;
               }
               th
               {
                background-color: #4CAF50;
                 color:#000;
                 font-size:50px;
               }
              td
              {
	             height: 50px;
               border:solid 4px;
	             font-size:35px;
               border-bottom: 5px solid #ddd;
              }
              tr:hover {background-color: gray;}
              #inputId
              {
                height:30px;
	              width:60px;
	              font-size:20px;
	              border-radius:10px;
              }
      </style>
     <body>
         <form method="post" action="">
           <div id="prop">
             <label id="lab">Id :</label><input type ="number" id ="inputId"  name = "Idapp" >
             <label id="lab">Nom :</label><input type="text" id="Nom" name="nom"  onmouseover="over()" onmouseout="out()"> 
             <label id="lab">Prenom :</label><input type="text" id="Prenom" name="prenom"  onmouseover="over1()" onmouseout="out1()">
             <label id="lab">Age :</label><input type="text" id="Age" name="age"  onmouseover="over2()" onmouseout="out2()">
             <label id="lab">Spécialisation :</label><input type="text" id="Specia" name="specialisation"  onmouseover="over3()" onmouseout="out3()">
            </div>
             <div id="btn">
                 <input type="submit" id="Aff" value="Afficher" name="Affiche" onmouseover="over4()" onmouseout="out4()"><br><br>
                 <input type="submit" id="Ajou" value="Ajouter" name="Ajoute" onmouseover="over5()" onmouseout="out5()"><br><br>
                 <input type="submit" id="supp" value="Supprimer" name="Supprime" onmouseover="over6()" onmouseout="out6()" ><br><br>
                 <input type="submit" id="mod" value="Modifier" name="Modife" onmouseover="over7()" onmouseout="out7()" ><br><br>
             </div>
         </form>
         
         <?php
include("Connexion/Connect.php");
if(isset($_POST['Ajoute']))
{
  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['specialisation']))
  {
    $a=$_POST['nom'];
	  $b=$_POST['prenom'];
	  $c=$_POST['age'];
    $d=$_POST['specialisation'];
	  $query=mysqli_query($con,"INSERT INTO stagiairetest VALUES('','$a','$b','$c','$d')");
	if($query)
	{
	  echo'<script type="text/javascript">alert("les information enregidtrer");</script>';
	}
	 else
	    echo'<script type="text/javascript">alert("Attention");</script>';
  }
  else
    echo'<script type="text/javascript">alert("remplir tout les champs");</script>';
}
if(isset($_POST['Affiche']))
{
	$sql="SELECT * FROM stagiairetest";
$result= mysqli_query($con,$sql) or die("bad query");
echo "<table border='5' id='table'>";
echo "<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Specialisation</th></tr>\n";
while($row=mysqli_fetch_assoc($result))
{
  echo"<tr><td>{$row['Id']}</td><td>{$row['Nom']}</td><td> {$row['Prenom']}</td><td> {$row['Age']}</td><td> {$row['Specialisation']}</td></tr>\n";
}
echo"</table>";
}
if(isset($_POST['Supprime']))
{
  if(!empty($_POST['Idapp']))
  {
  $id=$_POST['Idapp'];
  $supp="DELETE FROM stagiairetest WHERE Id='$id'";
   $result=mysqli_query($con,$supp);
   if($result)
   {
     echo'<script type="text/javascript">alert("element supprimer !!");</script>';
   }
    else
       echo'<script type="text/javascript">alert("Attention verifier ne pas supprimer un element !!!");</script>';
  }
}
if(isset($_POST['Modife']))
{
  if(!empty($_POST['Idapp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['specialisation']))
  {
    $id=$_POST['Idapp'];
    $nom=$_POST['nom'];
	  $prenom=$_POST['prenom'];
	  $age=$_POST['age'];
    $specia=$_POST['specialisation'];
    $sqls="UPDATE stagiairetest SET Nom = '$nom', Prenom = '$prenom' , Age = '$age' , Specialisation = '$specia' WHERE Id='$id'";
    $result=mysqli_query($con,$sqls);
    if($result)
   {
     echo'<script type="text/javascript">alert("element a été modifier !!");</script>';
   }
  }
}
?>
     </body>
</html>
<script src="app.js"></script>