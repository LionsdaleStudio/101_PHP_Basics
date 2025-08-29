<?php
namespace App;

class Solution
{

/*
----------------------------------------------------------------------
Matematikai alapműveletek
----------------------------------------------------------------------
*/

    public function sum(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok összegét adja vissza
        return 0;
    }

    public function substract(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok különbségét adja vissza
        return 0;
    }

    public function multiply(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok szorzatát adja vissza
        return 0;
    }

    public function divide(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy hogy az, a paraméterként megadott számok hányadosát adja vissza
        return 0;
    }

    public function power(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy hogy az, a paraméterként megadott a változó b-re emelt hatványát adja vissza
        return 0;
    }

    public function sqrt(int $a, int $b): int
    {
        // Fejezd be, illetve alakítsd át a funkciót úgy hogy az, a paraméterként megadott a változó négyzetgyökét adja vissza
        return 0;
    }

    public function RDrootOf(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy hogy az, a paraméterként megadott A változó B-ik gyökét adja vissza
        return 0;
    }

    public function remainder(int $a, int $b): int
    {
        // Fejezd be a funkciót úgy, hogy az a paraméterként megadott számok osztásából származó maradékot adja vissza
        return 0;
    }

/*
----------------------------------------------------------------------
String alapműveletek
----------------------------------------------------------------------
*/

public function stringLength(string $text): int
{
    // Fejezd be a funkciót úgy, hogy visszaadja a $text karaktereinek számát
    return 0;
}

public function toUpperCase(string $text): string
{
    // Fejezd be a funkciót úgy, hogy a teljes szöveget nagybetűssé alakítja
    return '';
}

public function toLowerCase(string $text): string
{
    // Fejezd be a funkciót úgy, hogy a teljes szöveget kisbetűssé alakítja
    return '';
}

public function reverseString(string $text): string
{
    // Fejezd be a funkciót úgy, hogy visszaadja a szöveg karaktereit fordított sorrendben
    return '';
}

public function containsWord(string $text, string $word): bool
{
    // Fejezd be a funkciót úgy, hogy igazat adjon vissza, ha a $text tartalmazza a $word-öt
    return false;
}

public function substring(string $text, int $start, int $length): string
{
    // Fejezd be a funkciót úgy, hogy visszaadja a $text adott részét ($start pozíciótól $length hosszban)
    return '';
}

public function splitWords(string $text): array
{
    // Fejezd be a funkciót úgy, hogy a mondat szavait szóköz alapján feldarabolja és tömbként adja vissza
    return [];
}

public function joinWords(array $words): string
{
    // Fejezd be a funkciót úgy, hogy a $words tömb elemeit szóközzel összefűzve visszaadja
    return '';
}

public function capitalizeFirst(string $word): string
{
    // Fejezd be a funkciót úgy, hogy a $word első betűjét nagybetűssé alakítja
    return '';
}

public function trimText(string $text): string
{
    // Fejezd be a funkciót úgy, hogy eltávolítja a fölösleges szóközöket a szöveg elejéről és végéről
    return '';
}

/*
----------------------------------------------------------------------
Array alapműveletek
----------------------------------------------------------------------
*/

// 1. Számold meg a tömb elemeinek számát
public function countElements(array $arr): int
{
    return 0;
}

// 2. Add össze a tömb számait
public function sumArray(array $arr): int
{
    return 0;
}

// 3. Add vissza a tömb legnagyobb elemét
public function maxElement(array $arr): int
{
    return 0;
}

// 4. Add vissza a tömb legkisebb elemét
public function minElement(array $arr): int
{
    return 0;
}

// 5. Ellenőrizd, hogy egy adott érték szerepel-e a tömbben
public function containsValue(array $arr, $value): bool
{
    return false;
}

// 6. Add vissza a tömb első elemét
public function firstElement(array $arr)
{
    return null;
}

// 7. Add vissza a tömb utolsó elemét
public function lastElement(array $arr)
{
    return null;
}

// 8. Fordítsd meg a tömböt
public function reverseArray(array $arr): array
{
    return [];
}

// 9. Rendezd a tömböt növekvő sorrendbe
public function sortArray(array $arr): array
{
    return [];
}

// 10. Egyesíts két tömböt
public function mergeArrays(array $a, array $b): array
{
    return [];
}

// 11. Asszociatív tömbből kérj le egy értéket kulcs alapján
public function getValueByKey(array $arr, string $key)
{
    return null;
}

// 12. Adj hozzá egy új kulcs-érték párt az asszociatív tömbhöz
public function addKeyValue(array $arr, string $key, $value): array
{
    return [];
}

// 13. Távolíts el egy elemet a tömbből érték alapján
public function removeValue(array $arr, $value): array
{
    return [];
}

// 14. Add vissza a tömb kulcsait
public function getKeys(array $arr): array
{
    return [];
}

// 15. Add vissza a tömb értékeit
public function getValues(array $arr): array
{
    return [];
}


}
