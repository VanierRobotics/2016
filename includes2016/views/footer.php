</div>
<!--
    VALIDATED ON 02/08/2017 at 5:44 PM
    ==================================
    ANY MODIFICATIONS AFTER THIS TIME
    MUST BE RE-VALIDATED
-->
<footer>
    <style scoped>
        @font-face {
            font-family: 'Stempel-Garamond-W01-Roman';
            font-style: normal;
            font-weight: normal;
            src: url('<?= URL ?>fonts/Stempel-Garamond-W01-Roman.woff') format('woff');
        }

        @font-face {
            font-family: 'MorrisRoman-Black';
            font-style: normal;
            font-weight: normal;
            src: url('<?= URL ?>fonts/MorrisRoman-Black.ttf') format('truetype');
        }

        .modal.fade.in {
            overflow: hidden;
        }

        .modal-content {
            background: none;
            position: relative;
            width: 40%;
            height: 60%;
            margin-right: auto;
            margin-left: auto;
        }

        .modal-content > img {
            width: 100%;
            height: 110%;
        }

        .modalText {

            font-family: 'Stempel-Garamond-W01-Roman', serif;
            color: black;
            height: 70%;
            width: 78%;
            display: block;
            z-index: 15005;
            position: absolute;
            top: 0;
            margin: 14% 15% 15% 15%;
            overflow-y: scroll;
        }

        .modalText > p {
            font-size: 16px;
        }

        .modalText > img {
            position: relative;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .modalText > h5 {
            font-size: 25px;
            font-weight: bolder;
        }

        .sponsorImage {
            height: 25%;
        }
    </style>
    <?php if ($this->language == 'en') { ?>
        <div id="sponsorsModal" class="modal fade" style="z-index: 15000;" role="dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <img src="<?= URL ?>images/scroll.gif" alt=""/>
                <div class="modalText">
                    <h4>Sponsors</h4>
                    <p>A big thank you to our sponsors, to whom we owe much of our success. </p>
                    <h5>Pupil Council/Vanier College Students Association</h5>
                    <img src="<?= URL ?>images/sponsors/vcsa.png" alt="" class="sponsorImage">
                    <p>Ever since October 20th 2014, the Vanier College Students’ Association has been financially
                        supporting and sponsoring the Vanier Blacksmith and Spar (Robotics) Association. This year, they
                        are
                        helping fund their works for Pythagorium 2016, being held on February 25th to 27th at Fort
                        Montmorency. The VCSA is an organization that prides itself on its support of student projects
                        and
                        activities. The hard work and dedication that the teams have exemplified throughout the semester
                        and
                        the winter break have made them ideal candidates to be worthy of VCSA funding. </p>
                    <h5>Team Bana</h5>
                    <img src="<?= URL ?>images/sponsors/teambana.png" alt="" class="sponsorImage">
                    <p>Team Bana, a group of pupils from Fort Vanier, produces websites and applications for small
                        armies
                        throughout Westeros by using the knowledge and skills that they’ve gained through the Computer
                        Science and Technology program. Their funding and experience has been essential to this great
                        war.</p>
                    <h5>Rona Pierrefonds</h5>
                    <img src="<?= URL ?>images/sponsors/Rona.png" alt="" class="sponsorImage">
                    <p>RONA L’entrepôt Pierrefonds first opened its doors in 2007 and has since been serving its
                        community’s
                        home renovation needs from its location at 3933 Boul. St Charles, Pierrefonds. RONA is your
                        all-in-one stop for hardware, building materials and home renovation products. </p>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div id="sponsorsModal" class="modal fade" style="z-index: 15000;" role="dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <img src="<?= URL ?>images/scroll.gif"/>
                <div class="modalText">
                    <h3>Commanditaires</h3>
                    <p>Un gros merci à tous nos commanditaires, à qui nous devons notre succès. </p>
                    <h5>Conseils des pupils/Conseil étudiants des élèves Vanier</h5>
                    <img align="center" src="<?= URL ?>images/sponsors/vcsa.png" alt="" class="sponsorImage">
                    <p>Depuis le 20 octobre 2014, le conseil étudiants des élèves Vanier a aidé à financer les
                        projets
                        de l’équipe de forgeron et longeron (robotique). Cette année, ils les aident à fonder
                        leurs
                        travaux pour Pythagorium 2016, qui se déroulera au fort Montmorency du 25 au 27 février.
                        La
                        VCSA
                        est une organisation qui est fier de supporter les projets et les activités des élèves.
                        Le
                        travail et le dévouement que les équipes ont démontré durant le semestre et les vacances
                        d’hiver
                        montrent que l’organisation est un cadidat idéal pour être digne de financement de la
                        VCSA.</p>
                    <h5>Équipe Bana</h5>
                    <img src="<?= URL ?>images/sponsors/teambana.png" alt="" class="sponsorImage">
                    <p>L’équipe Bana, un groupe d’étudiants du fort Vanier, produit des sites web et des
                        applications
                        pour des petites armées à travers Westeros en utilisant les connaissances et les
                        compétences
                        qu’ils ont acquises dans le programme de science et technologie des ordinateurs. Leur
                        financement ainsi que leur expérience ont été éssentiels à cette grande guerre. </p>
                    <h5>Rona Pierrefonds</h5>
                    <img src="<?= URL ?>images/sponsors/Rona.png" alt="" class="sponsorImage">
                    <p>RONA L’entrepôt Pierrefonds est ouvert en 2007 et depuis ce temps, il a répondu aux
                        besoins
                        de
                        rénovations de la communauté à partir de son emplacement au 3933 Boul. St Charles,
                        Pierrefonds.
                        RONA est votre arrêt tout-en-un pour les matériaux de construction et les produits de
                        rénovation
                        domiciliare. </p>
                </div>
            </div>
        </div>
    <?php } ?>
</footer>
</body>
</html>