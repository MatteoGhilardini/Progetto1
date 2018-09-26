# Riassunto 1

## Project lifecycle
Designa le varie tappe dello sviluppo del progetto, dalla concezione alla scomparsa di esso.
Modelli:
- cascata
- iterativo / incrementale
- evolutivo

#### Iterativo / Incrementale

- Permette dei tornare ad una fase del progetto già affrontata.
- Parte da un prototipo che verrà affinato in seguito.
```
Attualmente viene considerato il migliore perchè permette un'azione mirata ad una singola fase del progetto.
```

#### Evolutivo

Vengono ripetute sempre le stesse fasi:
- Costruzione prototipo
- Distribuzione all'utente
- Valutazione dell'utente
- Evoluzione del prototipo iniziale

#### A Cascata

- Fasi sequenziali
- Ogni fase dipende dalla precedente
- Ogni fase viene documentata
```
Fu il primo modello applicato, ma sta lentamente scomparendo.
```
Le fasi sono:
- Analisi: 
    - capire cosa dovà fare il sistema (colloquio con il cliente)
    - stesura Analisi dei Requisiti
- Progettazione:
    - definire componenti e relazioni fra essi
    - documento design globle (gantt)
- Implementazione (+ test modulo):
    - implementazione separata dei vari moduli
    - documentazione tecnica
- Integrazione (+ test globale)
    - unire i vari moduli & testarne il funzionamento
    - sistema funzionante
- Manutenzione
    - beta testing

---
---

## Analisi
Chiarire lo scopo del sistema (cosa dovrà fare). Nel modello iterativo viene fatta più volte.
#### Analisi dei costi e dei benefici
Essere in grado di valutare la fattibilità e la convenienza dell'investimento
#### Analisi dei requisiti
Negoziazione fra cliente e analista. Chiarimenti di eventuali disguidi. Nel modello iterativo avviene gradualmente (per es. dopo una prima release).
#### FURPS
Acronimo per la definizione dei requisiti:
- Functionality
- Usability
- Reperibility
- Performance
- Supportability

#### Documento di specifica dei requisiti
Stabilisce COSA il sistema deve fare, NON COME.
Deve tenere in considerazione qualunque eventualità (ES: utenti che fanno errori).

---
---

## Progettazione (Gantt)
Ha come scopo definire:
- risorse
- costi
- tempistiche
- fattibilità
- punti critici
- incarichi e responsabilità