Title: SNIP Projektmappe
Author: SNIP-Team
Comment: In diesem Dokument wird das 
         Projekt SNIP dokumentiert.

# Einleitung

In der folgenden Mappe dokumentieren wir unser Projekt SNIP.

# Warum diese Projektarbeit?

## Paspartout

EUER TEXT...

## ExtremeCoder1337

Ich hatte mich für dieses Projekt entschieden, weil Ich wusste, dass ich mein Wissen
in php in einigen Bereichen auffrischen kann und in anderen Bereichen sogar
komplett neue dinge lernen kann. Die Umsetzung des Projekts war jedoch nur davon
abhängig, wie gut wir das ganze Planen und wie gut wir alle im Kontakt bleiben,
was durch github jedoch sehr gut gelungen ist. Da Phileas und Ich ein großes Vorwissen
in php haben war die Programmierung des ganzen nur eine "tipp-arbeit".

//von Sebastian Schwarz

## Nischan

Ich habe mich für dieses Projekt entschieden, da es besonders als "Neuling" in der 
Max-Eyth-Schule Kassel schwer ist, sich in der großen Schule zurecht zu finden,
vorallem durch die vielen Flügel und Stockwerke.
Als der Vorschlag kam, habe auch ich sofort dafür gestimmt, weil ich es mir erhoffte,
dass es interessant wird diesen umzusetzten.
Auch dafür stimmte, dass man bei diesem Thema die Aufgaben sehr gut einteilen kann,
sodass Jeder Etwas zum bearbeiten hat und nicht nur bei den Anderen zuschaut.

//von Chris Johannsen

# Programmbeschreibung

SNIP steht für SchulNavigation in PHP.
Mithilfe von SNIP soll es neuen Schülern vereinfacht werden
bestimtme Räume in Schulen, Universitäten und sonstigen großen
Gebäuden zu finden.

SNIP soll eine Karte einblenden und es evtl. sogar ermöglichen,
eine Art Wegbeschreibung z.B. zum Ausdrucken oder anzeigen 
auf dem Smartphone zu erstellen. 

# Anforderungen

## Anforderungen an die Anwendung

### Primäre Anforderungen
- Speicherung eines kompletten Gebäudeplans(wie einer Schule) in MYSQL
- Das Abfragen der Position eines Raumes(Stockwerk, Anzeige eines Plans) in PHP
- Mehr...

### Sekundäre Anforderungen(da evtl. Zeitaufwending)
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

# Das ER-Modell

Das ER-Modell von SNIP stellt alle Entitäten der Anforderungsliste da.

Bild(muss noch hinzugefuegt werden):
![ER-Modell](er-modell.png "ER-Modell")

# Formularstruktur

### Startseite?

### Karte?

### Hinzufügen von Nodes?

# Arbeitsprotokoll

Da wir uns zum Arbeiten mit dem Versionskontrollsystem GIT auf der Plattform
Github.com entschieden haben, kann man dort auch jeden Beitrag zum Projekt
zurueckverfolgen. Die [Commits](https://github.com/SNIP-Team/SNIP/commits/master)
zeigen auf was wer wann hochgeladen hat.

Um das Lesen zu vereinfachen haben wir alle unsere Änderungen hier zusammengefasst.

## Paspartout

EUER TEXT...

## ExtremeCoder1337

- Login Seite inklusive CSS Template erstellt [ca. 60 Minuten]
- Eigene Funktionen erstellt und eine Config Datei angelegt [ca. 20 Minuten]
- CSS Template erweitert und großteils auf inline Stylesheets umgestiegen [ca. 10 Minuten (Pro seite...)]
- Images mit GIMP zurecht geschnitten und bearbeitet [ca. 30 Minuten]
- Register Seite erstellt [ca. 60 Minuten]

## Nischan

- Anforderungsliste an die Datenbank fertiggestellt. ca. 30 Minuten
- ER-Model fertiggestellt. ca. 30 Minuten
- Nodes für die Pläne erstellt. ca. 60 Minuten pro Stockwerk

# Fazit

## Paspartout

EUER TEXT...

## ExtremeCoder1337

Das Projekt ist nun schon fast fertig, dass Login/Register Script funktioniert einwandfrei 
inklusive aller abfragen um Fehler zu verhindern und Magic Quotes zu blockieren. Es fehlt
jediglich nur noch die Einbindung einer grafischen oberfläche und das anpassen unserer selbst 
geschriebenen Klassen um das Projekt fertig zu stellen.

## Nischan

Momentan sind wir noch an den Grundarbeiten, aber soweit funktioniert alles so wie es soll.
Ich denke, wennn unser Projekt fertig gestellt ist, wird alles so sein wie wir es uns vorstellen.
