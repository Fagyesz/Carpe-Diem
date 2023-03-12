# Rendszerterv
## 1. A rendszer célja

A rendszer célja, hogy egy regisztrált felhasználó az admin jogkörrel rendelkezők álltal létrehozott eseményekre jegyet tudjon vásárolni.
A jegyvársárlás közben kitölti a vásárláshoz szükséges elengedhetetlen információkat (kártya adatok, és néhány személyes adat), majd megveszi a jegyet.

Miután a felhasználó rendelkezik az online jeggyel, azt ha szeretné a Google Calendar alkalmazáshoz hozzá tudja csatolni.
A vásárlás után, a jegyet QR kód formájában kapja meg, amit az eseményre belépéskor beolvasnak. Amennyiben a jegy ténylegesen ki lett fizetve,
szabad bejárást kap az eseményre.

A rendszer első sorban webes felületen lesz elérhető, amit Laravel keretrendszerrel készítünk el.
Néhány third-party API-t is szeretnénk beleépíteni, a fizetések kivitelezéséhez, és a Calendar-hoz való hozzáadáshoz.
