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

  * Felhasználó: Aki használja a Laravel projektet a szükséges funkciók eléréséhez.
  * Vendég: Nem Bejelentkezett felhasználó.
  * User: Bejelentkezett felhasználó
  * Adminisztrátor: Aki azonosítja és kezeli a felhasználókat, valamint felügyeli a rendszer működését és biztonságát.

### 3.2 Üzleti folyamatok

  * Felhasználói regisztráció: A felhasználók regisztrálják magukat a rendszerbe, megadva a szükséges információkat, mint például az e-mail cím, felhasználónév és jelszó.
  * Bejelentkezés: A regisztrált felhasználók bejelentkezhetnek a rendszerbe az e-mail címük és jelszavuk megadásával.
  * Felhasználói profil kezelése: A felhasználók lehetőséget kapnak a profiljuk szerkesztésére, valamint azonosító és jelszó módosítására.
  * Termékek böngészése: A felhasználók áttekinthetik a rendelkezésre álló termékeket, kategóriákra és árak szerint rendezhetik azokat.
  *  Kosár kezelése: A felhasználók kosárba helyezhetik a kiválasztott termékeket, és lehetőségük van azok módosítására és eltávolítására is.
  *  Rendelés leadása: A felhasználók véglegesíthetik a kosárban lévő termékeiket és leadhatnak rendelést.
  *  Adminisztrátori felület kezelése: Az adminisztrátorok azonosíthatják a felhasználókat, kezelhetik a rendeléseket, módosíthatják a termékek adatait, illetve statisztikákat készíthetnek a rendszer használatáról.

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


1. Adatbázis tervezése és létrehozása: Az első lépés az adatbázis tervezése és létrehozása. Egy relációs adatbázist használunk, amelyben az eseményeket, a jegyeket és a felhasználók adatait tároljuk.

2. Laravel projekt létrehozása: Létrehozzuk a Laravel projektet, amely a szerveroldali logikát és a kapcsolódást az adatbázishoz biztosítja.

3. Felhasználói felület kialakítása: A felhasználói felületet a Bootstrap keretrendszerrel és a Laravel Blade sablonokkal készítjük el. Az oldalakat a funkcionális specifikációnak megfelelően alakítjuk ki.

4. Jegyek kezelése: A jegyek kezelése az egyik legfontosabb része az alkalmazásnak. Egy adminisztrátori felületet készítünk, amely lehetővé teszi az események és a hozzájuk tartozó jegyek létrehozását, módosítását és törlését.

5. Felhasználók kezelése: A felhasználók kezelése is fontos része az alkalmazásnak. Regisztráció után a felhasználók beléphetnek az alkalmazásba, megtekinthetik az eseményeket, kiválaszthatják a számukra megfelelő jegyeket, és megvásárolhatják azokat. Az alkalmazás lehetővé teszi a felhasználók számára, hogy mentse a jegyeket a Google Naptárba QR kód segítségével.

6. Fizetési módok kezelése: Az alkalmazás lehetővé teszi a felhasználók számára a jegyek megvásárlását különböző fizetési módokkal, például bankkártyával vagy PayPal-lal. Az alkalmazás biztosítja az SSL titkosítást a biztonságos adatátvitelhez.

7. Tesztelés és hibajavítás: Az alkalmazás tesztelése a projekt végén történik. A tesztelés során ellenőrizzük, hogy az alkalmazás minden funkciója helyesen működik-e, és kijavítjuk a hibákat, ha szükséges.

8. Kész alkalmazás telepítése és karbantartása: Az elkészült alkalmazást telepítjük a szerverre, és karbantartjuk az esetleges hibák és frissítések miatt. Az alkalmazás frissítéseket és karbantartást igényelhet a továbbiakban is.

## 11. Tesztterv
A tesztelések célja a rendszer funkcióinak alapos vizsgálata és ellenőrzése a rendszer által megvalósított üzleti szolgáltatások verifikálása érdekében. A teszteléseket a fejlesztő csapat tagjai elvégzik, és az eredményeket dokumentálják.
### Tesztesetek
|Teszteset|	Elvárt eredmény|
|---|---|
|Bejelentkezés helytelen felhasználói névvel vagy jelszóval|	Sikertelen bejelentkezés és hibaüzenet megjelenése.|
|Helyes bejelentkezés|	Sikeres bejelentkezés és az adatok megjelenítése.
|Keresés nem létező felhasználóra |	Sikertelen keresés és hibaüzenet megjelenése.|
|Keresés létező felhasználóra|	Sikeres keresés és az adatok megjelenítése.|
|Felhasználó létrehozása|	Sikeres felhasználó létrehozása az adatbázisban.|
|Tétel hozzáadása|	Sikeres tétel hozzáadása az adatbázishoz.|
|Tétel törlése|	Sikeres tétel törlése az adatbázisból.|
|Tétel módosítása|	Sikeres tétel módosítása az adatbázisban.|
### A tesztelési jegyzőkönyv kitöltésére egy sablon:

**Tesztelő:** Vezetéknév Keresztnév
**Tesztelés dátuma:** Év.Hónap.Nap
|Tesztszám|	Rövid leírás|	Várt eredmény|	Eredmény|	Megjegyzés|
|---|---|---|---|---|
|1|	Bejelentkezés helytelen adatokkal|	Sikertelen bejelentkezés és hibaüzenet megjelenése.|	Sikertelen bejelentkezés és a helyes hibaüzenet megjelenése.|	"A teszt sikeres volt."|
|2|	Helyes bejelentkezés|	Sikeres bejelentkezés és az adatok megjelenítése.	|Sikeres bejelentkezés és a megfelelő adatok megjelenítése.|"	A teszt sikertelen volt."|
|3|	Keresés nem létező felhasználóra|	Sikertelen keresés és hibaüzenet megjelenése.|	Sikertelen keresés és a helyes hibaüzenet megjelenése.|	|
|4|	Keresés létező felhasználóra|	Sikeres keresés és az adatok megjelenítése.|	Sikeres keresés és a megfelelő adatok megjelenítése.||


## 12. Karbantartási terv

Havi rendszeres ellenőrzés: Az alkalmazást havonta ellenőrizzük, hogy biztosítsuk annak megfelelő működését. Az ellenőrzés során a következőket végzik el:

  * Ellenőrzik, hogy az alkalmazás a megfelelő adatbázist használja-e, és hogy az adatbázis kapcsolatok működnek-e.
  * Ellenőrzik, hogy az alkalmazás frissítve van-e a legújabb verzióra.
  * Ellenőrzik, hogy az alkalmazás nem hibás-e és az összes folyamat megfelelően működik-e.

1. Rendszeres biztonsági mentések: Az alkalmazás rendszeres biztonsági mentéseket készít az adatbázisról és a felhasználói adatokról. A biztonsági mentések naponta kerülnek mentésre, így ha bármilyen adatvesztés vagy hiba történik, az adatok visszaállíthatók.

2. Automatikus frissítések: Az alkalmazás automatikusan frissül a legújabb verzióra, így a legújabb funkciókat és biztonsági javításokat tartalmazza.

3.  Hiba- és probléma kezelés: Ha bármilyen hiba vagy probléma merül fel az alkalmazásban, a csapatunk azonnal reagál és megoldja a problémát. Ha szükséges, javítócsomagot adunk ki, hogy az alkalmazás zavartalanul működjön.

4.  Felhasználói visszajelzések kezelése: Az alkalmazás felhasználói visszajelzéseit rendszeresen figyeljük és feldolgozzuk. Ha szükséges, az alkalmazást az észrevételek alapján frissítjük vagy javítjuk.