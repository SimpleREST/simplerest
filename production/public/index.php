<?php

define('SIMPLEREST_START', microtime(true));
/**
 * --------------------------------------------------------------------------------------------
 * RU/EN: Основная точка входа/ Main entry point
 * --------------------------------------------------------------------------------------------
 *
 * Создается экземпляр класса приложения из "котла", замер времени выполнения скрипта, для
 * логирования результатов, подключение автозагрузчика классов, исполнителя и хендлера.
 */
//TODO проверить на наличие, получить доступ к основному классу движка (из котла)
//TODO реализовать старт, стоп, вычисление разницы в миллисекундах времени работы скрипта
//TODO реализовать автозагрузку классов
//TODO не забыть по окончании работы скрипта все позакрывать и поудалять.

/**
 * --------------------------------------------------------------------------------------------
 * RU/EN: Это временная заглушка / This is a temporary stub
 * --------------------------------------------------------------------------------------------
 *
 * Временная заглушка кода / This is a temporary code stub
 * По завершении редактирования файла УБРАТЬ!
 */
define('SIMPLEREST_STOP', microtime(true));
exit("Привет! Программа завершила работу (затрачено времени:" . (SIMPLEREST_STOP - SIMPLEREST_START) . "ms");

