# Rendszerterv
## 1. A rendszer célja

A rendszer célja, hogy egy regisztrált felhasználó az admin jogkörrel rendelkezők álltal létrehozott eseményekre jegyet tudjon vásárolni. 
A még nem regisztált felhasználó (guest), csak megtekinteni tudja az eseményeket, jegyet vásárolni nem tud.
Regisztrációt és belépést követően a user-nek lehetősége adódik arra, hogy jegyet tudjon vásárolni az oldalon.

A jegyvásárláshoz elengedhetetlen adatok a következőek: 
- kártya adatok
- teljes név
- születési idő
- lakcím
- email cím
- telefonszám

Az előzetesen felsorolt adatok megadását követően tud jegyet vásárolni.

Miután a felhasználó rendelkezik egy online jeggyel, ha szeretné a Google Calendar alkalmazáshoz hozzá tudja csatolni. Így nyomon tudja követni azokat az eseményeket,
amikre jegyet vásárolt.
A vásárlás után, a jegyet QR kód formájában kapja meg, amit az eseményre belépéskor beolvasnak. Ha a kód ellenőrzését követően a rendszer "kifizetve" állapotban tér vissza, akkor beléphet az eseményre.

A rendszer webböngészőben lesz elérhető, amit Laravel keretrendszerben alakítunk ki.
Néhány third-party API-t is szeretnénk beleépíteni, a fizetések kivitelezéséhez, és a Calendar-hoz való hozzáadáshoz.


## 2. Projektterv


     
### 2.3 Ütemterv:


### 2.1 Projektszerepkörök, felelősségek:
Product owner: Bagoly Gábor

Scrum masters: Pápai Kristóf

### 2.2 Projektmunkások és felelősségek:
Design: Vincze Flórián, Katona Bálint Sándor, Ádám Bence, Tóth Tamás

Developer: Vincze Flórián, Katona Bálint Sándor, Ádám Bence, Tóth Tamás

Tesztelő: Vincze Flórián, Katona Bálint Sándor, Ádám Bence, Tóth Tamás
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|       |       |      |      |       |         |      |

Az ütemterv későbbi fázisai előzetes eggyeztetés alapján megbeszélendőek.

### 2.4 Mérföldkövek:
- Követelmény specifikáció elkészítése
- Funkcionális specifikáció elkészítése
- Rendszerterv elkészítése
-
A mérföldkövek későbbi fázisai előzetes eggyeztetés alapján megbeszélendőek.

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők



### 3.2 Üzleti folyamatok



## 4. Követelmények

### Funkcionális követelmények:
- Webes környezeten való működés.
- Különböző jogkörökkel rendelkező felhasználók tárolása.
- Felhasználói fiók létrehozása.
- Jegyek vásárlása és tárolása felhasználói fiókonként.
- Egy darab QR kód generálása egy darab jegyhez.
- Események integrálása Google Calendar-ba.
- QR kódok hitelességének ellenőrzése.

### Nem funkcionális követelmények:
- A felhasználók nem juthatnak hozzá más felhasználók személyes adataihoz.

## 5. Funkcionális terv


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

## 6. Fizikai környezet

Az alkalmazás webböngésző felületre készül, amit Google Chrome, Mozzilla Firefox és más hasonló böngészőkből lehet elérni egy URL cím segítségével. 

### Külső Api-k, amiket használunk:
- Google Calendar API
- Laravel QR Code vagy Google Vision API a QR kód kezeléshez.

### Fejlesztői eszközök:
- Visual Studio Code
- Laravel Framework
- PHP MySQL

## 8. Architekturális terv


### Backend:
A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk.

### Web Kliens:
A web alkalmazás Laravel keretrendszer használatával készül el.
A rendszer egy megfelelő erősorrásokkal rendelkező cloud-based szerveren fog futni,
hogy a várható forgalmat kitudja szolgálni.


## 9. Adatbázis terv

![image](https://github.com/Fagyesz/Carpe-Diem/tree/main/imgs/db.png)

## 10. Implementációs terv



## 11. Tesztterv



## 12. Karbantartási terv

Havi rendszeres ellenőrzés: Az alkalmazást havonta ellenőrizzük, hogy biztosítsuk annak megfelelő működését. Az ellenőrzés során a következőket végzik el:

  * Ellenőrzik, hogy az alkalmazás a megfelelő adatbázist használja-e, és hogy az adatbázis kapcsolatok működnek-e.
  * Ellenőrzik, hogy az alkalmazás frissítve van-e a legújabb verzióra.
  * Ellenőrzik, hogy az alkalmazás nem hibás-e és az összes folyamat megfelelően működik-e.

1. Rendszeres biztonsági mentések: Az alkalmazás rendszeres biztonsági mentéseket készít az adatbázisról és a felhasználói adatokról. A biztonsági mentések naponta kerülnek mentésre, így ha bármilyen adatvesztés vagy hiba történik, az adatok visszaállíthatók.

2. Automatikus frissítések: Az alkalmazás automatikusan frissül a legújabb verzióra, így a legújabb funkciókat és biztonsági javításokat tartalmazza.

3.  Hiba- és probléma kezelés: Ha bármilyen hiba vagy probléma merül fel az alkalmazásban, a csapatunk azonnal reagál és megoldja a problémát. Ha szükséges, javítócsomagot adunk ki, hogy az alkalmazás zavartalanul működjön.

4.  Felhasználói visszajelzések kezelése: Az alkalmazás felhasználói visszajelzéseit rendszeresen figyeljük és feldolgozzuk. Ha szükséges, az alkalmazást az észrevételek alapján frissítjük vagy javítjuk.