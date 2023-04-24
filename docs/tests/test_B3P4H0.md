# Tesztjegyzőkönyv

Teszteléseket végezte: Ádám Bence

Operációs rendszer: macOS Ventura 13.3.1

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai - Alfa teszt

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
|-----------|----------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| API kérések autentikáció nélkül |2023.04.23. | Az adott API kéréseket nem hajtja végre, amíg nincs beautentikálva a lekérdező  | Amíg az adott felhasználó nincs autentikálva nem hajtódik végre a kérés. |  Nem találtam problémát. |
| Registráció API-on keresztül hibás adatokkal | 2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Már meglévő felhasználó adatainak módosítása rossz azonosítóval API-on keresztül | 2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Nem létező felhasználó törlése API-on keresztül | 2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát |
| Nem létező adatra keresés API-on keresztül | 2023.04.23. | Üzenetet kap a felhasználó, ha nincs ilyen adat | Nem kap semmilyen üzenetet a felhasználó | Megoldottam a hibát. |


Az Alfa tesztelés során a vizsgált elemek között volt ami nem megfelelően működött, ezt később javítottam.
