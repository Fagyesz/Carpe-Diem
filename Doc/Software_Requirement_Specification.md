# Követelmény specifikáció

## 1. Áttekintés



## 2. A jelenlegi helyzet leírása
A mai rohanó világban egyre többen használják az internetet vagy a mobiltelefonjukat jegyvásárlásra, legyen szó mozijegyekről, vonat- vagy buszjegyekről. Az online jegyvásárlás kényelmes és gyors alternatívát jelent a hagyományos papíralapú jegyekhez képest.

Az online jegyvásárlásnak számos előnye van, például nem kell sorban állnunk, nem kell nyomtatni és magunkkal vinni a jegyet, illetve az online fizetési lehetőségek révén könnyedén és biztonságosan tudunk fizetni a jegyért. Amiatt sem kell aggódnunk, hogy az esetleges nagy sor miatt lekésnénk a járatunkat. Napokkal előre el tudunk tervezni egy utazást és be is tudunk szerezni minden szükséges jegyet hozzá. Emellett ezek a jegyek egyszerűbben kezelhetők, mint a hagyományos papíralapú jegyek, hiszen azokat nem lehet elveszíteni vagy elhagyni. Az online jegyvásárlás egyre népszerűbb és hasznos alternatívája a hagyományos jegyvásárlási módszereknek. Az online vásárolt jegyek kényelmesek, gyorsak és biztonságosak, így érdemes megfontolni azok használatát, ha rendszeresen használunk tömegközlekedési eszközöket vagy akár gyakran járunk moziba vagy színházba.


## 3. Vágyálomrendszer



## 4. Jelenlegi üzleti folyamatok modellje



## 5. Igényelt üzleti folyamatok modellje



## 6. Követelménylista
## Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület | Regisztráció | A felhasználó itt tud regisztrálni az alkalmazásba, megadva az alapvető adatokat (név, email, jelszó stb.). |
| K2 | Felület | Bejelentkezés | A felhasználó ezen a felületen tud bejelentkezni a profiljába. |
| K3 | Funkció | Jegyvásárlás | A felhasználó itt tud jegyet vásárolni az elérhető eseményekre, megadva az esemény nevét, dátumát, helyszínét és a jegy típusát (szektor, sor, ülés stb.). |
| K4 | Funkció | Jegyek megtekintése | A felhasználó itt meg tudja tekinteni a megvásárolt jegyeit, illetve el tudja menteni azokat PDF formátumban. A felhasználó tud keresni közöttük esemény típusa, dátuma, helyszíne, stb. alapján |
| K5 | Funkció | QR kód generálás | A jegyvásárlás után a felhasználónak emailben elküldjük a QR kódot, amit a belépésnél le kell szkennelni az eseményen. |
| K6 | Funkció | Google Calendar esemény létrehozása | Ha a felhasználó elfogadja, az alkalmazás automatikusan létrehoz egy Google Calendar eseményt az általa megvásárolt eseményről. |
| K7 | Felület | Profil szerkesztése | A felhasználó itt tudja szerkeszteni a profiljához tartozó adatokat (név, email, jelszó stb.). |
| K8 | Funkció | Fizetési módok | Az oldalnak különféle fizetése módokat kell támogatnia.(például bankkártyás). | 
| K9 | Funkció | Jegy visszatérítés | A felhasználó itt tudja visszatéríteni a megvásárolt jegyét a vásárlás feltételei alapján. |
| K10 | Funkció | Jegy érvényességének ellenőrzése | Az eseményen a belépéskor a személyzet ellenőrzi a jegy érvényességét a QR kód alapján. |
| K11 | Felület | Események kezelése | Az admin felületen az adminisztrátor tud eseményeket létrehozni, módosítani, törölni és azokra jegyeket rendelni. |"

## 7. Fogalomtár

* Admin: Egy felhasználói szerepkör teljes hozzáféréssel és irányítással az alkalmazás összes funkciójához és lehetőségéhez.
* Felhasználó: Az a személy, aki a webalkalmazást használja jegyek vásárlására, események megtekintésére és jegyeinek kezelésére.
* Esemény szervező: Felhasználói szerepkör, amely lehetővé teszi az események létrehozását és kezelését.
* QR-kód: Egy kétdimenziós vonalkód, amelyet okostelefonnal vagy vonalkódolvasóval lehet beolvasni, hogy gyorsan és könnyen * hozzáférjen az információhoz.
* Google Naptár: A Google által kifejlesztett felhőalapú naptárszolgáltatás.
* XAMPP: Olyan szoftvercsomag, amely tartalmazza az Apache webszervert, a MySQL adatbázist és a PHP szkriptnyelvet.
* Laravel: Egy PHP webalkalmazás-keretrendszer, amelyet a webalkalmazás fejlesztésére használnak.
* Webszerver: Egy számítógépes rendszer, amely weboldalakat és más webes tartalmakat szállít felhasználóknak.
* Adatbázis: Strukturált adatgyűjtemény, amelyet úgy tárolnak és szerveznek, hogy hatékony visszakeresést tesz lehetővé.
* API: Az alkalmazásprogramozási felület, egy protokoll- és eszközkészlet a szoftveralkalmazások építéséhez.
* HTTPS: A Hipertext Transzfer Protokoll biztonságos kiterjesztése, amely biztonságos kommunikációt biztosít az interneten.
* MVC: A Model-View-Controller szoftvertervezési minta, amely három összekapcsolt részre bontja az alkalmazást: a modellre, a nézetre és az irányítóra.
* Stripe: Egy fizetési feldolgozási platform, amely lehetővé teszi az üzleti vállalkozások számára az interneten történő fizetéseket.
* SSL: A Secure Sockets Layer protokoll, amely biztonságos kommunikációs kapcsolatokat hoz létre a hálózaton keresztül kapcsolódó  számítógépek között.
* Gyorsítótár: Olyan komponens, amely tárolja az adatokat, hogy a jövőbeli kérések gyorsabban teljesüljenek.
