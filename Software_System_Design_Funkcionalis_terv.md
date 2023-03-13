## 6. Funkcionális terv

### Rendszerszerepkörök:
- Admin
- User
- Guest

### Rendszerhasználati esetek és lefutásaik:
#### ADMIN:
- Beléphet bármilyen szereplőként teljes hozzáférése van a rendszerhez.
- Eseményt tud létrehozni, módosítani és törölni.
- Jegyek beolvasása és hitelesítése az eseményre való belépéskor.

#### USER:
- A felsorolt eseményekre jegyet vásárolhatnak, az álltaluk megadott mennyiségben.
- Megnézhetik a megvásárolt jegyeiket az eseményekre.
- Felvehetik a jegyet vásárolt események időpontját és helyszínét a Google Calendar alkalmazásba.


#### GUEST:
- Csak megtekinteni tudják a felsorolt eseményeket, ezért jegyet vásárolni nem tudnak.
- Regisztrálhatnak az oldalra, és így megkapják a USER szerepkört.

### Menü-hierarchiák:
#### Bejelentkezés:
- Bejelentkezés
- Regisztráció

#### Főoldal:
- A meghírdetett események kilistázása.
- A meghírdetett eseményre jegyvásárlás (User jogosultsági körrel rendelkezőknek).
- Jegyet vásárolt események megtekintése (User jogosultsági körrel rendelkezőknek).

#### Admin irányítópult:
- Események létrehozása/módosítása/törlése (Admin jogosultsági körrel rendelkezőknek).
- QR kódok hitelesítése (Admin jogosultsági körrel rendelkezőknek).
