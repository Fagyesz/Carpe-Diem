# Tesztjegyzőkönyv

Teszteléseket végezte: Tóth Tamás

Operációs rendszer: Windows 10 Pro

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai - Alfa teszt

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
|-----------|----------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Mezők üresen hagyása a regisztrációkor |2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. |  Nem találtam problémát. |
| Üzenet mező üresen hagyása a contact üzenetben és úgy küldés | 2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Ticket vásárlás egy eventre, amikor "Unavailabe" státuszban van | 2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Esemény meghirdetése hamarabbi végdátummal, mint kezdő dátummal | 2023.04.23. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | A művelet végrehajtódik, sikeres üzenettel | Orvosoltam a problémát |
| Az url mezőt átírva megpróbálni elérni más felhasználó jegyeit | 2023.04.23. | Művelet nem hajtódik végre. Minden felhasználó csak a saját jegyeit láthatja | Művelet nem hajtódik végre. Minden felhasználó csak a saját jegyeit láthatja  |  Nem találtam problémát. |
| Ha a jegyvásárlások során elfogynak a jegyek, akkor onnantól kezdve nem lehet több jegyet venni ahoz az eventhez | 2023.04.23. |Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát.  |  Nem találtam problémát. |
| Esemény létrehozásakor, az ár és a darabszám, nem lehet string | 2023.04.23. |Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Hibát dob a Laravel környezet  |  Orvosoltam a problémát |

Az Alfa tesztelés során a vizsgált elemek között volt ami nem megfelelően működött, ezt később javítottam.

