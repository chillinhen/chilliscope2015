<?php /* Template Name: About */ get_header(); ?>
    <main role="main">
        <section id="wip">
            <dl class="infographic">
                <ol>
                    <li>Beratung, Kennenlernen</li>
                    <li>Analyse, Ziel</li>
                    <li>Ideen, Inspiration</li> 
                    <li>Austausch</li> 
                    <li>Kommunikation</li> 
                    <li>Design,Entwurf</li>
                    <li>Freigabe</li>
                    <li>Umsetzung</li> 
                </ol>
            </dl>
            <dd>
                Mit dynamischen Workflows Transparenz schaffen - mein Arbeitsprozess
            </dd>
            <div class="content">
                <hgroup>
                    <h2>aussen hui, innen pfui? gibts hier nicht</h2>
                </hgroup>
                <p>
                   Meine Arbeit zeichnet sich durch Neugier und Interesse/Leidenschaft fürs Webdesign aus. Neue Erkenntnisse lasse ich in meine Arbeiten einfließen und Sie daran teilhaben.
                </p>
                <button>Angebot</button>
                <button>Kontakt</button>
            </div>
        </section>
        <section id="vita">
            <div class="img-bg"></div>
            <div class="content">
                <article>
                    <header><h2>Vita/ was persönliches</h2></header>
                    <section>
                        
                
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
 
Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                </p>
                <aside>
                    <em>Tabs</em>
                <ul>
                    <li>1993-98</li>
                    <li>bis 2011</li>
                    <li>ab 2011</li>
                </ul>
                    </aside>
                </section>
                    <footer></footer>
                </article>
            </div>
        </section>

        <section id="contact">
            <article>
                <header>Haben Sie Interesse an einer Zusammenarbeit?</header>
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
            </article>
        </section>
    </main>
    <footer>
        <em>Footer Navbar</em>
    </footer>
</div>
<?php get_footer(); ?>