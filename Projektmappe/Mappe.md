Title: SNIP Projektmappe
Author: SNIP-Team
Comment: In diesem Dokument wird das 
         Projekt SNIP dokumentiert.

# Einleitung

In der folgenden Mappe dokumentieren wir unser Projekt SNIP.

# Vorwort

Im Vorwort möchten wir zeigen, warum wir uns für das Projekt entschieden haben.

## Warum habe ich mich für diese Projektarbeit entschieden 

### Paspartout

Ursprünglich wollte unsere Gruppe eine Datenbank für Smartphones entwerfen.
Doch ich wollte etwas entwickeln, was praktisch für den Alltag wäre.
Deswegen hatte ich erst den Vorschlag gemacht ein semantisches Netz in PHP
zu implementieren, was aber für meine Gruppe doch etwas zu komplex war.
Dann habe ich vorgeschlagen eine Art Schulnavi zu programmieren und die ganze
Gruppe war zu meiner Freude damit einverstanden. Besonders das Arbeiten im Team
ist eine Sache die man nach und nach lernen muss aber meiner Meinung nach auch sehr
viel mehr Spaß macht als alleine an einem Projekt zu arbeiten.

### ExtremeCoder1337

Ich hatte mich für dieses Projekt entschieden, weil ich wusste, dass ich mein Wissen
in PHP in einigen Bereichen auffrischen kann und in anderen Bereichen sogar
komplett neue Dinge lernen kann. Die Umsetzung des Projekts war jedoch nur davon
abhängig, wie gut wir das ganze Planen und wie gut wir alle im Kontakt bleiben,
was durch Github.com jedoch sehr gut gelungen ist. Da Paspartout und Ich ein großes Vorwissen
in PHP haben war und ist die Programmierung des ganzen nur eine "Tipp-Arbeit".

### Nischan

Ich habe mich für dieses Projekt entschieden, da es besonders als "Neuling" in der 
Max-Eyth-Schule Kassel schwer ist, sich in der großen Schule zurecht zu finden,
vor allem durch die vielen Flügel und Stockwerke.
Als der Vorschlag kam, habe auch ich sofort dafür gestimmt, weil ich mir erhoffte,
dass es interessant wird dieses Projekt umzusetzen.
Auch dafür stimmte, dass man bei diesem Thema die Aufgaben sehr gut einteilen kann,
sodass jeder etwas zum bearbeiten hat und nicht nur bei den Anderen zuschaut.

# Einleitung

Auf dieser Seite bieten wir einen kleinen Einblick darüber, was SNIP eigentlich ist,
welche Anforderungen wir haben und stellen dazu noch das ER-Modell sowie eine
vorläufige Version unserer Formularstruktur vor.

## Programmbeschreibung

SNIP steht für SchulNavigation in PHP.
Mithilfe von SNIP soll es neuen Schülern und Besuchern vereinfacht werden
bestimmte Räume in Schulen, Universitäten und sonstigen großen
Gebäuden zu finden.

SNIP soll eine Karte einblenden und es eventuell sogar ermöglichen,
eine Art Wegbeschreibung z.B. zum Ausdrucken oder anzeigen 
auf dem Smartphone zu erstellen. 

# Anforderungen

## Anforderungen an die Anwendung

### Primäre Anforderungen
- Speicherung eines kompletten Gebäudeplans(wie einer Schule) in MYSQL
- Das Abfragen der Position eines Raumes(Stockwerk, Anzeige eines Plans) in PHP
- Mehr...

### Sekundäre Anforderungen(da evtl. Zeitaufwendig)
- Navigation von einem Raum zu einem anderen Raum
    - Anhand einer Karte mit Pfad
    - Mit ausdruckbarer Wegbeschreibung

## Anforderungsliste an die Datenbank

1.  Welche Gebäude gibt es?
2.  Jedes Gebäude hat eine Flügel Kennzeichnung.
3.  Welche Stockwerke gibt es?
4.  Jedes Stockwerk hat eine Nummer.
5.  Welche Räume gibt es?
6.  Jeder Raum hat eine Nummer, eine Kennzeichnung und einen Betreuer.
7.  Welche Nodes gibt es?
8.  Ein Node hat eine X- und eine Y-Koordinate.
9.  Ein Stockwerk befindet sich in einem Gebäude, aber ein Gebäude kann mehrere Stockwerke haben.
10. Ein Raum ist in einem Stockwerk, aber ein Stockwerk kann mehrere Räume haben.
11. Ein Raum hat mehrere Nodes, aber eine Node gehört immer nur zu einem Raum.

## Das ER-Modell

Das ER-Modell von SNIP stellt alle Entitäten der Anforderungsliste da.

Bild(muss noch hinzugefügt werden):
![ER-Modell](er-modell.png "ER-Modell")

## Formularstruktur

### Startseite

Auf der Startseite kann man sich einloggen und sich einen Benuterprofil erstellen.
Beim Login wird abgefragt, welchen Benutzernamen und welches Passwort man besitzt.

Beim Registrieren muss man seinen gewünschten Benutzernamen, sein Passwort und seine
E-Mail Adresse angeben.

### Karte(Suche nach Räumen)

Das Suchen vor Räumen auf einer Karte beziehungsweise in einem Gebäude wird durch
ein Suchfeld ermöglicht werden.

# Protokoll

Da wir uns zum Arbeiten mit dem Versionskontrollsystem GIT auf der Plattform
Github.com entschieden haben, kann man dort auch jeden Beitrag zum Projekt
zurückverfolgen. Die [Commits](https://github.com/SNIP-Team/SNIP/commits/master)
zeigen auf was wer wann hochgeladen hat.

Um das Lesen zu vereinfachen haben wir alle unsere Änderungen hier zusammengefasst.

## Paspartout

- ER-Modell für das Karten-System in PHP erweitert [ca. 20 Minuten]
- Erste Tests mit PHP und GD zum Zeichnen gemacht[ca. 60 Minuten]
- Die ersten Klassen in PHP implementiert[ca. 30 Minuten]
- Nischan in das zeichnen der Karten eingeweist[ca. 30 Minuten]
- Aufgaben analysiert, verteilt und verwaltet[ca. 30 Minuten]
- Projektmanagement strukturiert und erstellt [ca. 90 Minuten]
- Logo für SNIP designt[40 Minuten]

## ExtremeCoder1337

- Login Seite inklusive CSS Template erstellt [ca. 60 Minuten]
- Eigene Funktionen erstellt und eine Config Datei angelegt [ca. 20 Minuten]
- CSS Template erweitert und großteils auf inline Stylesheets umgestiegen [ca. 10 Minuten (Pro seite...)]
- Images mit GIMP zurecht geschnitten und bearbeitet [ca. 30 Minuten]
- Register Seite erstellt [ca. 60 Minuten]
- Fork us on Github Banner eingebunden [ca. 10 Minuten]
- Bezeichnungen der Räume des Gebäudes S aufgeschrieben [ca. 180 Minuten]
- Design der Login Seite und der Register Seite mit dem gesamten Projekt vereinheitlicht [ca. 45 Minuten]
- Login Seite und Register Seite komplett geupdated und auf HTML5 geändert [ca. 90 Minuten]
- Eigene SQL-Injection Funktion verbessert um noch mehr "verbotene Zeichen" abzufangen ! [ca. 20 Minuten]
- Einige Sicherheitslücken behoben ! [ca. 15 Minuten]
- Datenbank geleert [ca. 2 Minuten]

## Nischan

- Anforderungsliste an die Datenbank fertiggestellt. [ca. 30 Minuten]
- ER-Modell fertiggestellt. [ca. 30 Minuten]
- Nodes für die Pläne erstellt. ca. [60 Minuten pro Stockwerk]
- Bezeichnungen der Räume des Gebäudes S aufgeschrieben [ca. 180 Minuten]
- Kartendaten aktualisiert und Bezeichnungen und Ähnliches eingefügt [ca. 90 Minuten]


# Fazit

## Paspartout

Bis jetzt bin ich wirklich zufrieden mit der Arbeit an dem Projekt.
Was uns sehr viel Arbeit abnimmt ist wie schon früher in dieser Mappe erwähnt,
dass arbeiten mit einem Versionskontrollsystem wie GIT auf Github.com.
Obgleich wir noch einiges an Arbeit vor uns haben, freue ich mich schon darauf
das Programm einmal in Aktion zu sehen. Mir ist aufgefallen, dass man beim Arbeiten
im Team wirklich darauf achten muss sich selbst nicht zu hoch einzuschätzen, auf Vorschläge
einzugehen und bereit sein muss eigene Paradigmen aufzugeben oder abzuändern.
Trotz einiger Probleme die es zu lösen gab und auch noch gibt, macht mir das Arbeiten im Team 
aber sehr viel Spaß.

## ExtremeCoder1337

Das Projekt ist in den letzten Monaten von einer kleinen Idee, zu einer wirklich raffinierten Anwendung geworden.
Die Seite um sich einen Benutzer zu erstellen und die Seite um sich mit dem Benutzer anzumelden ist auf dem aktuellsten 
Stand von HTML5 um viele benutzerfreundliche Möglichkeiten zu realisieren und das ganze Projekt ansehnlicher wirken zu
lassen. Durch eine von mir entwickelte "magic-quotes block" Funktion wird garantiert, dass es einem Benutzer nicht möglich
sein wird, die Datenbank in irgendeiner Art und Weise über das Login/Register - System zu hacken !
Durch eine gute Aufteilung der Arbeit, wurde eine optimierte Arbeitsgeschwindigkeit erreicht. Somit hat ein Team Mitglied
wie Chrisdoph, dem das programmieren schwerer fällt, Aufgaben wie das einzeichnen der Nodes und Fotografieren der
Räume bekommen und Team Mitglieder wie Phileas und ich uns um das wichtigere im Hintergrund gekümmert !

## Nischan

Bis jetzt haben wir schon die Karten fertig, das Login und eine Vorversion der Navigation.
Das Routing durch die Einzellnen Stockwerke und Gänge erwies sich allerdings als schwerer
als geplant, sodass wir uns dazu entschieden haben, die Räume, die gesucht werden, "aufpoppen" zu lassen.

Unser Projekt könnte sicher auch in anderen Bereichen Verwendung finden und um Karten und "Nodes" erweitert werden.
