# PHP gyakorló feladatok

Ebben a repositoryban **45 alapfeladatot** találsz három kategóriában:  
- 🧮 8 matematikai feladat  
- 🔤 10 string feladat  
- 📦 15 array (tömb) feladat  

A feladatok üres függvényként találhatók a `Solution.php` fájlban az `App\Solution` osztályban.  
A tesztek automatikusan ellenőrzik a megoldásokat.

---

## Hogyan használd?

1. Telepítsd a legfrissebb [PHP](https://www.php.net/downloads.php) verziót a gépedre. A legújabb XAMPP telepítése a legfrissebb [PHP] verziót is telepíti.  
2. Telepítsd a [Composer](https://getcomposer.org/) csomagkezelőt.  
3. Nyisd meg a GitHub repository-t a Visual Studio Code-ban (például: `101_PHP_Basics`) és nyiss egy új terminált.  
4. Futtasd a **composer install** parancsot.  
5. A telepítés után megjelenik a `vendor` mappa a `tests`, `src` mappa mellett a gyökérkönyvtárban.  
6. A teszteket a terminálban a következő paranccsal tudod futtatni:  
   ```bash
   ./vendor/bin/phpunit

🧮 Matematikai feladatok

1. sum(a, b) – Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok összegét adja vissza.  
2. substract(a, b) – Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok különbségét adja vissza.  
3. multiply(a, b) – Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok szorzatát adja vissza.  
4. divide(a, b) – Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok hányadosát adja vissza (0 esetén kezelni kell).  
5. power(a, b) – Fejezd be a funkciót úgy, hogy az `a` változót `b`-re emelt hatványát adja vissza.  
6. sqrt(a) – Fejezd be a funkciót úgy, hogy az `a` szám négyzetgyökét adja vissza (negatív esetben null).  
7. RDrootOf(a, b) – Fejezd be a funkciót úgy, hogy az `a` szám `b`-edik gyökét adja vissza.  
8. remainder(a, b) – Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok osztásából származó maradékot adja vissza.

🔤 String feladatok
1. stringLength(text) – Fejezd be a funkciót úgy, hogy visszaadja a `text` karaktereinek számát.  
2. toUpperCase(text) – Fejezd be a funkciót úgy, hogy a teljes szöveget nagybetűssé alakítja.  
3. toLowerCase(text) – Fejezd be a funkciót úgy, hogy a teljes szöveget kisbetűssé alakítja.  
4. reverseString(text) – Fejezd be a funkciót úgy, hogy visszaadja a szöveg karaktereit fordított sorrendben.  
5. containsWord(text, word) – Fejezd be a funkciót úgy, hogy igazat adjon vissza, ha a `text` tartalmazza a `word`-öt.  
6. substring(text, start, length) – Fejezd be a funkciót úgy, hogy visszaadja a `text` adott részét a `start` pozíciótól `length` hosszban.  
7. splitWords(text) – Fejezd be a funkciót úgy, hogy a mondat szavait szóköz alapján feldarabolja és tömbként adja vissza.  
8. joinWords(words) – Fejezd be a funkciót úgy, hogy a `words` tömb elemeit szóközzel összefűzve visszaadja.  
9. capitalizeFirst(word) – Fejezd be a funkciót úgy, hogy a `word` első betűjét nagybetűssé alakítja.  
10. trimText(text) – Fejezd be a funkciót úgy, hogy eltávolítja a fölösleges szóközöket a szöveg elejéről és végéről.  

📦 Array (tömb) feladatok
1. countElements(arr) – Számold meg a tömb elemeinek számát.  
2. sumArray(arr) – Add össze a tömb számait.  
3. maxElement(arr) – Add vissza a tömb legnagyobb elemét.  
4. minElement(arr) – Add vissza a tömb legkisebb elemét.  
5. containsValue(arr, value) – Ellenőrizd, hogy egy adott érték szerepel-e a tömbben.  
6. firstElement(arr) – Add vissza a tömb első elemét (üres tömbnél null).  
7. lastElement(arr) – Add vissza a tömb utolsó elemét (üres tömbnél null).  
8. reverseArray(arr) – Fordítsd meg a tömböt.  
9. sortArray(arr) – Rendezd a tömböt növekvő sorrendbe.  
10. mergeArrays(a, b) – Egyesíts két tömböt.  
11. getValueByKey(arr, key) – Asszociatív tömbből kérj le egy értéket kulcs alapján.  
12. addKeyValue(arr, key, value) – Adj hozzá egy új kulcs-érték párt az asszociatív tömbhöz.  
13. removeValue(arr, value) – Távolíts el egy elemet a tömbből érték alapján.  
14. getKeys(arr) – Add vissza a tömb kulcsait.  
15. getValues(arr) – Add vissza a tömb értékeit.  

