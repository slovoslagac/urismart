<!DOCTYPE html>
<html>
<head>
    <title>Urismart</title>
    <meta charset="UTF-8">
    <script src="js/icons.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/t1.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans Condensed:300' rel='stylesheet'>
</head>
<body>
<div class="container-fluid fullpage" id="page">
    <div class="header" id="header">

        <div class="float-left logo leftpart"><a onclick="offset('page')"><img src="img/logo.svg" class="img-responsive img-fluid"></a></div>
        <div class="float-right text-right logo menu">
            <a onclick="offset('slide')"><img src="img/Ikonice-01_Info.svg" class="img-fluid img-responsive"></a>
            <!--            <a onclick="offset('video')"><img src="img/Ikonice-02_Video.svg" class="img-fluid img-responsive"></a>-->
            <a onclick="offset('details')"><img src="img/Ikonice-03_QA.svg" class="img-fluid img-responsive"></a>
            <a onclick="offset('contact')"><img src="img/Ikonice-04_Kontakt.svg" class="img-fluid img-responsive"></a>
        </div>
    </div>
    <div class="firstpart" id="firstpart">
        <img class="img img-responsive" src="img/HeaderSuza.png"/>
    </div>
    <div class="container">
        <div class="secondpart">
            <div class="row info">

                <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <div class="col-xl-3 col-sm-6 col-12 smallpadding">
                        <div class="k center">
                            <img class="img-fluid img-responsive" src="img/K-<?php echo $i ?>.svg" id="1">

                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="curvy" id="slide">
                <img class="img-fluid img-responsive" src="img/krivinicag.svg">
            </div>
            <div class="manual">
                <img class="img-fluid img-responsive slide" src="img/Uputstvo.svg">

            </div>
            <div class="manual video" id="video">
                <!--                <h1 class="text-center">ili<br/>Pogledajte video koji<br/>smo pripremili za vas</h1>-->
            </div>
            <div class="curvy" id="details">
                <img class="img-fluid img-responsive" src="img/krivinicay.svg">
            </div>
            <div class="details">
                <h5>Zašto se uzorak mora dostaviti laboratoriji u roku od sat vremena?</h5>
                <p>Stajanjem na sobnoj temperaturi dolazi do promene pH mokraće, taloženja njenih sastojaka i
                    umnožavanja bakterija, što vodi potencijalno netačnom rezultatu ispitivanja.</p>
                <h5>Koja je normalna boja mokraće?</h5>
                <p>Od bledo žute do boje zlata, zavisno od toga koliko tečnosti unosite. Tamno žuta boja mokraće (boja
                    ćilibara) je najčešće znak da ste dehidrirani, pa pijte više vode.</p>
                <h5>Koliko puta dnevno mokri zdrava osoba?</h5>
                <p>Najčešće 6-8 puta dnevno, pri čemu mlaz traje oko 5-6 sekundi. Naravno to zavisi i od toga koliko ste
                    tečnosti unosili u toku dana, trudite se da dnevno pijete bar 8 čaša vode.</p>
                <h5>Mokraća mi je crvene boje, da li je to krv?</h5>
                <p>Da li ste konzumirali cveklu, borovnicu, ribizle, industrijski obojenu hranu? Vrlo često ove
                    namirnice menjaju boju mokraće u crvenu, ali je najbolje da odnesete urin na pregled kako biste bili
                    sigurni.</p>
                <h5>Koje bolesti mogu da se otkriju pregledom urina?</h5>
                <p>Pregled urina je odličan pokazatelj stanja bubrega i mokraćnih puteva, ali se njime mogu otkriti i
                    oboljenja jetre, šećerna bolest, metaboličke bolesti, korišćenje narkotika,...</p>
                <h5>Šta je to urinokultura i zasto se čeka 2 dana na rezultat?</h5>
                <p>Urinokultura je pregled pri kome se mokraća zasejava na hranljive podloge u mikrobiološkoj
                    laboratoriji, da bi se otkrilo eventualno prisustvo bakterija u njoj. Ukoliko se pokaže prisustvo
                    baterija, sledeći korak je ispitivanje osetljivosti izolovane bakterije na antibiotike, za šta je
                    potrebno još 24h.</p>
                <h5>U rezultatu urinokulture piše - Uzorak je kontntaminiran. Sta to znači?</h5>
                <p>To je znak da niste ispravno dali uzorak. Da li ste mokrili srednji mlaz nakon detaljne toalete? Da
                    li ste uzorak odmah odneli u laboratoriju ili je stajao na sobnoj temperaturi?</p>
                <h5>Kako se u laboratoriji ispituje urin?</h5>
                <p>Uvek u tri koraka: Prvi je analiza boje urina i stepena zamućenosti. Zatim hemijski pregled test
                    trakama koje otkrivaju prisustvo šećera, proteina, nitrita, bilirubina, ketona u mokraći. Treći
                    korak je centrifugiranje mokraće u posebnom aparatu i analiza pod mikroskopom, kada se traže bela,
                    crvena krvna zrnca, bakterije, epitelne ćelije, kristali, cillindri,...</p>
                <h5>Imam osećaj peckanja pri mokrenju, i moram do toaleta na svakih 15 minuta, a mokraća je neprijatnog
                    mirisa. Sta bi to moglo da bude?</h5>
                <p>Ovo najčešće bude znak infekcije mokraćnih puteva, odnesite urin u laboratoriju na pregled.</p>
                <h5>Imam ciklus a treba da odnesem urin na pregled. Šta da radim?</h5>
                <p>Prijavite laboratoriji da imate ciklus, kako se eventualno prisustvo krvi u mokraći ne bi protumačilo
                    kao bolest bubrega. Možete i staviti tampon pre davanja uzorka, vodeći računa da končić iz njega ne
                    kontaminira uzorak.</p>
                <h5>Stigao je rezultat urina iz laboratorije, kako da znam da li je sve u redu?</h5>
                <p>Normalan nalaz urina je - bistar, žut, bez prisutne glukoze, proteina, nitrita, krvi, hemoglobina. pH
                    vrednosti od 5,5 do 7, specifične težine od 1.003 do 1.035. U sedimentu je dozvoljeno do 5
                    leukocita, do 5 eritrocita, do 5 epitelnih ćelija, retke bakterije. Hrana životinjskog porekla će
                    spustiti pH urna, a hrana biljnog porekla podići pH i praviti ga alkalnim.</p>
                <h5>Od čega se sastoji urin?</h5>
                <p>Voda čini 95% sastava urina, ostalih 5 % su urea, mokraćna kiselina, kreatinin, minerali.</p>
                <h5>Koliko odrasla osoba dnevno proizvede urina?</h5>
                <p>Od 1,5 do 2 litra je uobičajeno, ali to zavisi i od unosa tečnosti.</p>
                <h5>Šta je to "stidljiva bešika"?</h5>
                <p>Paruresija ili "stidljiva bešika" je vrsta fobije od koje osobe ne mogu da mokre u prisustvu drugih
                    osoba, i u javnim toaletima.</p>
                <h5>Zašto urin stajanjem dobija neprijatan miris?</h5>
                <p>Zbog razgradnje uree prisutne u urinu i oslobadjanja amonijaka, nitrata i umnožavanja bakterija.</p>
                <h5>Koliko maksimalno urina može da stane u mokraćnu bešiku?</h5>
                <p>Mokraćna bešika odrasle osobe ima zapreminu do 600ml, pri čemu potrebu za mokrenjem osećamo već na
                    150 ml urina u bešici. Bol osećamo na ispunjenosti od 500ml. Nikada ne odlažite mokrenje, prekomerno
                    rastezanje bešike je oštećuje, dovodi do kasnijeg nepotpunog pražnjenja i sklonosti ka mokraćnim
                    infekcijama.</p>
                <h5>Zašto je mokraća žute boje?</h5>
                <p>Zbog prisutnog pigmenta urobilina, koji normalno nastaje razgradnjom hemoglobina iz dotrajalih
                    eritrocita. Mokraću boje tamnog čaja treba uvek odneti na pregled jer ta boja može biti zbog
                    prisutnog bilirubina, koji ukazuje na eventualno oštećenje jetre ili žučnih puteva.</p>
                <h5>Da li je učestalo mokrenje znak šećerne bolesti?</h5>
                <p>Učestalo, obilno mokrenje svetlog urina, slatkastog mirisa može biti znak šećerne bolesti, ali su ti
                    simptomi praćeni i gubitkom u težini, pojačanim osećajem žedji, malaksalošću,...</p>
            </div>
            <div class="comment">
                <h1 class="text-left">Pitajte nas!</h1>
            </div>
            <div class="contact" id="contact">
                <form class="form-horizontal formdata" id="ajax-contact" method="post" action="mailer.php">

                    <div class="form-group col-12">
                        <textarea class="form-control" rows="4" id="message" name="message" placeholder="U slučaju da imate bilo kakve nedoumice, ili Vam je potreban stručni savet, pišite nam ovde!" maxlength="400" oninvalid="this.setCustomValidity('Molimo Vas upišite vaše pitanje')"
                                  oninput="setCustomValidity('')" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-5">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Unesite adresu vaše elektronske pošte:" oninvalid="this.setCustomValidity('Molimo Vas upišite vašu email adresu')"
                                   oninput="setCustomValidity('')" required>
                        </div>
                        <input type="hidden" name="name" id="name" value="urismartWebForm">

                        <div class="offset-md-5 col-md-2 col-12 col-sm-6">
                            <button type="submit" class="btn btn-default">Pošalji</button>
                        </div>
                    </div>


                </form>

            </div>

            <div id="form-messages"></div>
        </div>
    </div>

    <div class="lastpart">
        <!--<img class="img img-responsive" src="img/FooterSuza.svg1"/>-->
    </div>


    <footer class="footer">
        <div class="footerLeftPart float-left">
            <img src="img/logo.svg" class="img-responsive img-fluid">
            <h6>2018 @ sva prava zadržana</h6>
        </div>
        <div class="footerRightPart float-right">
            <h6 class="firstrow text-center">web podrška:</h6>
            <h6 class="secondrow"><a href="http://www.nevenaprodanovic.com" target="_blank"> SlovoSlagač | Štap&Kanap </a></h6>
        </div>
        <img class="img-fluid img-responsive footerBackgroundImg" src="img/FooterSuza.svg">
    </footer>

</div>


</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery2.2.4.js"></script>
<script src="js/app.js"></script>


<script>
    function offset(val) {
        position = document.getElementById(val)
        window.scrollTo(0, position.offsetTop - 30)
        console.log(22, val, position.offsetTop);
    };


</script>


</html>