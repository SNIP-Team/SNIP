Title: SNIP Projektmappe
Author: SNIP-Team
Comment: In diesem Dokument wird das 
         Projekt SNIP dokumentiert.

# Einleitung

In der folgenden Mappe dokumentieren wir unser Projekt SNIP.

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

# Arbeitsprotokoll

Da wir uns zum Arbeiten mit dem Versionskontrollsystem GIT auf der Plattform
Github.com entschieden haben, kann man dort auch jeden Beitrag zum Projekt
zurueckverfolgen. Die [Commits](https://github.com/SNIP-Team/SNIP/commits/master)
zeigen auf was wer wann hochgeladen hat.
