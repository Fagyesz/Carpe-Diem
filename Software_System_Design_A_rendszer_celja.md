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
