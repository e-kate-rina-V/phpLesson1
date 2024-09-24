<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    //Робота зі змінними

    #Створіть змінну $a і присвойте їй значення 3. Виведіть значення цієї змінної на екран.

    $a = 3;
    echo "a = ", $a;

    #Створіть змінні $a=10 і $b=2. Виведіть на екран їхню суму, різницю, добуток і частку (результат ділення).

    $a = 10;
    $b = 2;

    echo "</br> a + b = ", $a + $b;
    echo "</br> a - b = ", $a - $b;
    echo "</br> a * b = ", $a * $b;
    echo "</br> a / b = ", $a / $b;

    #Створіть змінні $c=15 і $d=2. Підсумуйте їх, а результат присвойте змінній $result. Виведіть на екран значення змінної $result.

    $c = 15;
    $d = 2;

    $result = $c + $d;

    echo "</br> result = ", $result;

    #Створіть змінні $a=10, $b=2 і $c=5. Виведіть на екран їхню суму.

    $a = 10;
    $b = 2;
    $c = 5;

    echo "</br> a + b + c = ", $a + $b + $c;

    /*Створіть змінні $a=17 і $b=10. Відніміть від $a змінну $b і результат присвойте змінній $c. Потім створіть змінну $d, 
    присвойте їй значення 7. Складіть змінні $c і $d, а результат запишіть у змінну $result. Виведіть на екран значення змінної $result.*/

    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;

    echo "</br> result = ", $result;

    //Робота з рядками
    #Створіть змінну $text і присвойте їй значення 'Привіт, Світ!'. Виведіть значення цієї змінної на екран.

    $text = 'Привіт, Світ!';

    echo "</br>", $text;

    #Створіть змінні $text1='Привіт, ' і $text2='Світ!'. За допомогою цих змінних і операції додавання рядків виведіть на екран фразу 'Привіт, Світ!'.

    $text1 = 'Привіт,';
    $text2 = 'Світ!';

    echo "</br>", $text1 . $text2;

    #Створіть змінну $name і присвойте їй ваше ім'я. Виведіть на екран фразу 'Привіт, %Ім'я%!'. Замість %Ім'я% має стояти ваше ім'я.

    $name = "Katerina";

    echo "</br> Привіт, ", $name;

    #Створіть змінну $age і присвойте їй ваш вік. Виведіть на екран 'Мені %Вік% років!'.

    $age = 21;

    echo "</br> Мені ", $age, " рік";

    //Звернення до символів рядка
    #Створіть змінну $text і присвойте їй значення 'abcde'. Звертаючись до окремих символів цього рядка, виведіть на екран символ 'a', символ 'c', символ 'e'.

    $text = 'abcde';

    echo "</br>", $text[0], $text[2], $text[4];

    #Дано довільний рядок, наприклад, 'abcde'. Поміняйте першу букву (тобто букву 'a') цього рядка на '!'.

    $text = 'abcde';

    $text[0] = "!";

    echo "</br>", $text;

    #Створіть змінну $num і присвойте їй значення '12345'. Знайдіть суму цифр цього числа.

    $num = 12345;

    echo "</br>", array_sum(str_split($num));

    //Практика
    #Напишіть скрипт, який рахує кількість секунд у годині, у добі, у місяці.

    echo "</br> Кількість секунд у годині: ", 60 * 60;
    echo "</br> Кількість секунд у добі: ", 60 * 60 * 24;
    echo "</br> Кількість секунд у місяці: ", 60 * 60 * 24 * 30;


    #Створіть три змінні - година, хвилина, секунда. З їхньою допомогою виведіть поточний час у форматі 'година:хвилина:секунда'.

    $hour = 'h';
    $minute = 'i';
    $second = 's';
    echo "</br>", date("$hour:$minute:$second");


    #Створіть змінну, присвойте їй число. Підведіть це число до квадрата (це означає, що потрібно помножити його саме на себе). Виведіть його на екран.

    $h = 25;

    echo "</br>", $h ** 2;

    //Робота з присвоюванням і декрементами
    /*Переробіть цей код так, щоб у ньому використовувалися операції +=, -=, *=, /=. Кількість рядків коду при цьому не повинна змінитися.

     $var = 47;
     $var = $var + 7;
     $var = $var - 18;
     $var = $var * 10;
     $var = $var / 20;
     echo $var;*/

    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo "</br>", $var;

    /*Переробіть цей код так, щоб у ньому використовувалася операція .=. Кількість рядків коду при цьому не повинна змінитися.

     $text = 'Я';
     $text = $text.' хочу';
     $text = $text.' знати';
     $text = $text.' PHP!';
     echo $text;*/

    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знати';
    $text .= ' PHP!';
    echo "</br>", $text;

    /*Переробіть цей код так, щоб у ньому використовувалися операції ++ і --. Кількість рядків коду при цьому не повинна змінитися.

     $var = 10;
     $var = $var + 1;
     $var = $var - 1;
     echo $var;*/

    $var = 10;
    $var++;
    $var--;
    echo "</br>", $var;

    /*Переробіть цей код так, щоб у ньому використовувалися операції ++, -- , +=, -=, *=, /=. Кількість рядків коду при цьому не повинна змінитися.

     $var = 10;
     $var = $var + 7;
     $var = $var + 1;
     $var = $var - 1;
     $var = $var + 12;
     $var = $var * 7;
     $var = $var - 15;
     echo $var;*/

    $var = 10;
    $var += 7;
    $var++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo "</br>", $var;

    //Робота з масивами
    #Створіть масив $arr=['a', 'b', 'c']. Виведіть значення масиву на екран за допомогою функції var_dump().

    $arr = ['a', 'b', 'c'];

    echo "</br>", var_dump($arr);

    #За допомогою масиву $arr з попереднього номера виведіть на екран вміст першого, другого і третього елементів.

    echo "</br>", $arr[0], $arr[1], $arr[2];

    #Створіть масив $arr=['a', 'b', 'c', 'd'] і з його допомогою виведіть на екран рядок 'a+b, c+d'.

    $arr = ['a', 'b', 'c', 'd'];

    echo "</br> $arr[0] + $arr[1], $arr[2] + $arr[3]";

    /*Створіть масив $arr з елементами 2, 5, 3, 9. Помножте перший елемент масиву на другий, а третій елемент на четвертий. 
    Результати складіть, присвойте змінній $result. Виведіть на екран значення цієї змінної*/

    $arr = [2, 5, 3, 9];

    $result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);

    echo "</br>", $result;

    #Заповніть масив $arr числами від 1 до 5. Не оголошуйте масив, а просто заповніть його присвоюванням $arr[] = нове значення.

    $arr = array(
        0 => 1,
        1 => 2,
        2 => 3,
        3 => 4,
        4 => 5
    );

    echo "</br>", var_dump($arr);

    // Асоціативні масиви
    #Створіть масив $arr. Виведіть на екран елемент із ключем 'c'. $arr = ['a'=>1, 'b'=>2, 'c'=>3]

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];

    while ($key = current($arr)) {
        if ($key == 3) {
            echo "</br>", key($arr);
        }
        next($arr);
    }

    #Створіть масив $arr. Знайдіть суму елементів цього масиву. $arr = ['a'=>1, 'b'=>2, 'c'=>3];

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];

    echo "</br>", array_sum($arr);

    #Створіть масив заробітних плат $arr. Виведіть на екран зарплату Петрика та Колі. $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];

    $arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];

    echo "</br>", $arr['Петя'], ", ", $arr['Коля'];

    /*Створіть асоціативний масив днів тижня. Ключами в ньому мають слугувати номери днів від початку тижня (понеділок - повинен мати ключ 1, 
    вівторок - 2 і т.д.). Виведіть на екран поточний день тижня.*/

    $arr = [1 => 'Понеділок', 2 => 'Вівторок', 3 => 'Середа', 4 => 'Четвер', 5 => 'П\'ятниця', 6 => 'Субота', 7 => 'Неділя'];

    $currentDay = date('N');

    echo "</br>", $arr[$currentDay];

    /*Нехай тепер номер дня тижня зберігається у змінній $day, наприклад там лежить число 3. Виведіть день тижня, 
    що відповідає значенню змінної $day.*/

    $day = 3;

    echo "</br>", $arr[$day];

    //Багатовимірні масиви
    /*Створіть багатовимірний масив $arr. З його допомогою виведіть на екран слова 'joomla', 'drupal', 'зелений', 'червоний'.

    $arr = [
      'cms'=>['joomla', 'wordpress', 'drupal'],
      'colors'=>['blue'=>'блакитний', 'red'=>'червоний', 'green'=>'зелений']
    ];*/

    $arr = [
        'cms' => ['joomla', 'wordpress', 'drupal'],
        'colors' => ['blue' => 'блакитний', 'red' => 'червоний', 'green' => 'зелений']
    ];

    echo "</br>", $arr['cms'][0];
    echo "</br>", $arr['cms'][2];

    echo "</br>", $arr['colors']['green'];
    echo "</br>", $arr['colors']['red'];

    /*Створіть двовимірний масив. Перші два ключі - це 'ua' і 'en'. Нехай перший ключ містить елемент, що є масивом назв днів 
      тижня українською, а другий - англійською. Виведіть за допомогою цього масиву понеділок українською та середу англійською (нехай понеділок - це перший день).*/

    $arr = [
        'ua' => [1 => 'Понеділок', 2 => 'Вівторок', 3 => 'Середа', 4 => 'Четвер', 5 => 'П\'ятниця', 6 => 'Субота', 7 => 'Неділя'],
        'en' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday']
    ];

    echo "</br>", $arr['ua'][1];
    echo "</br>", $arr['en'][3];

    /*Нехай тепер у змінній $lang зберігається мова (вона приймає одне зі значень або 'ua', або 'en' - або те, або те), а у змінній $day - номер дня. 
      Виведіть словом день тижня, що відповідає змінним $lang і $day. Тобто: якщо, наприклад, $lang = 'ua' і $day = 3 - то виведемо 'середу'.*/

    $lang = 'en';
    $day = 6;

    echo "</br>", $arr[$lang][$day];

    ?>
</body>

</html>