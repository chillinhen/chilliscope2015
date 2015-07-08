<?php /* Template Name: Startseite */ get_header(); ?>

    <main role="main">
        <section id="intro">
            <div class="img-bg"></div>
            <div class="content">
                <hgroup>
                    <h2>CSS-Kosmetikerin > link</h2>
                    <h2>Code-Reinigungsfachkraft > link</h2>
                    <h2>Projektspitzen-Ausbüglerin > link</h2>
                </hgroup>
                <div class="me">
                    <div class="text">
                        <p>
                            Meine Name ist Claudia Hillen und ich arbeite für Sie als freischaffende/freiberufliche Grafik- und Webdesignerin. Ich gestalte, renoviere und entwickele gemeinsam mit Ihnen Ihren Webauftritt nach Ihren Wünschen und Möglichkeiten.
                        </p>
                        <p>Erfahren Sie mehr über mein Angebot, meine Arbeit(sweise) und kontaktieren Sie mich.</p>
                    </div>
                    <div class="contact">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dummyPics/typing.jpg" alt="me-at-desktop"/>
                        <button>mehr erfahren</button>
                        <button>Kontakt</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="frage">
            <div class="img-bg"></div>
            <div class="content">
                <h2>Frischer Wind für Ihren Webauftritt</h2>
                <ul>
                    <li>Haben Sie bereits eine Webseite?</li>
                    <li>Und sind Sie der Meinung, daß diese mehr leisten könnte?</li>
                    <li>Oder haben Sie noch keine Webseite, aber schon eine Vorstellung davon, wie sie aussehen könnte?</li>
                    <li>oder möchten Sie eine neue Webseite, aber wissen nicht wo Sie anfangen sollen?</li>
                </ul>
            </div>
        </section>
        <section id="antwort">
            <p>Ich biete Ihnen die beste Webseite hinsichtlich Ihrer zur Verfügung stehenden Ressourcen und Budgets. Gemeinsam benennen wir Ihre beabsichtigten Ziele und Möglichkeiten, um zu einem Ergebnis zu kommen, das Ihren Wünschen entspricht.</p>
        </section>
        <section id="current-project">
            <article>
                <header>
                    <h2>Aktuelles Projekt</h2>
                </header>
                <section>
                    <dl>
                        <dt class="thumbnail">
                        <img src="http://localhost:8888/chilliscope2015/wp-content/uploads/2015/03/dummy-latest.png" alt="Dummy" />
                        </dt>
                        <dd><button>zum Portfolio</button></dd>
                    </dl>
                    <div class="content">
                        <p>
                            Projektbescheibung, Techniken, blabla .... Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.

                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                        </p>
                    </div>
                </section>
                <footer>
                    Tags, Schlagworte, Blabla <button>edit</button>
                </footer>
            </article>
        </section>
        <section id="fav-projects">
            <div class="content">
                <hgroup>
                    <h2>Auszüge meiner Arbeit</h2>
                </hgroup>
                <div class="list">
                    <article>
                        <header><h3>Projekt Blablabla</h3></header>
                        <section>
                            <img class="thumbnail" alt="Dummy" src="http://localhost:8888/chilliscope2015/wp-content/uploads/2015/03/dummy-ref-pw-wordpress-825x510.png">
                        </section>
                        <footer>
                            Untertitel, Beschreibung
                        </footer>
                    </article>
                    <article>
                        <header><h3>Projekt Blablabla</h3></header>
                        <section>
                            <img class="thumbnail" alt="Dummy" src="http://localhost:8888/chilliscope2015/wp-content/uploads/2015/03/dummy-ref-pw-wordpress-825x510.png">
                        </section>
                        <footer>
                            Untertitel, Beschreibung
                        </footer>
                    </article>
                    <article>
                        <header><h3>Projekt Blablabla</h3></header>
                        <section>
                            <img class="thumbnail" alt="Dummy" src="http://localhost:8888/chilliscope2015/wp-content/uploads/2015/03/dummy-ref-pw-wordpress-825x510.png">
                        </section>
                        <footer>
                            Untertitel, Beschreibung
                        </footer>
                    </article>
                </div>
            </div>
        </section>
        <section id="recommends">
            <em>Blockquote Carousel</em>
            <blockquote cite="http://url.org/">
                <p>
                    Vielen Dank für Ihre professionelle und hochwertige Umsetzung unserer Website 
                    und weiterer Werbematerialien .... " 
                    <cite>ali, Juni 2012</cite>
                </p>
            </blockquote>
        </section>
        <section id="contact">
            <article>
                <header>Haben Sie Interesse an einer Zusammenarbeit?</header>
                <section>
            <form>
                <fieldset>
                    <legend>Kontakt</legend>
                    <input type="text" value="Vorname">
                    <input type="text" value="Name">
                    <textarea>
                        Ihre Nachricht
                    </textarea>
                    <em>optional</em>
                    <select>
                        <option>Datei hochladen</option>
                    </select>
                    <input type="submit" value="abschicken">
                </fieldset>
            </form>
                <p>
                    Schicken Sie mir eine E-Mail. Rufen Sie mich an.
Oder füllen Sie den [Fragebogen] aus und schicken ihn mir mit dem untenstehenden Formular. (oder per Email) zu. Ich melde mich in (... realistischer Zeitpunkt) bei Ihnen.
                </p>
                <aside>
                    <img src="" alt=""/>
                    <address>
                        Claudia Hillen<br>
                        Dipl.Designerin (FH)<br>
                        E-Mail: contact@chilliscope.de<br>
                        Telefon: 0241/ 94 37 89 27<br>
                    </address>
                  <?php get_template_part('partials/social-links');?>
                </aside>
                </section>
            </article>
        </section>
    </main>
    <footer>
        <em>Footer Navbar</em>
    </footer>
</div>
<?php get_footer(); ?>