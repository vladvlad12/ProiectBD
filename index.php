<?php
error_reporting(0);
include('includes/config.php');
?>




<style>
#more1 {display: none;}
#more2 {display: none;}
.logo1 h1
{
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 52px;
}

.logo1 h1:nth-child(2)
{
margin-top: -95px;
color: tomato;
animation: umplere 3s ease-in-out infinite;
}
@keyframes umplere
{
0%,
100%
{
    clip-path: polygon(
        0% 0%,
        14% 0,
        27% 14%,
        40% 26%,
        53% 38%,
        67% 48%,
        80% 51%,
        100% 49%,
        100% 99%,
        0% 99%
);
}
50% { clip-path: polygon(
    0 59%
    14% 54%,
    30% 53%,
    45% 56%,
    57% 46%,
    66% 31%,
    78% 17%,
    100% 0,
    100% 99%,
    0% 99%
);
}
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMBSD</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style> 

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Bun venit la managementul bancii de sange si al donatorilor</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Nevoia de sange</h4>
                   
                        <p class="card-text" style="padding-left:2%">Donarea de sânge poate salva vieţi. Din sângele donat o singură dată poţi ajuta până la 3 persoane.Unul din zece pacienți care ajung la spitalele din România are nevoie de sânge sau de produse derivate din sânge. Statistic, fiecare om de pe planetă are nevoie- pe parcursul vieții- cel puțin o singură dată de sânge. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Ce să fac înainte de a dona sânge?</h4>
                   
                        <p class="card-text" style="padding-left:2%">Pregatirea pentru donarea de sange cu cel putin o zi inainte este importanta. In acest sens eviti sa te confrunti cu senzatii extreme de lesin in timpul si dupa donarea de sange.
Iata ce poti sa faci pentru o experienta pozitiva in donarea de sange:<span id="dots1">...</span><span id="more1">
<br>-Este recomandat să iei o gustare înainte de a dona;
<br>-Micul dejun poate fi bogat în lichide și glucide (ceai sau cafea dulce, sandwitch, pâine cu dulceață). Înainte de donare, se evită mesele copioase, cu grăsimi și băuturi alcoolice;
<br>-Nu ai voie să consumi alcool cu 24 de ore înainte de a dona sânge;
<br>-Nu ai voie să fumezi înainte și după ce ai donat sânge;
<br>-De asemenea, vino să donezi odihnit, nu după o noapte pierdută la serviciu, în cluburi sau la calculator. </span></p>
  <button onclick="myFunction1()" id="myBtn1">Mai multe</button> 
    <script>
 function myFunction1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Mai multe";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Mai putin";
    moreText.style.display = "inline";
  }
} 
</script>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header"> Conditii de indeplinit pentru a putea dona sange </h4>
                   
<p class="card-text" style="padding-left:2%">In principiu, orice om sanatos poate dona sange. Cu toate acestea, trebuie sa tineti cont de faptul ca exista cateva cerinte de baza pe care trebuie sa le indepliniti pentru a deveni donator. Potrivit Organizatiei Mondiale a Sanatatii, conditiile de eligibilitate sunt urmatoarele:
<span id="dots2">...</span><span id="more2">
    <br>-varsta cuprinsa intre 18 si 60 de ani;
    <br>-greutate de cel putin 50 de kilograme;
    <br>-sa aveti tensiunea arteriala sistolică intre 100 si 180 mmHg;
    <br>-sa nu fi avut relatii sexuale neprotejate sau riscante in ultimele 12 luni;
    <br>-sa nu fi calatorit recent in zone in care existra riscul contractarii de virusuri transmise de tantari, de exemplu West Nile;
    <br>-sa nu aveti dureri in gat, probleme cu stomacul sau simptome asociate racelii, gripei sau infectiei;
    <br>-daca ati fost la stomatolog pentru o procedura minora, este necesar sa asteptati aproximativ 24 de ore inainte de a dona sange; daca ati suferit o interventie majora, va trebui sa asteptati o luna;
    <br>-sa nu va fi facut tatuaje sau piercing-uri de catre persoane neatorizate in ultimele sase luni; daca procedurile au fost efectuate de catre un profesionist din domeniul sanatatii, intr-un salon autorizat, si s-a vindecat orice reclamatie, puteti dona sange dupa 12 ore;
    <br>-sa nu fi suferit interventii chirurgicale in ultimele sase luni;
    <br>-sa aveti nivelul minim de hemoglobina recomandat pentru donare; in acest sens, va fi efectuat un test de sange la centrul specializat caruia v-ati adresat. Pragul necesar este de 12 g/dl pentru femei si 13 g/dl pentru barbati;
    <br>-sa nu fi avut vreodata un rezultat pozitiv pentru testul HIV;
    <br>-sa nu va fi injectat niciodata droguri;
    <br>-sa nu fiti trecut in evideta medicului cu afectiuni grave cu tratament in desfasurare;
    <br>-sa nu sangerati excesiv in urma leziunilor;
    <br>-sa nu fiti in perioada menstruatiei;
    <br>-sa nu fi trecut mai putin de noua luni de la sarcina;
    <br>-sa nu alaptati.
 </span></p>
  <button onclick="myFunction2()" id="myBtn2">Mai multe</button> 
  
  <script>
 function myFunction2() {
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Mai multe";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Mai putin";
    moreText.style.display = "inline";
  }
} 
</script>

                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Cativa dintre donatori:</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from donatori where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/donator.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Sex :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Grupa de sange: :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Grupe de sange:</h2>
          <p>  Grupul de sange este determinat de genele pe care le mostenesti de la parintii tai. Aceste gene determina configuratia suprafetei celulelor rosii (eritrocitelor) din sange, respectiv prezenta anumitor antigene. Exista 2 antigene majore - antigenul A si antigenul B.<br>Exista 4 grupe de sange in sistemul ABO: </p>
                <ul>
                
                
<li>Grup OI - nu are niciun antigen si are ambii anticorpi (anti-A si anti-B)</li>
<li>Grup AII - are antigenul A si anticorpi anti-B</li>
<li>Grup BIII - are antigenul B si anticorpi anti-A</li>
<li>Grup ABIV - are ambele antigene A si B si nu are niciun anticorp.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/donator2.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>Donatori si primitori universali:</h4>
                <p>
In sistemul AB0, există noțiunile de donator universal (cu referire la grupa 0, care nu are aglutinogene) și de primitor universal (cu referire la grupa AB, care nu are aglutinine).
<br></p>
            </div>


<!-- Hover #2 -->
<div class="box-2">
<a class="box-2" href="become-donar.php">
  <div class="btn btn-two">
    <span>Doneaza si tu!</span>
</div>
</a>    
</div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

<style>
  .container1  {
   position: relative;
   bottom: 0;
   width: 100%;
   height: 60px;   /* Height of the footer */
   background: #001018;
}
  </style>
  <footer class="container1">
        <div class="container1">
            <p class="m-0 text-center text-white">Acesta este doar un proiect pentru scoala!</p>
        </div>
        <!-- /.container1 -->
    </footer>

</html>
