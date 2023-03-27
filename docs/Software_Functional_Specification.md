# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

A mai modern társadalomnak nélkülözhetetlenné vált az internet és okostelefonok használata. Így minden területen térhódítás ment végbe. A "régi" hagyományos papír alapú jegyek használatát is megreformálta például. Ez mind a vevőnek, mind az eladónak egy újabb és kényelmes lehetőséget biztosít. Az ügyfélnek például nem kell hosszó sorokat végig állnia, így ki is zárul az a lehetőség, hogy a sor miatt lekésné az eseményt. Ebből következik, hogy a jegyet nem tudja elhagyni, hiszen ott van a telefonján. További előny, hogy a vevő kiválaszthatja a számára megfelelő időpontot vagy helyet, vagyis ez a fajta online jegyvásárlás rugalmassabb. Az átláthatóság is jobb online, az ügyfél láthatja a jegyek mennyiségét és árát és az események részletes leírását. A biztonság szempontjából is előnyben van, hiszen az online vásárlást számos biztonsági protokoll biztosítja, így nem kell attól félnünk, hogy elveszítenénk a pénzünket. Összességében az online jegyvásárlás egyre csak népszerűbb alternatíva, hiszen kényelmes, gyors és biztonságos a papír alapú jegyekhez képest.

## 2. Vágyállomrendszer leírása

Igen, az alábbiakban található a funkcionális specifikáció a vágyálom rendszerre:

   1. Felhasználói regisztráció és bejelentkezés lehetősége.
   2. Események keresése, böngészése és részletes információk megtekintése azokról (pl. időpont, helyszín, műsor, előadók).
   3. Jegyvásárlás online, különböző fizetési lehetőségekkel (bankkártya, PayPal stb.).
   4. A jegyek megvásárlása után egyedi QR-kód küldése emailben, amely tartalmazza az esemény információit, a vásárlás részleteit és az ülőhelyeket.
   5. Automatikus felajánlás a Google Naptárba való importálásra a vásárlás után.
   6. Ügyfélszolgálati lehetőségek biztosítása (pl. e-mail, chat, telefon).
   7. Adminisztrációs felület biztosítása az események, jegyek és rendelések kezeléséhez, módosításához és törléséhez.
   8. Adatvédelem és biztonság biztosítása a felhasználók és az ügyfelek számára (pl. SSL tanúsítvány használata, adatvédelmi szabályzat kialakítása).
   9. Statikus oldalak biztosítása, amelyek tartalmazzák az ÁSZF-et, az Adatvédelmi szabályzatot, a Kapcsolat oldalt és a Súgó oldalt.

Ezen funkciók mindegyike része a vágyálom rendszernek, amely egy egyszerű, felhasználóbarát és biztonságos jegyértékesítő alkalmazás, amely lehetővé teszi a felhasználók számára a különböző eseményekre való jegyvásárlást az interneten keresztül.

## 3. Jelenlegi üzleti folyamatok modellje

A mai világban a jelenleg rendelkezésünkre álló technológiákkal könnyebbé, egyszerűbbé tehetjük a jegyek vásárlását. Ennek segítségével az adott esemény helyszínén nincs szükség kasszára és lassan haladó sorokra. Ennek a rendszer segítségével az adott eseményre az emberek beengedése sokkal gyorsabbsan tud haladni, mint a hagyományos módszerekkel. A QR kód segítéségvel a beléptetés lényegesen gyorsabban tud működni.
A hagyományos jeggyel szembe ezt a digitális QR kódot megkapjuk emailben, illetve az adott weboldalon is elérhető saját fiókunkban. Ezáltal sokkal nehezebben tudjuk elhagyni akár. Ezáltal a jegyek nyomntatásának költségeit is meg lehet spórolni.

## 4. Igényelt üzleti folyamatok modellje

Egyszerűbbé és elérhetőbbé tegyük az adott eseményekre való jegyvásárlást, illetve az egyszerűbb beléptetést is. Ez a rendszer nem csak felhasználóknak lesz jó, hanem a rendezvény szervező cégeknek is plusz lehetőség a hagyományos jegyértékesítés mellett akár. Mivel a mai világban szinten mindenki rendelkezik okostelefonnal, ezért így a jegyeket is tudjuk majd tárolni a telefonukban.

## 5. Követelménylista


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


## 6. Használati esetek


### ADMIN
- Az admin elér minden adatot az összes felhasználóról illetve az alapvető statisztikákat is.
- Látja az összes eseményt és az eseményeket kezelni is képes (Létrehozni, Törölni, Szerkeszteni).
- Felhasználók jogosultságát kezelni.

### USER
- User már a regisztrált felhasználó
- Látja az elérhető eseményeket és a hozzá tartozó adatokat, illetve vásárolni is tud jegyet az adott eseményre.
- A megvásárolt jegyeit és hozzá tartozó összes adatot látja bejelentkezés után egy listában a profilján belül

### GUEST
- A még nem belejentkezett felhasználó, akik csak az elérhető eseményeket látják, illetve az adott rendszerüzeneteket.
- Jegyet nem tud vásárolni csak részletes információkat lát az adott eseményről.


## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

Jelenlegi használati esetek teljes mértékben lefedik a követelményeket.
- Regisztráció
- Belépés
- Jegyvásrlás
- Jegykezelés
- QR kód kezelés


## 8. Képernyőtervek

### Főablak:
Later
### Beállítások:
Later

## 9. Forgatókönyvek


### Regisztráció
   1. A felhasználó a kezdőoldalon kiválasztja a "Regisztráció" gombot.
   2. Az alkalmazás a felhasználói regisztrációs űrlapot jeleníti meg, ahol a felhasználó megadhatja a felhasználónevét, e-mail címét és jelszavát.
   3. Az űrlapon lehetőség van arra, hogy a felhasználó megadja a választható opciós telefonszámát.
   4. A felhasználó kitölti a regisztrációs űrlapot és elküldi az űrlapot az alkalmazás számára.
   5. Az alkalmazás ellenőrzi a felhasználó által megadott adatokat. Ha a felhasználónév vagy az e-mail cím már használatban van, az alkalmazás figyelmezteti a felhasználót, hogy válasszon egy másikat. Ha az összes adat helyes, az alkalmazás rögzíti az új felhasználót a users táblában.
   6. A felhasználó bejelentkezik az alkalmazásba a regisztrált e-mail címével és jelszavával.
### Bejelentkezés
   1. A felhasználó a kezdőoldalon kiválasztja a "Bejelentkezés" gombot.
   2. Az alkalmazás a felhasználói bejelentkezési űrlapot jeleníti meg, ahol a felhasználó megadhatja az e-mail címét és jelszavát.
   3. A felhasználó kitölti a bejelentkezési űrlapot és elküldi az űrlapot az alkalmazás számára.
   4. Az alkalmazás ellenőrzi a felhasználó által megadott adatokat. Ha az adatok helyesek, az alkalmazás engedélyezi a felhasználó bejelentkezését.
   5. Ha a felhasználó regisztrált a Google vagy a GitHub szolgáltatásra, akkor lehetősége van az alkalmazáshoz való bejelentkezésre is.
   6. A felhasználó választja a Google vagy a GitHub bejelentkezést.
   7. Az alkalmazás átirányítja a felhasználót a Google vagy a GitHub bejelentkezési oldalára.
   8. A felhasználó bejelentkezik a Google vagy a GitHub fiókjával.
   9. Az alkalmazás engedélyezi a felhasználó bejelentkezését és átirányítja a felhasználót a kezdőoldalra.
### Általános folyamat
   1. A felhasználó bejelentkett a jegykezelő alkalmazásba, majd megtekinti az aktuális események listáját a kezdőoldalon.
   2. A felhasználó kiválasztja az eseményt, amelyre jegyet szeretne vásárolni, majd megadja a kívánt jegyek számát.
   3. Az alkalmazás kiszámolja a tranzakció összegét, majd a felhasználót átirányítja a fizetési oldalra.
   4. A felhasználó megadja a számlázási és fizetési információit, majd elküldi a tranzakciót. Az alkalmazás sikeres fizetés esetén létrehoz egy új jegyrekordot a tickets táblában.
   5. Az alkalmazás az új jegyrekordhoz egyedi QR-kódot generál, amelyet elküld az e-mail címre, amelyet a felhasználó megadott a tranzakció során. Az e-mailben szerepelnie kell egy linknek is, amelyre kattintva a felhasználó visszajut az alkalmazásba.
   6. Az alkalmazás várja a felhasználó további utasításait, és nem adja hozzá automatikusan az eseményt a Google naptárhoz. Az alkalmazás egy felugró ablakban felajánlja a felhasználónak, hogy hozzáadja az eseményt a Google naptárához, és lehetőséget ad a felhasználónak a hozzáadás elutasítására.
   7. Ha a felhasználó elfogadja a naptárhoz adást, akkor az alkalmazás az esemény adatai alapján automatikusan létrehoz egy új naptári eseményt a felhasználó Google naptárában. A felhasználó ezt az eseményt az eseménynaptárban láthatja, és módosíthatja, törölheti vagy hozzáadhatja más eseményekhez.

## 10. Fogalomszótár

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
