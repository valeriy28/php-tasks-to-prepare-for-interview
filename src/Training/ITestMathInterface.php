<?php
namespace Training;

interface ITestMathInterface
{
    /**
     * На входе массив чисел
     * array(2,5,3,5,6,7,8,9,25,24,18,26,27,28,29,30,31)
     * Вывести числа кратные 3 и 7 в строку разделенную запятыми
     *
     * Ответ '3,6,7...и тд.'
     */
    public function testMath1($array);

    /**
     * Нужно сгенерировать случайным образом пароль заданной длинны и из указанных символов.
     * $symbols - строка с символами
     * $lenght - длинна пароля
     *
     * Пример:
     * на входе
     *  $symbols = 'abcdsrRGHK12345'
     *  $lenght = 5
     * на выходе строка 'bR48s'
     */
    public function testMath2($symbols, $lenght);

    /**
     * Вывести числа Фибоначи от 3 до 200, где максимальное значение может быть
     *  указано опционально параметром $max
     *
     * На выходе строка к примеру - '0,1,1,2,3,5 и тд.'
     *
     * Числа Фибоначи где каждое последующее число
     *  образуется путем сложения двух предыдущих.
     * Пример:
     * 0,1
     * 0,1,1
     * 0,1,1,2
     * 0,1,1,2,3 и тд.
     */
    function testMath3($max);

}